<?php
class DBGen{

    const DB_HOST = "localhost";
    const DB_USER = "root";
    const DB_PASS = "";
    const DB_NAME = "resturance";
    private $conn;
    public function __construct(){
        $this->conn = new mysqli(self::DB_HOST,self::DB_USER,self::DB_PASS,self::DB_NAME);
    }
    public function getSingleShop($id){
        $stmt = $this->conn->prepare("SELECT * FROM shops WHERE id=?");
        $stmt->bind_param('i',$id);
        $result = $stmt->execute();
        $stmt->bind_result($id,$name,$ipadd,$username,$password,$state,$create_at);
        while($stmt->fetch()){
            echo $id ."<br>".$name."<br>".$ipadd."<br>".$username."<br>".$password.
            "<br>".$state."<br>".$create_at;
        }
    }
    public function getMultiShop($state){
        $stmt = $this->conn->prepare("SELECT * FROM shops WHERE state=?");
        $stmt->bind_param('i',$state);
        $result = $stmt->execute();
        $stmt->bind_result($id,$name,$ipadd,$username,$password,$state,$create_at);
        while($stmt->fetch()){
            echo $id ."<br>".$name."<br>".$ipadd."<br>".$username."<br>".$password.
            "<br>".$state."<br>".$create_at;
            echo "<hr>"; 
        }
    }
    public function insertSingleShop($name,$ipadd,$user,$pass,$state){
        $datty = date("Y-m-d H:m:s");
        $stmt=$this->conn->prepare("INSERT INTO shops (name,ipadd,username,password,
              state,create_at) VALUES(?,?,?,?,?,?) ");
        $stmt->bind_param('ssssis',$name,$ipadd,$user,$pass,$state,$datty);
        $result = $stmt->execute();
        echo $result ? "Data Insert Successful!" : "Data Insert Fail!";
    }
    public function insertMultiShop($shops){
        $datty = date("Y-m-d H:m:s");
        $stmt=$this->conn->prepare("INSERT INTO shops(name,ipadd,username,password,
        state,create_at) VALUES(?,?,?,?,?,?) ");
       foreach($shops as $shop){
           $stmt->bind_param('ssssis',$shop[0],$shop[1],$shop[2],$shop[3],$shop[4],$datty);
           $result = $stmt->execute();
           $lastinsertid = $stmt->insert_id;
           echo "Successfully insert ".$shop[0]." with id of ". $lastinsertid;
           echo "<hr>";
       }
    }
    public function updateShop($shopid,$name){
        $stmt = $this->conn->prepare("UPDATE shops SET name=? WHERE id=?");
        $stmt->bind_param('si',$name,$shopid);
        $result =$stmt->execute();
        echo $result;
    }
    public function deleteShop($shopid){
        $stmt = $this->conn->prepare("DELETE FROM shops WHERE id=?");
        $stmt->bind_param('i',$shopid);
        $result = $stmt->execute();
        echo $result;
    }
    public function getJoinData($state){
        $stmt = $this->conn->prepare("SELECT
                od.id as order_id,
                sh.name as shop_name,
                dh.name as dish_name,
                (od.price * od.amount) as total,
                od.create_at as datty
            FROM
                orders as od
            LEFT JOIN
                shops as sh
            ON 
                sh.id = od.shopid
            INNER JOIN
                dishes as dh
            ON
                dh.id = od.dishid
            WHERE 
                od.state=?");
        $stmt->bind_param('i',$state);
        $result = $stmt->execute();
        $stmt->bind_result($orderid,$shopname,$dishname,$total,$datty);
        while($stmt->fetch()){
            echo $orderid ."<br>".$shopname."<br>". $dishname."<br>". $total."<br>".
            $datty;
            echo "<hr>"; 
        }
    }
    public function fetchAllShop($state){
        $stmt = $this->conn->prepare("SELECT * FROM shops WHERE state=?");
        $stmt = bind_param('i',$state);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_all();
        echo "<pre>".print_r($data,true)."</pre>";
    }
}
?>