<?php
    require_once "./dbshopping.php";
   
    try  {
        if($_SERVER['REQUEST_METHOD'] == 'GET') {
            $object = new stdClass();

            $stmt = $db->prepare('select * from shopping_product order by id desc');

            if($stmt->execute()) {
                $num = $stmt->rowCount();
                if($num > 0) {
                    $object->Result = array();
                    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        $product_item = array(
                            'id' => $id,
                            'name' => $name,
                            'image' => $img,
                            'price' => $price,
                            'description' => $description,
                            'type' => $type
                        );
                        array_push($object->Result, $product_item);
                    }
                    $object->RespCode = 200;
                    $object->RespMessage = 'success';
                    http_response_code(200);
                } else {
                    $object->RespCode = 400;
                    $object->Log = 0;
                    $object->RespMessage = 'bad: Not found data';
                    http_response_code(400);
                }
            } else {
                $object->RespCode = 500;
                $object->Log = 1;
                $object->RespMessage = 'bad: bad sql';
                http_response_code(400);
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