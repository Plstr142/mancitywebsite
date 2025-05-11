<!-- // prop
// obj instance
// db obj
< -->

<!-- // require_once __DIR__ . '/../models/databasesearch.php'; -->

<!-- class Teams {
    private $conn;
    private $table = "teams"; 
    
    public function __construct() {
        $database = new DatabaseSearch(); 
        $this->conn = $database->connect();
    }
    public function getTeams() {
        $query = "SELEC * FRO " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

?> -->