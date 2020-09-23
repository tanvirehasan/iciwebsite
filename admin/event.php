<?php include 'inc/header.php'; ?>

<!--admincontent-->
<div class="admincontent">

	<?php include 'inc/upload.php'; ?>
	<!--desbord-->
	<?php include 'inc/desbord.php'; ?>

	<!--cleft-->
	<div class="cleft">
		<div class="Sliderlist">
			<h3 class="blu" >Add ICI Event <i class="fas fa-plus"></i> </h3>
			<form id="from" action=" " method="post" enctype="multipart/form-data">
				<input type="text" name="title" placeholder="Event Title">
				<input type="date" name="from" > to
				<input type="date" name="to">
				<textarea name="detalis" rows="8" placeholder="Event text" ></textarea>

				<input type="file" name="file" id="file" class="inputfile" />
				<label for="file"><h2><i class="far fa-image"></i></h2></label>
				<input  class="parple" type="submit" name="event" value="Upload" >				
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
				$icievent = new icibd;
				$event = $icievent->icievents();
				foreach ($event as $icievent) {?>

				<tr>
				  	<td><?php echo $icievent['evenid']; ?></td>
				  	<td><?php echo $icievent['eventitle']; ?></td>
				  	<td><img src="../img/blog/<?php echo $icievent['evenimg']; ?>"></td>
				  	<td>
				  		<a href="#"><i class="far fa-edit cgreen"></i></a>
				  		<a href="event.php?eventdelet&$eid=<?php echo $icievent['evenid']; ?>"><i class="far fa-trash-alt cred"></i></a>			  		
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


