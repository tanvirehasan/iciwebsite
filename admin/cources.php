<?php include 'inc/header.php'; ?>

<!--admincontent-->
<div class="admincontent">

	<?php include 'inc/upload.php'; ?>
	<!--desbord-->
	<?php include 'inc/desbord.php'; ?>

	<!--cleft-->
	<div class="cleft">
		<div class="Sliderlist">
			<h3 class="blu" >Add ICI Courses <i class="fas fa-plus"></i> </h3>
			<form id="from" action=" " method="post" enctype="multipart/form-data">
				<input type="text" name="ctitle" placeholder="Course Title">
				<input type="text" name="cname" placeholder="Course name">
				<input type="text" name="cdetails" placeholder="Course details">
				<input type="file" name="file" id="file" class="inputfile" />
				<label for="file"><h2><i class="far fa-image"></i></h2></label>
				<input  class="parple" type="submit" name="cupload" value="Upload" >				
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
				$icicourses = new icibd;
				$courses = $icicourses->courses();
				foreach ($courses as $icicourses) {?>

				<tr>
				  	<td><?php echo $icicourses['Coursesid']; ?></td>
				  	<td><?php echo $icicourses['Coursestitile']; ?></td>
				  	<td><img src="../img/<?php echo $icicourses['cimg']; ?>"></td>
				  	<td>
				  		<a href="#"><i class="far fa-edit cgreen"></i></a>
				  		<a href="cources.php?cdelet&$cid=<?php echo $icicourses['Coursesid']; ?>"><i class="far fa-trash-alt cred"></i></a>			  		
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