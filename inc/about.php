	<div id="About" class="about_us">
		<div class="aboutvideo">
		<?php 
			$about = new icibd;
			$aboutus = $about->about();
			foreach ($aboutus as $about) {?>

			<iframe width="100%" height="350" src="https://www.youtube.com/embed/<?php echo $about['vlink']; ?>?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>			
		</div>

		<div class="aboutext animated fadeInUp">
			<h1>About ICI</h1>

						
					<p><?php echo $about['about']; ?></p>
			<?php } ?>	

		</div>
	</div>