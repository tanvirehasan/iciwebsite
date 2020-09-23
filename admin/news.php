<?php include 'inc/header.php'; ?>

<!--admincontent-->
<div class="admincontent">

	<?php include 'inc/upload.php'; ?>
	<!--desbord-->
	<?php include 'inc/desbord.php'; ?>

	<!--cleft-->
	<div class="cleft">
		<div class="Sliderlist">
			<h3 class="blu" >Add ICI News <i class="fas fa-plus"></i> </h3>
			<form id="from" action=" " method="post" enctype="multipart/form-data">
				<input type="text" name="title" placeholder="News Title">
				<textarea name="detalis" rows="8" placeholder="News text" ></textarea>

				<input type="file" name="file" id="file" class="inputfile" />
				<label for="file"><h2><i class="far fa-image"></i></h2></label>
				<input  class="parple" type="submit" name="news" value="Upload" >				
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
				$icinews = new icibd;
				$allnews = $icinews->allnews();
				foreach ($allnews as $icinews) {?>

				<tr>
				  	<td><?php echo $icinews['id']; ?></td>
				  	<td><?php echo $icinews['title']; ?></td>
				  	<td><img src="../img/news/<?php echo $icinews['img']; ?>"></td>
				  	<td>
				  		<a href="#"><i class="far fa-edit cgreen"></i></a>
				  		<a href="news.php?newsdelet&$nid=<?php echo $icinews['id']; ?>"><i class="far fa-trash-alt cred"></i></a>			  		
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