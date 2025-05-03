<?php

require_once __DIR__ . '../models/teams.php';

class Teams
{

    public function searchTeams()
    {
        $db = new DatabaseSearch();
        $conn = $db->connect();

        $stmt = $conn->prepare("SELECT short_name * FROM teams WHERE name LIKE :keyword");
        $stmt->bindValue(':keyword', "%$keyword%");
        $stmt->execute();
        $players = $stmt->fetchAll(PDO::FETCH_ASSOC);

        require_once __DIR__ . "../views/search.php";
    }
}
