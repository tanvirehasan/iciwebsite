		<div class="headline"><h1>Dashboard</h1></div>
		<div class="totalall">


			<div class="totalbox blu"><p>Total Trainers</p>
				<?php 
					$sqlc = $conn->prepare('SELECT * FROM trainers');
					$sqlc->execute();
					$count = $sqlc->rowCount();
					echo "<h3>".$count."</h3>";
				?>	
			</div>


			<div class="totalbox orge"><p>Total Events</p>
				<?php 
					$sqlc = $conn->prepare('SELECT * FROM events');
					$sqlc->execute();
					$count = $sqlc->rowCount();
					echo "<h3>".$count."</h3>";
				?>
			</div>


			<div class="totalbox green"><p>Total Courses</p>
				<?php 
					$sqlc = $conn->prepare('SELECT * FROM courses');
					$sqlc->execute();
					$count = $sqlc->rowCount();
					echo "<h3>".$count."</h3>";
				?>
			</div>




			<div class="totalbox red"><p>Total News</p>
				<?php 
					$sqlc = $conn->prepare('SELECT * FROM news');
					$sqlc->execute();
					$count = $sqlc->rowCount();
					echo "<h3>".$count."</h3>";
				?>	
			</div>



			<div class="totalbox parple"><p>Total Image</p>
				<?php 
					$sqlc = $conn->prepare('SELECT * FROM gallery');
					$sqlc->execute();
					$count = $sqlc->rowCount();
					echo "<h3>".$count."</h3>";
				?>	
			</div>


		</div>