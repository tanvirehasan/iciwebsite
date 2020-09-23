	<div class="slider">
		<div class="ism-slider" data-play_type="loop" data-interval="3000" id="ici">
		  <ol>
	  	<?php 
			$icislider = new icibd;
			$sliders = $icislider->slider();
			foreach ($sliders as $icislider) {?>
		    <li>
			    <img src="img/gallery/<?php echo $icislider['img']; ?>">
			    <div class="caption"><?php echo $icislider['imtitle']; ?></div>
		    </li>
		<?php } ?>

		  </ol>
		</div>
	</div>