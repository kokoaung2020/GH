<?php
class DBGen{
    const DB_HOST = "localhost";
    const DB_NAME = "resturance";
    const DB_USER = "root";
    const DB_PASS = "";
    private $conn;
    public function __construct(){
        try{
            $this->conn = new PDO("mysql:host=".self::DB_HOST.";dbname=".self::DB_NAME,
                          self::DB_USER,self::DB_PASS);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            if($this->conn){
                echo "Database Successfully connected";
            }
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }
}
?>