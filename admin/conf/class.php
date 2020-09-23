<?php

	class icibd{

		public function userdata($username){
			global $conn;
			$query = $conn->prepare("SELECT * FROM users WHERE  username=? ");
			$query->bindValue(1, $username);
			$query->execute();
			return $query->fetch();
		}


		public function about(){
			global $conn ;
			$query = $conn->prepare("SELECT * FROM 	about ");
			$query-> execute();
			return $query->fetchAll ();
		}	

		public function slider(){
			global $conn ;
			$query = $conn->prepare("SELECT * FROM 	gallery WHERE slider='1' ");
			$query-> execute();
			return $query->fetchAll ();
		}	

		public function gallery(){
			global $conn ;
			$query = $conn->prepare("SELECT * FROM 	gallery");
			$query-> execute();
			return $query->fetchAll ();
		}


		public function allnews(){
			global $conn ;
			$query = $conn->prepare("SELECT * FROM 	news ");
			$query-> execute();
			return $query->fetchAll ();
		}

		public function news(){
			global $conn ;
			$query = $conn->prepare("SELECT * FROM 	news ORDER BY id DESC LIMIT 2 ");
			$query-> execute();
			return $query->fetchAll ();
		}	


		public function trainers(){
			global $conn ;
			$query = $conn->prepare("SELECT * FROM 	trainers ");
			$query-> execute();
			return $query->fetchAll ();
		}	


		public function courses(){
			global $conn ;
			$query = $conn->prepare("SELECT * FROM 	courses");
			$query-> execute();
			return $query->fetchAll ();
		}	


		//trainers
		public function partners(){
			global $conn ;
			$query = $conn->prepare("SELECT * FROM 	partner ");
			$query-> execute();
			return $query->fetchAll ();
		}

		public function icievents(){
			global $conn ;
			$query = $conn->prepare("SELECT * FROM 	events ");
			$query-> execute();
			return $query->fetchAll ();
		}	




	}

?>