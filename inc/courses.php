<div id="Courses" class="Courses">
	<div class="headingtitle">
		<h1><span>ICI</span>Courses</h1><hr>
	</div>
	<div class="evnewscontent">

	<?php 
		$icicourses = new icibd;
		$courses = $icicourses->courses();
		foreach ($courses as $icicourses) {?>
		<div class="evnewsholder">
			<div class="evnews">
				<img src="img/<?php echo $icicourses['cimg'] ; ?>">
				<h1><?php echo $icicourses['Coursestitile'] ; ?> </h1>
				<h4><?php echo $icicourses['Coursesname'] ; ?></h4>
				<p><?php echo $icicourses['Courseditiles'] ; ?></p>				
			</div>
		</div>
	<?php } ?>
	</div>
</div>