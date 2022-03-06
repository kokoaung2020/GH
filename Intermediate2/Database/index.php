<?php
use app\database\DBGen;
require_once "vendor/autoload.php";

class index{

    private $db;
    public function __construct(){
        $this->db = new DBGen();
        $this->db->getSingleShop(1);
    }
}

new Index;