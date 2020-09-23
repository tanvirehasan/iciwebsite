<?php include 'inc/header.php'; ?>


<!--admincontent-->
<div class="admincontent">	

	<?php include 'inc/upload.php'; ?>

	<!--desbord-->
	<?php include 'inc/desbord.php'; ?>
	

	<!--cleft-->
	<div class="cleft">
		<div class="Sliderlist">
			<h3 class="blu" >Add partners <i class="fas fa-plus"></i> </h3>
			<form id="from" action="" method="POST" enctype="multipart/form-data">
				<input type="text" name="pname" placeholder="name">
				<input type="file" name="file" id="file" class="inputfile" />
				<label for="file"><h2><i class="far fa-image"></i></h2></label>
				<input  class="parple" type="submit" name="pdone" value="Upload" >				
			</form>
		</div>

	</div><!--left//-->



	<!--cright-->
	<div class="cright">
		<!--Slider list-->	
		<div class="Sliderlist">
			<h3 class="pink" >partners list </h3>
			<table>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>logo</th>
					<th>Action</th>
				</tr>
				  
			<?php 
				$partners = new icibd;
				$icipartners = $partners->partners();
				foreach ($icipartners as $partners) {?>
				<tr>
				  	<td><?php echo $partners['partnerid']; ?></td>
				  	<td><?php echo $partners['name']; ?></td>
				  	<td><img src="../img/logo/<?php echo $partners['img']; ?>"></td>
				  	<td>
				  		<a href="#"><i class="far fa-edit cgreen"></i></a>
				  		<a href="partner.php?pdelet&$id=<?php echo $partners['partnerid']; ?>"><i class="far fa-trash-alt cred"></i></a>			  		
				  	</td>
				</tr>
			<?php } ?>	
						  
			</table>
			
		</div>

		<!--Sliderlist-->
		<div class="Sliderlist">
			<h3 class="orge" >Image list </h3>
			<table>
				<tr>
					<th>ID</th>
					<th>Title</th>
					<th>Image</th>
					<th>Action</th>
				</tr>

			<?php 
				$icislider = new icibd;
				$sliders = $icislider->gallery();
				foreach ($sliders as $icislider) {?>
				<tr>
				  	<td><?php echo $icislider['imgid']; ?></td>
				  	<td><?php echo $icislider['imtitle']; ?></td>
				  	<td><img src="../img/gallery/<?php echo $icislider['img']; ?>"></td>
				  	<td>
				  		<a href="#"><i class="far fa-edit cgreen"></i></a>
				  		<a href="image.php?delet&$id=<?php echo $icislider['imgid']; ?>"><i class="far fa-trash-alt cred"></i></a>			  		
				  	</td>
				</tr>
			<?php } ?>	
				  
						  
			</table>
		</div>




	</div><!--cright//-->



	</div><!--admincontent//-->
</div>
</body>
</html>