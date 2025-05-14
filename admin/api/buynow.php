<?php
    require_once "./dbshopping.php";
   
    try  {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $object = new stdClass();
            $amount = 0; 
            $productposter = $_POST['productposter'];
            
            $stmt = $db->prepare('select id, price from shopping_product order by id asc'); 
            if($stmt->execute()) {

                $queryproduct = array();
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    extract($row);
                    $items = array(
                        "id" => $id,
                        "price" => $price, 
                    );
                    array_push($queryproduct, $items);
                }

                for ($i=0; $i < count($productposter); $i++) {
                    for ($k=0; $k < count($queryproduct); $k++) {
                        // count productposter
                        if(intval($productposter[$i]['id']) == intval($queryproduct[$k]['id'])) {
                            $amount += intval($productposter[$i]['count']) * intval($queryproduct[$k]['price']);
                            break;
                        }
                    }
                }

                $object->RespCode = 200;
                $object->Amount = $amount;
                echo json_encode($object);
                http_response_code(200);
            } 
            else {
                echo json_encode($queryproduct, $items);
            }
        }   
        else{
            // request type is not GET
            http_response_code(405);
        }
    } 
    catch (PDOException $e) {
        http_response_code(500);
        echo $e->getMessage();
    }

?>