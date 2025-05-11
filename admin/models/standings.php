<?php

require_once __DIR__ . '/../models/databasemain.php';

class Standings
{
    private $conn;
    // prop
    private $table = "standings";
    public function __construct()
    {
        // obj instance
        $database = new DatabaseMain();
        // db obj
        $this->conn = $database->Connect();
    }
    public function getStandings()
    {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

class Teams
{
    private $conn;
    // prop
    private $table = "teams";

    public function __construct()
    {
        // obj instance
        $database = new DatabaseMain();
        // db obj
        $this->conn = $database->Connect();
    }
    public function getTeams()
    {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
