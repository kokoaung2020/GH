<?php 
require_once "vendor/autoload.php";
use app\Posts\Post;
use app\Authors\Author;
class Index{

	public function __construct() {

		$fname = "Ko Ko";
		$lname = "Aung";
		$content = "This is a content";

		$author = new Author($fname,$lname);

		$post = new Post($author,$content);
		$this->answerOut($post);
	}

	public function answerOut(Post $post) {

		$author = $post->getAuthor();
		echo $author->getFirstName();
		echo $author->getLastName();
		echo "<br>";
		echo $post->getContent();
	}
}

new Index();

?>