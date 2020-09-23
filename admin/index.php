<?php include 'inc/header.php'; ?>
	<!--admincontent-->
	<div class="admincontent">

		<?php include 'inc/upload.php'; ?>

		<!--desbord-->
		<?php include 'inc/desbord.php'; ?>


		<!--cleft-->
		<div class="cleft">

		<!--Slider list-->	
		<div class="Sliderlist">
			<h3 class="pink" >Slider list </h3>
			<table>				
				<tr>
					<th>ID</th>
					<th>Title</th>
					<th>Image</th>
					<th>Action</th>
				</tr>

			<?php 
				$icislider = new icibd;
				$sliders = $icislider->slider();
				foreach ($sliders as $icislider) {?>
				<tr>
				  	<td><?php echo $icislider['imgid']; ?></td>
				  	<td><?php echo $icislider['imtitle']; ?></td>
				  	<td><img src="../img/gallery/<?php echo $icislider['img']; ?>"></td>
				  	<td>
				  		<a href="#"><i class="far fa-edit cgreen"></i></a>
				  		<a href="#"><i class="far fa-trash-alt cred"></i></a>			  		
				  	</td>
				</tr>
			<?php } ?>						  
			</table>
		</div>

		<!--Trainers list-->	
		<div class="Sliderlist">
			<h3 class="orge" >Trainers list</h3>
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
	</div><!----end ----->
	


	<!--cright start-->
	<div class="cright">
		<!--About us-->
		<div class="Sliderlist">
			<h3 class="blu" >ICI About</h3>

			<form id="aedit" action="" method="POST" > 
					<?php 
						$about = new icibd;
						$aboutus = $about->about();
						foreach ($aboutus as $about) {?>						
							<textarea name="about" rows="8"><?php echo $about['about']; ?></textarea>
					<?php } ?>					
				<input class="blu"  type="submit" name="aboutedit" value="Edit" >				
			</form>
		</div>

		<!--Events list-->	
		<div class="Sliderlist">
			<h3 class="parple" >Events list</h3>
			<table>
				  <tr>
				    <th>ID</th>
				    <th>Event Name</th>
				    <th>Date</th>
				    <th>Action</th>
				  </tr>

				<tr>
				  	<td>1</td>
				  	<td>Daniel C. Gomes</td>
				  	<td>10 May 2019</td>
				  	<td>
				  		<a href="#"><i class="far fa-edit cgreen"></i></a>
				  		<a href="#"><i class="far fa-trash-alt cred"></i></a>			  		
				  	</td>
				</tr>
				<tr>
				  	<td>2</td>
				  	<td>The UV cured polymer showed</td>
				  	<td>10 May 2019</td>
				  	<td>
				  		<a href="#"><i class="far fa-edit cgreen"></i></a>
				  		<a href="#"><i class="far fa-trash-alt cred"></i></a>			  		
				  	</td>
				</tr>
				<tr>
				  	<td>3</td>
				  	<td>was used as a homogeneous</td>
				  	<td>10 May 2019</td>
				  	<td>
				  		<a href="#"><i class="far fa-edit cgreen"></i></a>
				  		<a href="#"><i class="far fa-trash-alt cred"></i></a>			  		
				  	</td>
				</tr>				
				<tr>
				  	<td>4</td>
				  	<td>liquid crystal cell was characterized by</td>
				  	<td>10 May 2019</td>
				  	<td>
				  		<a href="#"><i class="far fa-edit cgreen"></i></a>
				  		<a href="#"><i class="far fa-trash-alt cred"></i></a>			  		
				  	</td>
				</tr>				  
				<tr>
				  	<td>5</td>
				  	<td>high brightness and resolution with</td>
				  	<td>10 May 2019</td>
				  	<td>
				  		<a href="#"><i class="far fa-edit cgreen"></i></a>
				  		<a href="#"><i class="far fa-trash-alt cred"></i></a>			  		
				  	</td>
				</tr>	
				<tr>
				  	<td>5</td>
				  	<td>high brightness and resolution with</td>
				  	<td>10 May 2019</td>
				  	<td>
				  		<a href="#"><i class="far fa-edit cgreen"></i></a>
				  		<a href="#"><i class="far fa-trash-alt cred"></i></a>			  		
				  	</td>
				</tr>				  
			</table>
		</div>

		<!--Courses list-->	
		<div class="Sliderlist">
			<h3 class="green" >Courses list</h3>
			<table>
				  <tr>
				    <th>ID</th>
				    <th>Course Name</th>
				    <th>Trainer Name</th>
				    <th>Action</th>
				  </tr>

				<tr>
				  	<td>1</td>
				  	<td>Daniel C. Gomes</td>
				  	<td>10 May 2019</td>
				  	<td>
				  		<a href="#"><i class="far fa-edit cgreen"></i></a>
				  		<a href="#"><i class="far fa-trash-alt cred"></i></a>			  		
				  	</td>
				</tr>
				<tr>
				  	<td>2</td>
				  	<td>The UV cured polymer showed</td>
				  	<td>10 May 2019</td>
				  	<td>
				  		<a href="#"><i class="far fa-edit cgreen"></i></a>
				  		<a href="#"><i class="far fa-trash-alt cred"></i></a>			  		
				  	</td>
				</tr>
				<tr>
				  	<td>3</td>
				  	<td>was used as a homogeneous</td>
				  	<td>10 May 2019</td>
				  	<td>
				  		<a href="#"><i class="far fa-edit cgreen"></i></a>
				  		<a href="#"><i class="far fa-trash-alt cred"></i></a>			  		
				  	</td>
				</tr>				
				<tr>
				  	<td>4</td>
				  	<td>liquid crystal cell was characterized by</td>
				  	<td>10 May 2019</td>
				  	<td>
				  		<a href="#"><i class="far fa-edit cgreen"></i></a>
				  		<a href="#"><i class="far fa-trash-alt cred"></i></a>			  		
				  	</td>
				</tr>				  
				<tr>
				  	<td>5</td>
				  	<td>high brightness and resolution with</td>
				  	<td>10 May 2019</td>
				  	<td>
				  		<a href="#"><i class="far fa-edit cgreen"></i></a>
				  		<a href="#"><i class="far fa-trash-alt cred"></i></a>			  		
				  	</td>
				</tr>	
				<tr>
				  	<td>5</td>
				  	<td>high brightness and resolution with</td>
				  	<td>10 May 2019</td>
				  	<td>
				  		<a href="#"><i class="far fa-edit cgreen"></i></a>
				  		<a href="#"><i class="far fa-trash-alt cred"></i></a>			  		
				  	</td>
				</tr>				  
			</table>
		</div>

	</div><!--cright end-->

	</div><!--admincontent//-->
</div>
</body>
</html>