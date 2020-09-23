<div id="gallery" class="Gallery">
	<div class="headingtitle">
			<h1  ><span>ICI</span>Gallery</h1><hr>
		</div>
	<div class="blogscontent">
	  	<?php 
			$icigallery = new icibd;
			$image = $icigallery->gallery();
			foreach ($image as $icigallery) {?>
			<div class="gelleryholder">
				<div class="sigalgellery">
					<img src="img/gallery/<?php echo $icigallery['img']; ?>">
				</div>
			</div>
		<?php } ?>
			<p style="text-align: center; width:20%;margin:0px auto; font-size: 20px; "><a  href="photos.php">More...</a></p>
	</div>

</div>

