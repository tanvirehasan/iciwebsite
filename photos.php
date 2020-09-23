<?php 	include 'inc/header.php'; ?>

<div id="gallery" class="Gallery">
	<div class="headingtitle">
			<h1  ><span>ICI</span>Gallery</h1><hr>
		</div>
	<div class="blogscontent">
	  	<?php 
			$icigallery = new icibd;
			$image = $icigallery->gallerys();
			foreach ($image as $icigallery) {?>
			<div class="gelleryholder">
				<div class="sigalgellery">
					<a href="img/gallery/<?php echo $icigallery['img']; ?>" target="_blank" >
					<img src="img/gallery/<?php echo $icigallery['img']; ?>"></a>
				</div>
			</div>
		<?php } ?>
	</div>
</div>

<?php include 'inc/footer.php'; ?>