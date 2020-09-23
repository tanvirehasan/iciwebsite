<?php include 'inc/header.php'; ?>
<div class="icieventnews">

<?php
	if (isset($_GET['id'])) {
		$newsid = $_GET['id'];
		$icinews = new icibd;
		$newsdata = $icinews->newsdata($newsid);?>
			<div class="fulleventnews">
				<img src="img/news/<?php echo $newsdata['img']; ?>">
				<h1><?php echo $newsdata['title']; ?></h1>
				<b><i class="fas fa-user"></i> ICI admin <i class="fas fa-calendar-alt"></i>
				<?php echo $newsdata['date_time']; ?></b>
				<hr>
				<p><?php echo $newsdata['detalis']; ?></p>
			</div>
<?php }else{echo "Sorry No data";} ?>

	<!--rightsidebar-->
	<div class="rightsidebar">
	<?php 
		$lastnews = new icibd;
		$icilastnews = $lastnews->lastnews();
		foreach ($icilastnews as $lastnews) {?>			
			<a href="icinews.php?<?php echo substr($lastnews['detalis'],0,300); ?>&id=<?php echo $lastnews['id']; ?>">
			<div class="lastnews">
				<img src="img/news/<?php echo $lastnews['img']; ?>">
				<h3><?php echo substr($lastnews['title'],0,25); ?></h3>
				<p><?php echo substr($lastnews['detalis'],0,60); ?></p>
			</div>
			</a>
	<?php } ?>

	</div>
</div>


<?php include 'inc/footer.php'; ?>