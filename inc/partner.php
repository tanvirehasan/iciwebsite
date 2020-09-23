<div class="Partners">
	<div class="headingtitle">
			<h1  ><span>Our</span>Partners</h1><hr>
		</div>
	<div class="Partnerscontent">

	<?php 
		$partners = new icibd;
		$icipartners = $partners->partners();
		foreach ($icipartners as $partners) {?>
		<div class="partlogo"><img src="img/logo/<?php echo $partners['img'];?>"></div>
	<?php } ?>

		
	</div>
</div>