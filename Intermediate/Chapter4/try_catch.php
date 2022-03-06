<?php 

try{

	if (fopen('ttt.txt', 'r')) {
		
		echo "Aung Tal";
	}else{

		throw new Exception("File can't be read");
		
	}
}catch(Exception $e) {

	echo $e->getMessage();

}finally{

	echo "<br>Hay now";
}

?>