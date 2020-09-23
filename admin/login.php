<?php 
	include 'conf/conn.php';
	session_start();

	if(isset($_SESSION['logged_in'])){		
		header('location:index.php');
	}

		if (isset($_POST['user_email'],$_POST['user_pass'])){
			$username = $_POST['user_email'];
			$password = md5($_POST['user_pass']);
			if (empty($username) or empty($password)) {
				$error = 'All fileds are required !';
			}else{
				$query = $conn->prepare("SELECT * FROM users WHERE username=? AND userpass=? ");
				$query->bindValue(1,$username);
				$query->bindValue(2,$password);
				$query->execute();
				$num = $query->rowcount();
				if($num==1){
					$_SESSION['logged_in'] = true;
					$_SESSION['username'] = $_POST['user_email'];
					header ('location:index.php');
					exit;

				}else{
					$error= 'worng pass';
				}
			}
		}
 ?>




<!DOCTYPE html>
<html>
<head>
	<title>ICI || Admin Login here</title>
	<link rel="icon" href="../img/logo/fcon.jpg" type="image/x-icon"/>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>


<body>

<form action="login.php" method="POST" >

	<div class="loginBox">
		<img src="img/louser.png" class="user">
		<h2> Log In !</h2>
		<?php if (isset($error)) { echo "<h6>".$error."</h6>"; } ?>
				<p>Username</p>
		<input type="text" name="user_email" autocomplete="off" placeholder="Username">
		<p>Password</p>
		<input type="Password" name="user_pass"  autocomplete="off" placeholder="........">
		<input type="submit" name="" value="sign In">
		
		<h4>Developed by TANVIR</h4>
		
	</div>

</form>
</body>
</html>