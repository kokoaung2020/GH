<?php 

interface GameRules{

	public function gameDesign();
	public function gameActor();
	public function gameHero();
}

class Index implements GameRules{

	public function gameDesign() {

		echo "This is gameDesign.<hr>";
	}
	public function gameActor() {
		echo "This is gameActor.<hr>";
	}
	public function gameHero() {

		echo "This is gameHero.";
	}
}

$game = new Index();
$game->gameDesign();
$game->gameActor();
$game->gameHero();

?>