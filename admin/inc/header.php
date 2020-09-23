<?php 	
	session_start();
	if(!isset($_SESSION['logged_in'])){		
	header('location:login.php');}
	include 'conf/conn.php'; 
	include 'conf/class.php'; 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="author" content="ICI">
	<meta name="keywords" content="ICI,Culinary,Institute,Dhaka">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ICI Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">	
</head>

<body>
<div class="cotener">
<!--header-->
<div class="header">
	<h1> ICI Admin Panel</h1>
	<ul>

		<?php
		if (isset($_SESSION['username'])) {
			$id = $_SESSION['username'];
			$iciuser = new icibd;
			$data = $iciuser->userdata($id);?>
			<li><img src="img/<?php echo $data['userpic']?>"></li>
			<li><p><a href="logout.php">Logout</a></p></li>
			<li><p><a href=""><?php echo $data['username']?></a></p></li>
	</ul>
</div>

<!--adminmanu-->
<div class="adminmanu bgcolor">
	<div class="adminprofile">
		<img src="img/<?php echo $data['userpic']?>">
		<h1><?php echo $data['fullname']?></h1>
	</div>
	<div class="nav">
		<ul>
			<li><i class="fas fa-home"></i><a href="index.php">Home</a></li>
			<li><i class="fab fa-slideshare"></i><a href="image.php">Slider</a></li>
			<li><i class="fas fa-info-circle"></i><a href="partner.php">Partners</a></li>
			<li><i class="fas fa-chalkboard-teacher"></i><a href="trainers.php">Trainers</a></li>
			<li><i class="fas fa-calendar-alt"></i><a href="event.php">Events</a></li>
			<li><i class="fas fa-book"></i><a href="cources.php">Courses</a></li>
			<li><i class="far fa-newspaper"></i><a href="news.php">News</a></li>
			<li><i class="fas fa-user-plus"></i><a href="">Add User</a></li>
		</ul>
	</div>		
</div>

<?php }	?>

