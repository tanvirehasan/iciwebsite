<?php include 'inc/header.php'; ?>

<!--admincontent-->
<div class="admincontent">

	<?php include 'inc/upload.php'; ?>
	<!--desbord-->
	<?php include 'inc/desbord.php'; ?>

	<!--cleft-->
	<div class="cleft">
		<div class="Sliderlist">
			<h3 class="blu" >Add ICI Trainers <i class="fas fa-plus"></i> </h3>
			<form id="from" action=" " method="post" enctype="multipart/form-data">
				<input type="text" name="tname" placeholder="Trainer name">
				<input type="text" name="tdetails" placeholder="Trainer details">
				<input type="email" name="email" placeholder="Trainer email">
				<input type="text" name="tphone" placeholder="Trainer phone">
				<input type="file" name="file" id="file" class="inputfile" />
				<label for="file"><h2><i class="far fa-image"></i></h2></label>
				<input  class="parple" type="submit" name="tupload" value="Upload" >				
			</form>
		</div>

	</div><!--cleft//-->


	<!--cright-->
	<div class="cright">
		<!--Slider list-->	
		<div class="Sliderlist">
			<h3 class="orge" >Slider list </h3>
			<table>
				  <tr>
				    <th>ID</th>
				    <th>Name</th>
				    <th>Image</th>
				    <th>Action</th>
				  </tr>

			<?php 
				$icitrainer = new icibd;
				$trainers = $icitrainer->trainers();
				foreach ($trainers as $icitrainer) {?>

				<tr>
				  	<td><?php echo $icitrainer['trainersid']; ?></td>
				  	<td><?php echo $icitrainer['name']; ?></td>
				  	<td><img src="../img/trainar/<?php echo $icitrainer['timg']; ?>"></td>
				  	<td>
				  		<a href="#"><i class="far fa-edit cgreen"></i></a>
				  		<a href="trainers.php?tdelet&$tid=<?php echo $icitrainer['trainersid']; ?>"><i class="far fa-trash-alt cred"></i></a>			  		
				  	</td>
				</tr>
				<?php } ?>	


			</table>
			



		</div>
	</div><!--cright-->


	</div><!--admincontent//-->
</div>
</body>
</html>