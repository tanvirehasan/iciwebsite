<?php include 'inc/header.php'; ?>
<div class="icieventnews">

<?php
	if (isset($_GET['id'])) {
		$eventid = $_GET['id'];
		$icievent = new icibd;
		$eventsdata = $icievent->eventdata($eventid);?>
			<div class="fulleventnews">
				<img src="img/blog/<?php echo $eventsdata['evenimg']; ?>">
				<h1><?php echo $eventsdata['eventitle']; ?></h1>
				<b><i class="fas fa-user"></i> ICI admin <i class="fas fa-calendar-alt"></i>
				<?php echo $eventsdata['from_date']; ?></b>
				<hr>
				<p><?php echo $eventsdata['ditails']; ?></p>
			</div>
<?php }else{echo "Sorry No data";} ?>

	<!--rightsidebar-->
	<div class="rightsidebar">
	<?php 
		$lastevent = new icibd;
		$icilastevent = $lastevent->lastevnt();
		foreach ($icilastevent as $lastevent) {?>			
			<a href="icinews.php?<?php echo substr($lastevent['ditails'],0,300); ?>&id=<?php echo $lastevent['evenid']; ?>">
			<div class="lastnews">
				<img src="img/blog/<?php echo $lastevent['evenimg']; ?>">
				<h3><?php echo substr($lastevent['eventitle'],0,25); ?></h3>
				<p><?php echo substr($lastevent['ditails'],0,60); ?></p>
			</div>
			</a>
	<?php } ?>

	</div>
</div>


<?php include 'inc/footer.php'; ?>