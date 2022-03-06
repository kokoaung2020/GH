<?php

namespace app\database;

class DBGen{

    const DB_HOST = "localhost";
    const DB_USER = "root";
    const DB_PASS = "";
    const DB_NAME = "restaurant";

    private $conn;
    public  function __construct() {
        $this->conn = new \mysqli(self::DB_HOST,self::DB_USER,self::DB_PASS,self::DB_NAME);
    }

    public function getSingleShop($id){
        $stmt = $this->conn->prepare("SELECT * FROM shops WHERE id=?");
        $stmt->bind_param('i',$id);
        $result = $stmt->execute();
        $stmt->bind_result($id,$name,$ipadd,$username,$password,$state,$created_at);

        while($stmt->fetch()){
            echo $id."<br>".$name."<br>".$ipadd."<br>".$username."<br>".$password."<br>".$state."<br>".$created_at;
        }
    }
}