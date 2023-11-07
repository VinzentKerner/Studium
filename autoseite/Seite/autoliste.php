<?php
	include_once 'inc/dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="shortcut icon" type="image/x-icon" href="../Medien/icon-oldtimer.png">
		<title>RetroRideRating</title>
		<link rel="stylesheet" href="inc/general.css">
		<link rel="stylesheet" href="inc/autoliste.css">
	</head>
	<body id="body">
		<!--header Einbindung-->
		<header>
			<?php
			
			include("inc/header.php");
			
			?>
		</header>
		<!--Seiteninhalt-->
		<div id="page-container">
			<div id="content-wrap">
				<!--platzhalter für den header-->
				<div id="headerspace">
					<br><br><br>
				</div>
				<!--table um die Autoliste zu strukturieren-->
				<table id="carlist">
					<!--jede Tablerow enthät zwei Autoeinträge-->
					<tr>
						<!--td wird im css abhäning davon gestyled, ob er sich rechts oder links befindet-->
						<td class="listboxl">
							<!--div container welcher alle inhalte zu einem Auto enthält-->
							<div class="carbox" onclick="location.href='comments.php#boxauto1'">
								<!--Autoname wird aus der Datenbank abgerufen-->
								<?php
									
									$query = "SELECT name FROM cars WHERE id = 1";
									
									$result = $conn->query($query);
									
									if($result->rowCount() > 0) {
										while($row = $result->fetch(PDO::FETCH_ASSOC)){
												echo "<h1 class='autoname'>".$row['name']."</h1>";
										}
									}
								?>
								<!--Bild zu dem Auto wird aus dem Medien Ordner geöffnet-->
								<img src="../Medien/auto1.png" alt="Autobild" class="autobild">
								<table class="autotext">
									<!--Daten zu dem Auto werden aus der Datenbank abgerufen und dann in einer tabelle dargestellt-->
									<?php
										
										$query = "SELECT marken.name, cars.erscheinungsjahr, cars.autotyp, cars.sitze, cars.motor, cars.getriebe, cars.verbrauch FROM cars INNER JOIN marken ON cars.marken_id=marken.id WHERE cars.id = 1";
										
										$result = $conn->query($query);
										
										if($result->rowCount() > 0) {
											while($row = $result->fetch(PDO::FETCH_ASSOC)){
													echo "<tr>";
													echo "<td class='reihe1'>Marke</td>";
													echo "<td>".$row['name']."</td>";
													echo "</tr>";
													echo "<tr>";
													echo "<td class='reihe1'>Erscheinungsjahr</td>";
													echo "<td>".$row['erscheinungsjahr']."</td>";
													echo "</tr>";
													echo "<tr>";
													echo "<td class='reihe1'>Autotyp</td>";
													echo "<td>".$row['autotyp']."</td>";
													echo "</tr>";
													echo "<tr>";
													echo "<td class='reihe1'>Sitze</td>";
													echo "<td>".$row['sitze']."</td>";
													echo "</tr>";
													echo "<tr>";
													echo "<td class='reihe1'>Motorart</td>";
													echo "<td>".$row['motor']."</td>";
													echo "</tr>";
													echo "<tr>";
													echo "<td class='reihe1'>Getriebe</td>";
													echo "<td>".$row['getriebe']."</td>";
													echo "</tr>";
													echo "<tr>";
													echo "<td class='reihe1'><span title='auf 100km'>Verbrauch *</span></td>";
													echo "<td>".$row['verbrauch']." Liter</td>";
													echo "</tr>";
											}
										}
									?>
								</table>
							</div>
						</td>
						<!--td wird im css abhäning davon gestyled, ob er sich rechts oder links befindet-->
						<td class="listboxr">
							<!--div container welcher alle inhalte zu einem Auto enthält-->
							<div class="carbox" onclick="location.href='comments.php#boxauto2'">
								<!--Autoname wird aus der Datenbank abgerufen-->
								<?php
									
									$query = "SELECT name FROM cars WHERE id = 2";
									
									$result = $conn->query($query);
									
									if($result->rowCount() > 0) {
										while($row = $result->fetch(PDO::FETCH_ASSOC)){
												echo "<h1 class='autoname'>".$row['name']."</h1>";
										}
									}
								?>
								<!--Bild zu dem Auto wird aus dem Medien Ordner geöffnet-->
								<img src="../Medien/auto2.png" alt="Autobild" class="autobild">
								<table class="autotext">
									<!--Daten zu dem Auto werden aus der Datenbank abgerufen und dann in einer tabelle dargestellt-->
									<?php
										
										$query = "SELECT marken.name, cars.erscheinungsjahr, cars.autotyp, cars.sitze, cars.motor, cars.getriebe, cars.verbrauch FROM cars INNER JOIN marken ON cars.marken_id=marken.id WHERE cars.id = 2";
										
										$result = $conn->query($query);
										
										if($result->rowCount() > 0) {
											while($row = $result->fetch(PDO::FETCH_ASSOC)){
													echo "<tr>";
													echo "<td class='reihe1'>Marke</td>";
													echo "<td>".$row['name']."</td>";
													echo "</tr>";
													echo "<tr>";
													echo "<td class='reihe1'>Erscheinungsjahr</td>";
													echo "<td>".$row['erscheinungsjahr']."</td>";
													echo "</tr>";
													echo "<tr>";
													echo "<td class='reihe1'>Autotyp</td>";
													echo "<td>".$row['autotyp']."</td>";
													echo "</tr>";
													echo "<tr>";
													echo "<td class='reihe1'>Sitze</td>";
													echo "<td>".$row['sitze']."</td>";
													echo "</tr>";
													echo "<tr>";
													echo "<td class='reihe1'>Motorart</td>";
													echo "<td>".$row['motor']."</td>";
													echo "</tr>";
													echo "<tr>";
													echo "<td class='reihe1'>Getriebe</td>";
													echo "<td>".$row['getriebe']."</td>";
													echo "</tr>";
													echo "<tr>";
													echo "<td class='reihe1'><span title='auf 100km'>Verbrauch *</span></td>";
													echo "<td>".$row['verbrauch']." Liter</td>";
													echo "</tr>";
											}
										}
									?>
								</table>
							</div>
						</td>
					</tr>
					<!--jede Tablerow enthät zwei Autoeinträge-->
					<tr>
						<!--td wird im css abhäning davon gestyled, ob er sich rechts oder links befindet-->
						<td class="listboxl">
							<!--div container welcher alle inhalte zu einem Auto enthält-->
							<div class="carbox" onclick="location.href='comments.php#boxauto3'">
								<!--Autoname wird aus der Datenbank abgerufen-->
								<?php
									
									$query = "SELECT name FROM cars WHERE id = 3";
									
									$result = $conn->query($query);
									
									if($result->rowCount() > 0) {
										while($row = $result->fetch(PDO::FETCH_ASSOC)){
												echo "<h1 class='autoname'>".$row['name']."</h1>";
										}
									}
								?>
								<!--Bild zu dem Auto wird aus dem Medien Ordner geöffnet-->
								<img src="../Medien/auto3.png" alt="Autobild" class="autobild">
								<table class="autotext">
									<!--Daten zu dem Auto werden aus der Datenbank abgerufen und dann in einer tabelle dargestellt-->
									<?php
										
										$query = "SELECT marken.name, cars.erscheinungsjahr, cars.autotyp, cars.sitze, cars.motor, cars.getriebe, cars.verbrauch FROM cars INNER JOIN marken ON cars.marken_id=marken.id WHERE cars.id = 3";
										
										$result = $conn->query($query);
										
										if($result->rowCount() > 0) {
											while($row = $result->fetch(PDO::FETCH_ASSOC)){
													echo "<tr>";
													echo "<td class='reihe1'>Marke</td>";
													echo "<td>".$row['name']."</td>";
													echo "</tr>";
													echo "<tr>";
													echo "<td class='reihe1'>Erscheinungsjahr</td>";
													echo "<td>".$row['erscheinungsjahr']."</td>";
													echo "</tr>";
													echo "<tr>";
													echo "<td class='reihe1'>Autotyp</td>";
													echo "<td>".$row['autotyp']."</td>";
													echo "</tr>";
													echo "<tr>";
													echo "<td class='reihe1'>Sitze</td>";
													echo "<td>".$row['sitze']."</td>";
													echo "</tr>";
													echo "<tr>";
													echo "<td class='reihe1'>Motorart</td>";
													echo "<td>".$row['motor']."</td>";
													echo "</tr>";
													echo "<tr>";
													echo "<td class='reihe1'>Getriebe</td>";
													echo "<td>".$row['getriebe']."</td>";
													echo "</tr>";
													echo "<tr>";
													echo "<td class='reihe1'><span title='auf 100km'>Verbrauch *</span></td>";
													echo "<td>".$row['verbrauch']." Liter</td>";
													echo "</tr>";
											}
										}
									?>
								</table>
							</div>
						</td>
						<!--td wird im css abhäning davon gestyled, ob er sich rechts oder links befindet-->
						<td class="listboxr">
							<!--div container welcher alle inhalte zu einem Auto enthält-->
							<div class="carbox" onclick="location.href='comments.php#boxauto4'">
								<!--Autoname wird aus der Datenbank abgerufen-->
								<?php
									
									$query = "SELECT name FROM cars WHERE id = 4";
									
									$result = $conn->query($query);
									
									if($result->rowCount() > 0) {
										while($row = $result->fetch(PDO::FETCH_ASSOC)){
												echo "<h1 class='autoname'>".$row['name']."</h1>";
										}
									}
								?>
								<!--Bild zu dem Auto wird aus dem Medien Ordner geöffnet-->
								<img src="../Medien/auto4.png" alt="Autobild" class="autobild">
								<table class="autotext">
									<!--Daten zu dem Auto werden aus der Datenbank abgerufen und dann in einer tabelle dargestellt-->
									<?php
										
										$query = "SELECT marken.name, cars.erscheinungsjahr, cars.autotyp, cars.sitze, cars.motor, cars.getriebe, cars.verbrauch FROM cars INNER JOIN marken ON cars.marken_id=marken.id WHERE cars.id = 4";
										
										$result = $conn->query($query);
										
										if($result->rowCount() > 0) {
											while($row = $result->fetch(PDO::FETCH_ASSOC)){
													echo "<tr>";
													echo "<td class='reihe1'>Marke</td>";
													echo "<td>".$row['name']."</td>";
													echo "</tr>";
													echo "<tr>";
													echo "<td class='reihe1'>Erscheinungsjahr</td>";
													echo "<td>".$row['erscheinungsjahr']."</td>";
													echo "</tr>";
													echo "<tr>";
													echo "<td class='reihe1'>Autotyp</td>";
													echo "<td>".$row['autotyp']."</td>";
													echo "</tr>";
													echo "<tr>";
													echo "<td class='reihe1'>Sitze</td>";
													echo "<td>".$row['sitze']."</td>";
													echo "</tr>";
													echo "<tr>";
													echo "<td class='reihe1'>Motorart</td>";
													echo "<td>".$row['motor']."</td>";
													echo "</tr>";
													echo "<tr>";
													echo "<td class='reihe1'>Getriebe</td>";
													echo "<td>".$row['getriebe']."</td>";
													echo "</tr>";
													echo "<tr>";
													echo "<td class='reihe1'><span title='auf 100km'>Verbrauch *</span></td>";
													echo "<td>".$row['verbrauch']." Liter</td>";
													echo "</tr>";
											}
										}
									?>
								</table>
							</div>
						</td>
					</tr>
					<!--jede Tablerow enthät zwei Autoeinträge-->
					<tr>
						<!--td wird im css abhäning davon gestyled, ob er sich rechts oder links befindet-->
						<td class="listboxl">
							<!--div container welcher alle inhalte zu einem Auto enthält-->
							<div class="carbox" onclick="location.href='comments.php#boxauto5'">
								<!--Autoname wird aus der Datenbank abgerufen-->
								<?php
									
									$query = "SELECT name FROM cars WHERE id = 5";
									
									$result = $conn->query($query);
									
									if($result->rowCount() > 0) {
										while($row = $result->fetch(PDO::FETCH_ASSOC)){
												echo "<h1 class='autoname'>".$row['name']."</h1>";
										}
									}
								?>
								<!--Bild zu dem Auto wird aus dem Medien Ordner geöffnet-->
								<img src="../Medien/auto5.png" alt="Autobild" class="autobild">
								<table class="autotext">
									<!--Daten zu dem Auto werden aus der Datenbank abgerufen und dann in einer tabelle dargestellt-->
									<?php
										
										$query = "SELECT marken.name, cars.erscheinungsjahr, cars.autotyp, cars.sitze, cars.motor, cars.getriebe, cars.verbrauch FROM cars INNER JOIN marken ON cars.marken_id=marken.id WHERE cars.id = 5";
										
										$result = $conn->query($query);
										
										if($result->rowCount() > 0) {
											while($row = $result->fetch(PDO::FETCH_ASSOC)){
													echo "<tr>";
													echo "<td class='reihe1'>Marke</td>";
													echo "<td>".$row['name']."</td>";
													echo "</tr>";
													echo "<tr>";
													echo "<td class='reihe1'>Erscheinungsjahr</td>";
													echo "<td>".$row['erscheinungsjahr']."</td>";
													echo "</tr>";
													echo "<tr>";
													echo "<td class='reihe1'>Autotyp</td>";
													echo "<td>".$row['autotyp']."</td>";
													echo "</tr>";
													echo "<tr>";
													echo "<td class='reihe1'>Sitze</td>";
													echo "<td>".$row['sitze']."</td>";
													echo "</tr>";
													echo "<tr>";
													echo "<td class='reihe1'>Motorart</td>";
													echo "<td>".$row['motor']."</td>";
													echo "</tr>";
													echo "<tr>";
													echo "<td class='reihe1'>Getriebe</td>";
													echo "<td>".$row['getriebe']."</td>";
													echo "</tr>";
													echo "<tr>";
													echo "<td class='reihe1'><span title='auf 100km'>Verbrauch *</span></td>";
													echo "<td>".$row['verbrauch']." Liter</td>";
													echo "</tr>";
											}
										}
									?>
								</table>
							</div>
						</td>
						<!--td wird im css abhäning davon gestyled, ob er sich rechts oder links befindet-->
						<td class="listboxr">
							<!--div container welcher alle inhalte zu einem Auto enthält-->
							<div class="carbox" onclick="location.href='comments.php#boxauto6'">
								<!--Autoname wird aus der Datenbank abgerufen-->
								<?php
									
									$query = "SELECT name FROM cars WHERE id = 6";
									
									$result = $conn->query($query);
									
									if($result->rowCount() > 0) {
										while($row = $result->fetch(PDO::FETCH_ASSOC)){
												echo "<h1 class='autoname'>".$row['name']."</h1>";
										}
									}
								?>
								<!--Bild zu dem Auto wird aus dem Medien Ordner geöffnet-->
								<img src="../Medien/auto6.png" alt="Autobild" class="autobild">
								<table class="autotext">
									<!--Daten zu dem Auto werden aus der Datenbank abgerufen und dann in einer tabelle dargestellt-->
									<?php
										
										$query = "SELECT marken.name, cars.erscheinungsjahr, cars.autotyp, cars.sitze, cars.motor, cars.getriebe, cars.verbrauch FROM cars INNER JOIN marken ON cars.marken_id=marken.id WHERE cars.id = 6";
										
										$result = $conn->query($query);
										
										if($result->rowCount() > 0) {
											while($row = $result->fetch(PDO::FETCH_ASSOC)){
													echo "<tr>";
													echo "<td class='reihe1'>Marke</td>";
													echo "<td>".$row['name']."</td>";
													echo "</tr>";
													echo "<tr>";
													echo "<td class='reihe1'>Erscheinungsjahr</td>";
													echo "<td>".$row['erscheinungsjahr']."</td>";
													echo "</tr>";
													echo "<tr>";
													echo "<td class='reihe1'>Autotyp</td>";
													echo "<td>".$row['autotyp']."</td>";
													echo "</tr>";
													echo "<tr>";
													echo "<td class='reihe1'>Sitze</td>";
													echo "<td>".$row['sitze']."</td>";
													echo "</tr>";
													echo "<tr>";
													echo "<td class='reihe1'>Motorart</td>";
													echo "<td>".$row['motor']."</td>";
													echo "</tr>";
													echo "<tr>";
													echo "<td class='reihe1'>Getriebe</td>";
													echo "<td>".$row['getriebe']."</td>";
													echo "</tr>";
													echo "<tr>";
													echo "<td class='reihe1'><span title='auf 100km'>Verbrauch *</span></td>";
													echo "<td>".$row['verbrauch']." Liter</td>";
													echo "</tr>";
											}
										}
									?>
								</table>
							</div>
						</td>
					</tr>
					<!--jede Tablerow enthät zwei Autoeinträge-->
					<tr>
						<!--td wird im css abhäning davon gestyled, ob er sich rechts oder links befindet-->
						<td class="listboxl">
							<!--div container welcher alle inhalte zu einem Auto enthält-->
							<div class="carbox" onclick="location.href='comments.php#boxauto7'">
								<!--Autoname wird aus der Datenbank abgerufen-->
								<?php
									
									$query = "SELECT name FROM cars WHERE id = 7";
									
									$result = $conn->query($query);
									
									if($result->rowCount() > 0) {
										while($row = $result->fetch(PDO::FETCH_ASSOC)){
												echo "<h1 class='autoname'>".$row['name']."</h1>";
										}
									}
								?>
								<!--Bild zu dem Auto wird aus dem Medien Ordner geöffnet-->
								<img src="../Medien/auto7.png" alt="Autobild" class="autobild">
								<table class="autotext">
									<!--Daten zu dem Auto werden aus der Datenbank abgerufen und dann in einer tabelle dargestellt-->
									<?php
										
										$query = "SELECT marken.name, cars.erscheinungsjahr, cars.autotyp, cars.sitze, cars.motor, cars.getriebe, cars.verbrauch FROM cars INNER JOIN marken ON cars.marken_id=marken.id WHERE cars.id = 7";
										
										$result = $conn->query($query);
										
										if($result->rowCount() > 0) {
											while($row = $result->fetch(PDO::FETCH_ASSOC)){
													echo "<tr>";
													echo "<td class='reihe1'>Marke</td>";
													echo "<td>".$row['name']."</td>";
													echo "</tr>";
													echo "<tr>";
													echo "<td class='reihe1'>Erscheinungsjahr</td>";
													echo "<td>".$row['erscheinungsjahr']."</td>";
													echo "</tr>";
													echo "<tr>";
													echo "<td class='reihe1'>Autotyp</td>";
													echo "<td>".$row['autotyp']."</td>";
													echo "</tr>";
													echo "<tr>";
													echo "<td class='reihe1'>Sitze</td>";
													echo "<td>".$row['sitze']."</td>";
													echo "</tr>";
													echo "<tr>";
													echo "<td class='reihe1'>Motorart</td>";
													echo "<td>".$row['motor']."</td>";
													echo "</tr>";
													echo "<tr>";
													echo "<td class='reihe1'>Getriebe</td>";
													echo "<td>".$row['getriebe']."</td>";
													echo "</tr>";
													echo "<tr>";
													echo "<td class='reihe1'><span title='auf 100km'>Verbrauch *</span></td>";
													echo "<td>".$row['verbrauch']." Liter</td>";
													echo "</tr>";
											}
										}
									?>
								</table>
							</div>
						</td>
						<!--td wird im css abhäning davon gestyled, ob er sich rechts oder links befindet-->
						<td class="listboxr">
							<!--div container welcher alle inhalte zu einem Auto enthält-->
							<div class="carbox" onclick="location.href='comments.php#boxauto8'">
								<!--Autoname wird aus der Datenbank abgerufen-->
								<?php
									
									$query = "SELECT name FROM cars WHERE id = 8";
									
									$result = $conn->query($query);
									
									if($result->rowCount() > 0) {
										while($row = $result->fetch(PDO::FETCH_ASSOC)){
												echo "<h1 class='autoname'>".$row['name']."</h1>";
										}
									}
								?>
								<!--Bild zu dem Auto wird aus dem Medien Ordner geöffnet-->
								<img src="../Medien/auto8.png" alt="Autobild" class="autobild">
								<table class="autotext">
									<!--Daten zu dem Auto werden aus der Datenbank abgerufen und dann in einer tabelle dargestellt-->
									<?php
										
										$query = "SELECT marken.name, cars.erscheinungsjahr, cars.autotyp, cars.sitze, cars.motor, cars.getriebe, cars.verbrauch FROM cars INNER JOIN marken ON cars.marken_id=marken.id WHERE cars.id = 8";
										
										$result = $conn->query($query);
										
										if($result->rowCount() > 0) {
											while($row = $result->fetch(PDO::FETCH_ASSOC)){
													echo "<tr>";
													echo "<td class='reihe1'>Marke</td>";
													echo "<td>".$row['name']."</td>";
													echo "</tr>";
													echo "<tr>";
													echo "<td class='reihe1'>Erscheinungsjahr</td>";
													echo "<td>".$row['erscheinungsjahr']."</td>";
													echo "</tr>";
													echo "<tr>";
													echo "<td class='reihe1'>Autotyp</td>";
													echo "<td>".$row['autotyp']."</td>";
													echo "</tr>";
													echo "<tr>";
													echo "<td class='reihe1'>Sitze</td>";
													echo "<td>".$row['sitze']."</td>";
													echo "</tr>";
													echo "<tr>";
													echo "<td class='reihe1'>Motorart</td>";
													echo "<td>".$row['motor']."</td>";
													echo "</tr>";
													echo "<tr>";
													echo "<td class='reihe1'>Getriebe</td>";
													echo "<td>".$row['getriebe']."</td>";
													echo "</tr>";
													echo "<tr>";
													echo "<td class='reihe1'><span title='auf 100km'>Verbrauch *</span></td>";
													echo "<td>".$row['verbrauch']." Liter</td>";
													echo "</tr>";
											}
										}
									?>
								</table>
							</div>
						</td>
					</tr>
				</table>
			</div>
			<!--footer Einbindung-->
			<footer id="footer">
				<?php
			
				include("inc/footer.php");
			
				?>
			</footer>
		</div>
	</body>
</html>