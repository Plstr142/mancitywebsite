<?php
require_once "./dbshopping.php";

try {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $object = new stdClass();
        $amount = 0;
        $productposter = $_POST['productposter'];

        $stmt = $db->prepare('select id, price from shopping_product order by id asc');
        if ($stmt->execute()) {

            $queryproduct = array();
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                extract($row);
                $items = array(
                    "id" => $id,
                    "price" => $price,
                );
                array_push($queryproduct, $items);
            }

            for ($i = 0; $i < count($productposter); $i++) {
                for ($k = 0; $k < count($queryproduct); $k++) {
                    // count productposter
                    if (intval($productposter[$i]['id']) == intval($queryproduct[$k]['id'])) {
                        $amount += intval($productposter[$i]['count']) * intval($queryproduct[$k]['price']);
                        break;
                    }
                }
            }

            // insert into shopping_transaction
            $shipping = $amount + 60;
            $vat = $shipping * 7 / 100;
            $netamount = $shipping + $vat;
            $transid = round(microtime(true) * 1000);
            $productposter = json_encode($productposter);
            $mil = time()*1000;
            $updated_at = date("Y-m-d h:i:sa");

            $stmt = $db->prepare('insert into shopping_transaction (transid, orderlist, amount, shipping, vat, netamount, operation, mil, updated_at) values (?,?,?,?,?,?,?,?,?)');
            if($stmt->execute([
                $transid, $productposter, $amount, $shipping, $vat, $netamount, 'PENDING', $mil, $updated_at
            ])) {
                $object->RespCode = 200;
                $object->RespMessage = 'success';
                $object->Amount = new stdClass();
                $object->Amount->Amount = $amount;
                $object->Amount->Shipping = $shipping;
                $object->Amount->Vat = $vat; 
                $object->Amount->Netamount = $netamount;                 

                http_response_code(200);
            } else {
                $object->RespCode = 300;
                $object->Log = 0;
                $object->RespMessage = 'bad : insert transaction fail';
                http_response_code(300);
            }

    
        } else {
            $object->RespCode = 500;
            $object->Log = 1;
            $object->RespMessage = 'bad : cant get product';
            http_response_code(500);
        }
        echo json_encode($object);
    } else {
        // request type is not GET
        http_response_code(405);
    }
} catch (PDOException $e) {
    http_response_code(500);
    echo $e->getMessage();
}
