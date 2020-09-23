<?php

	class icibd{
		//about
		public function about(){
			global $conn ;
			$query = $conn->prepare("SELECT * FROM 	about ");
			$query-> execute();
			return $query->fetchAll ();
		}	

		//slider
		public function slider(){
			global $conn ;
			$query = $conn->prepare("SELECT * FROM 	gallery WHERE slider='1' ");
			$query-> execute();
			return $query->fetchAll ();
		}	

		//gallery
		public function gallery(){
			global $conn ;
			$query = $conn->prepare("SELECT * FROM 	gallery ORDER BY imgid DESC LIMIT 6 ");
			$query-> execute();
			return $query->fetchAll ();
		}

		//gallery
		public function gallerys(){
			global $conn ;
			$query = $conn->prepare("SELECT * FROM 	gallery ORDER BY imgid DESC ");
			$query-> execute();
			return $query->fetchAll ();
		}

		//news
		public function news(){
			global $conn ;
			$query = $conn->prepare("SELECT * FROM 	news ORDER BY id DESC LIMIT 2 ");
			$query-> execute();
			return $query->fetchAll ();
		}	

		//newsdata
		public function newsdata($newsid){
			global $conn;
			$query = $conn->prepare("SELECT * FROM news WHERE  id=? ");
			$query->bindValue(1, $newsid);
			$query->execute();
			return $query->fetch();
		}

		//news
		public function lastnews(){
			global $conn ;
			$query = $conn->prepare("SELECT * FROM 	news ORDER BY id DESC LIMIT 15 ");
			$query-> execute();
			return $query->fetchAll ();
		}	

		//trainers
		public function trainers(){
			global $conn ;
			$query = $conn->prepare("SELECT * FROM 	trainers ");
			$query-> execute();
			return $query->fetchAll ();
		}	


		//trainers
		public function courses(){
			global $conn ;
			$query = $conn->prepare("SELECT * FROM 	courses ");
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


		//event
		public function icievents(){
			global $conn ;
			$query = $conn->prepare("SELECT * FROM 	events ");
			$query-> execute();
			return $query->fetchAll ();
		}	

		//newsdata
		public function eventdata($eventid){
			global $conn;
			$query = $conn->prepare("SELECT * FROM events WHERE evenid=? ");
			$query->bindValue(1, $eventid);
			$query->execute();
			return $query->fetch();
		}

		//news
		public function lastevnt(){
			global $conn ;
			$query = $conn->prepare("SELECT * FROM events ORDER BY evenid DESC LIMIT 15 ");
			$query-> execute();
			return $query->fetchAll ();
		}	
	

} ?>