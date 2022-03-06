<?php
require_once "vendor/autoload.php";
class Index{
    private $db;
    public function __construct(){
        $shops = [
            ["Apple","192.77.66","apple","123",1],
            ["Microsoft","192.450.88","microsoft","123",1],
            ["Huawei","192.160.99","huawei","123",1],
            ["Blackberry","192.160.11","blackberry","123",1]
        ];

      $this->db = new DBGen();
    //  $this->db->fetchAllShop(1);
    //  $this->db->getSingleShop(1);
      $this->db->getMultiShop(1);
    //  $this->db->insertSingleShop("Xiaomi","192.160.55.77","xiaomi","123",1);
    //  $this->db->insertMultiShop($shops);
    //  $this->db->updateShop(5,"Steve job");
    //  $this->db->deleteShop(8);
    //  $this->db->getJoinData(1);
    }
}
new Index();
?>