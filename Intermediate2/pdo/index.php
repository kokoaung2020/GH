<?php
require_once "database/DBGen.php";
class Index{
    public function __construct(){
        $db = new DBGen();
    }
}
new Index();
?>