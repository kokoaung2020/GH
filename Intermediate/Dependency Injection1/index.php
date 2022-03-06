<?php
require_once "player.php";
class Index{
    public function __construct(){
        $player = new Player("C:/Users/waifer/documents/music/","Ayanlan.mp3");
        $player->playNow();
    }
}
new Index();
?>