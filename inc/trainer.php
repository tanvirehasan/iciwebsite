
<div class="ovjectivetraner">
		<!--<div class="headingtitle">
			<h1><span>Our</span>Objectives</h1>
			<hr>
		</div>-->
		<div class="ovjective">

			<!--<div class="boxholder">
				<div class="ovjectivebox">
					<i class="fas fa-chart-pie"></i>
					<h2>Officially The Best</h2>
					<p>Just in case there is anyone looking for it, new expertise to our knowledge 		base to make you happy as well.</p>
				</div>	
			</div>-->

		<!--Trainers -->
		<div class="headingtitle"><h1><span>ICI</span>Trainers</h1><hr></div>
		<?php 
			$icitrainer = new icibd;
			$trainers = $icitrainer->trainers();
			foreach ($trainers as $icitrainer) {?>
			<div id="Trainers" class="Trainerholder">
				<div class="Trainer">
					<img src="img/trainar/<?php echo $icitrainer['timg']; ?>" alt="" >
					<h1><?php echo $icitrainer['name']; ?></h1>
					<h5><?php echo $icitrainer['detalis']; ?></h5>
				</div>
			</div>
		<?php } ?>

		
	</div>
</div>






