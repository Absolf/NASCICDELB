<?php
class Database
{
    	
	//private $host = $_SERVER['"DB_HOST'];
	//private $db_name = $_SERVER['DB_NAME'];
	//private $username = $_SERVER['DB_USERNAME'];
	//private $password = $_SERVER['DB_PASSWORD']; 
    private $host = getenv("DB_HOST");
    private $db_name = getenv("DB_NAME");
    private $username = getenv("DB_USERNAME");
    private $password = getenv("DB_PASSWORD");
    public $conn;
     
    public function dbConnection()
 {
     
     $this->conn = null;    
        try
  {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
   $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        }
  catch(PDOException $exception)
  {
            echo "Connection error: " . $exception->getMessage();
        }
         
        return $this->conn;
    }
}
?>