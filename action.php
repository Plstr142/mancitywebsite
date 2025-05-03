<?php

    require_once 'config.php';

    if (isset($_POST['query'])) {    
        $inputText = $_POST['query'];
        $sql = "SELECT player_name FROM players WHERE player_name LIKE :player";     
        $stmt = $conn->prepare($sql);
        $stmt->execute(['player' => '%' . $inputText . '%' ]);
        $result = $stmt->fetchAll();

        if ($result) {
            foreach($result as $row) {
                echo '<a class="list-group-item list-group-item-action border-1">' . $row['player_name'] .  '</a>';
            }
        } else {
            echo '<p class="list-group-item border-1">No record</p>';
        }
    }

?>