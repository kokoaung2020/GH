<?php
class Player{
    private $path;
    private $music;

    public function __construct($path,$music){
        $this->path = $path;
        $this->music = $music;
    }

    public function playNow(){
        echo "Playing ". $this->music . "from ". $this->path;
    }
}
?>