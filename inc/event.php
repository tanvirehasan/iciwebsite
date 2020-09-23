<div id="Events" class="eventnewes">
	<div class="headingtitle">
			<h1 style="color: #fff;" ><span>ICI</span>Events</h1><hr style="background-color: #fff;" >
		</div>
	<div class="evnewscontent">
		
	<?php 
		$icievent = new icibd;
		$event = $icievent->icievents();
		foreach ($event as $icievent) {?>
		<div class="evnewsholder">
			<div class="evnews">
				<img src="img/blog/<?php echo $icievent['evenimg']; ?>">
				<h1><?php echo $icievent['eventitle']; ?></h1>
				<b></b>				

				<p><?php echo substr($icievent['ditails'],0,160); ?>....<br><br><br><a href="icievent.php?<?php echo substr($icievent['ditails'],0,200); ?>&id=<?php echo $icievent['evenid']; ?>">Read More</a></p>			
			</div>
		</div>
	<?php } ?>

	</div>
</div>




