<?php 
	try{
		$conn = new PDO('mysql:host=localhost;dbname=icibd','root', '');
	}catch(PDOException $e){
		exit('database erro.');
	}
 ?>
 
