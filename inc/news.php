<div id="News" class="blogs">
	<div class="headingtitle">
			<h1  ><span>ICI</span>News</h1><hr>
		</div>
	<div class="blogscontent">
	<?php 
		$icisnews = new icibd;
		$news = $icisnews->news();
		foreach ($news as $icisnews) {?>
		<div class="blogholders">
			<div class="segilblogs">
				<img src="img/news/<?php echo $icisnews['img']; ?>">
				<h1><?php echo $icisnews['title']; ?></h1>
				<h5><i class="fas fa-user"></i> ICI admin <i class="fas fa-calendar-alt"></i>  Dec 4, 2018</h5>
				<hr>
				<p><?php echo substr($icisnews['detalis'],0,300); ?>....<br><br><br><a href="icinews.php?<?php echo substr($icisnews['detalis'],0,300); ?>&id=<?php echo $icisnews['id']; ?>">Read More</a></p>
			</div>
		</div>
		<?php } ?>	
	</div>
</div>