<div id="headline">
	<p id="credit">&copy; 2023 Kerner, Vinzent</p>
</div>
<div class="menu">
	<!--Navigationsleiste-->
	<a id="sitename" href="#body">RetroRideRating.com</a>
	<a id="buttonhome" href="home.php">Home</a>
	<a id="buttonautoliste" href="autoliste.php">Autoliste</a>
	<a id="buttonmarken" href="marken.php">Marken</a>
	<a id="buttonkostenberechner" href="kostenrechner.php">Kostenberechner</a>
	<!--Dropdownmenu mit optionen für den Kommentarbereich von jedem Auto, alle links füren zur selben seite, scrolle aber sofort zu dem ausgewählten Auto-->
	<div href="#" class="dropdown">
		Nutzerbewertungen
		<div class="dropdown-options">
			<a id="buttonauto1" href="comments.php#boxauto1">
				<!--Autoname und Markenname des Autos werden durch einen JOIN befehl aus der Datenbank abgerufen und aneinandergehängt-->
				<?php
					
					$query = "SELECT marken.name as marken_name, cars.name FROM cars INNER JOIN marken ON cars.marken_id=marken.id WHERE cars.id = 1";
					
					$result = $conn->query($query);
					
					if($result->rowCount() > 0) {
						while($row = $result->fetch(PDO::FETCH_ASSOC)){
								echo "".$row['marken_name']." ".$row['name']."";
						}
					}
				?>
			</a><br>
			<a id="buttonauto2" href="comments.php#boxauto2">
				<!--Autoname und Markenname des Autos werden durch einen JOIN befehl aus der Datenbank abgerufen und aneinandergehängt-->
				<?php
					
					$query = "SELECT marken.name as marken_name, cars.name FROM cars INNER JOIN marken ON cars.marken_id=marken.id WHERE cars.id = 2";
					
					$result = $conn->query($query);
					
					if($result->rowCount() > 0) {
						while($row = $result->fetch(PDO::FETCH_ASSOC)){
								echo "".$row['marken_name']." ".$row['name']."";
						}
					}
				?>
			</a><br>
			<a id="buttonauto3" href="comments.php#boxauto3">
				<!--Autoname und Markenname des Autos werden durch einen JOIN befehl aus der Datenbank abgerufen und aneinandergehängt-->
				<?php
					
					$query = "SELECT marken.name as marken_name, cars.name FROM cars INNER JOIN marken ON cars.marken_id=marken.id WHERE cars.id = 3";
					
					$result = $conn->query($query);
					
					if($result->rowCount() > 0) {
						while($row = $result->fetch(PDO::FETCH_ASSOC)){
								echo "".$row['marken_name']." ".$row['name']."";
						}
					}
				?>
			</a><br>
			<a id="buttonauto4" href="comments.php#boxauto4">
				<!--Autoname und Markenname des Autos werden durch einen JOIN befehl aus der Datenbank abgerufen und aneinandergehängt-->
				<?php
					
					$query = "SELECT marken.name as marken_name, cars.name FROM cars INNER JOIN marken ON cars.marken_id=marken.id WHERE cars.id = 4";
					
					$result = $conn->query($query);
					
					if($result->rowCount() > 0) {
						while($row = $result->fetch(PDO::FETCH_ASSOC)){
								echo "".$row['marken_name']." ".$row['name']."";
						}
					}
				?>
			</a><br>
			<a id="buttonauto5" href="comments.php#boxauto5">
				<!--Autoname und Markenname des Autos werden durch einen JOIN befehl aus der Datenbank abgerufen und aneinandergehängt-->
				<?php
					
					$query = "SELECT marken.name as marken_name, cars.name FROM cars INNER JOIN marken ON cars.marken_id=marken.id WHERE cars.id = 5";
					
					$result = $conn->query($query);
					
					if($result->rowCount() > 0) {
						while($row = $result->fetch(PDO::FETCH_ASSOC)){
								echo "".$row['marken_name']." ".$row['name']."";
						}
					}
				?>
			</a><br>
			<a id="buttonauto6" href="comments.php#boxauto6">
				<!--Autoname und Markenname des Autos werden durch einen JOIN befehl aus der Datenbank abgerufen und aneinandergehängt-->
				<?php
					
					$query = "SELECT marken.name as marken_name, cars.name FROM cars INNER JOIN marken ON cars.marken_id=marken.id WHERE cars.id = 6";
					
					$result = $conn->query($query);
					
					if($result->rowCount() > 0) {
						while($row = $result->fetch(PDO::FETCH_ASSOC)){
								echo "".$row['marken_name']." ".$row['name']."";
						}
					}
				?>
			</a><br>
			<a id="buttonauto7" href="comments.php#boxauto7">
				<!--Autoname und Markenname des Autos werden durch einen JOIN befehl aus der Datenbank abgerufen und aneinandergehängt-->
				<?php
					
					$query = "SELECT marken.name as marken_name, cars.name FROM cars INNER JOIN marken ON cars.marken_id=marken.id WHERE cars.id = 7";
					
					$result = $conn->query($query);
					
					if($result->rowCount() > 0) {
						while($row = $result->fetch(PDO::FETCH_ASSOC)){
								echo "".$row['marken_name']." ".$row['name']."";
						}
					}
				?>
			</a><br>
			<a id="buttonauto8" href="comments.php#boxauto8">
				<!--Autoname und Markenname des Autos werden durch einen JOIN befehl aus der Datenbank abgerufen und aneinandergehängt-->
				<?php
					
					$query = "SELECT marken.name as marken_name, cars.name FROM cars INNER JOIN marken ON cars.marken_id=marken.id WHERE cars.id = 8";
					
					$result = $conn->query($query);
					
					if($result->rowCount() > 0) {
						while($row = $result->fetch(PDO::FETCH_ASSOC)){
								echo "".$row['marken_name']." ".$row['name']."";
						}
					}
				?>
			</a>
		</div>
	</div>
</div>