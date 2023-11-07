<?php
	include_once 'inc/dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="shortcut icon" type="image/x-icon" href="../Medien/icon-oldtimer.png">
		<title>RetroRideRating</title>
		<link rel="stylesheet" href="inc/general.css">
		<link rel="stylesheet" href="inc/marken.css">
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
					<br>
					<br>
				</div>
				<!--table um die Markenliste zu strukturieren-->
				<table id="markenlist">
					<tr>
						<td>
							<!--div container welcher alle inhalte zu einer Marke enthält-->
							<div class="markencontainer">
								<div class="markenbox">
									<!--table um die inhalte der Marke zu strukturieren-->
									<table class="markencontent">
										<tr>
											<td class="logocontainer">
												<!--Markenlogo wird aus dem Medien Ordner geöffnet-->
												<img src="../Medien/logo1.png" alt="Logobild" class="logobild">
											</td>
											<td class="markentextcontainer">
												<!--Daten zu der Marke werden aus der Datenbank abgerufen und dann in einer tabelle dargestellt-->
												<?php
									
												$query = "SELECT * FROM marken WHERE id = 1";
									
												$result = $conn->query($query);
									
													if($result->rowCount() > 0) {
														while($row = $result->fetch(PDO::FETCH_ASSOC)){
																echo "<h1 class='markenname'>".$row['name']."</h1>";
																echo "<table class='markentext'>";
																echo "<tr>";
																echo "<td class='markendaten'>Gründungsjahr</td>";
																echo "<td>".$row['gründungsjahr']."</td>";
																echo "</tr>";
																echo "<tr>";
																echo "<td class='markendaten'>Herkunftsland</td>";
																echo "<td>".$row['land']."</td>";
																echo "</tr>";
																echo "<tr>";
																echo "<td class='markendaten'>Markenphilosophie</td>";
																echo "<td>".$row['marken_text']."</td>";
																echo "</tr>";
																echo "</table>";
														}
													}
												?>
											</td>
										</tr>
									</table>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<!--div container welcher alle inhalte zu einer Marke enthält-->
							<div class="markencontainer">
								<div class="markenbox">	
									<!--table um die inhalte der Marke zu strukturieren-->
									<table class="markencontent">
										<tr>
											<td class="logocontainer">
												<!--Markenlogo wird aus dem Medien Ordner geöffnet-->
												<img src="../Medien/logo2.png" alt="Logobild" class="logobild">
											</td>
											<td class="markentextcontainer">
												<!--Daten zu der Marke werden aus der Datenbank abgerufen und dann in einer tabelle dargestellt-->
												<?php
									
												$query = "SELECT * FROM marken WHERE id = 2";
									
												$result = $conn->query($query);
									
													if($result->rowCount() > 0) {
														while($row = $result->fetch(PDO::FETCH_ASSOC)){
																echo "<h1 class='markenname'>".$row['name']."</h1>";
																echo "<table class='markentext'>";
																echo "<tr>";
																echo "<td class='markendaten'>Gründungsjahr</td>";
																echo "<td>".$row['gründungsjahr']."</td>";
																echo "</tr>";
																echo "<tr>";
																echo "<td class='markendaten'>Herkunftsland</td>";
																echo "<td>".$row['land']."</td>";
																echo "</tr>";
																echo "<tr>";
																echo "<td class='markendaten'>Markenphilosophie</td>";
																echo "<td>".$row['marken_text']."</td>";
																echo "</tr>";
																echo "</table>";
														}
													}
												?>
											</td>
										</tr>
									</table>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<!--div container welcher alle inhalte zu einer Marke enthält-->
							<div class="markencontainer">
								<div class="markenbox">
									<!--table um die inhalte der Marke zu strukturieren-->
									<table class="markencontent">
										<tr>
											<td class="logocontainer">
												<!--Markenlogo wird aus dem Medien Ordner geöffnet-->
												<img src="../Medien/logo3.png" alt="Logobild" class="logobild">
											</td>
											<td class="markentextcontainer">
												<!--Daten zu der Marke werden aus der Datenbank abgerufen und dann in einer tabelle dargestellt-->
												<?php
									
												$query = "SELECT * FROM marken WHERE id = 3";
									
												$result = $conn->query($query);
									
													if($result->rowCount() > 0) {
														while($row = $result->fetch(PDO::FETCH_ASSOC)){
																echo "<h1 class='markenname'>".$row['name']."</h1>";
																echo "<table class='markentext'>";
																echo "<tr>";
																echo "<td class='markendaten'>Gründungsjahr</td>";
																echo "<td>".$row['gründungsjahr']."</td>";
																echo "</tr>";
																echo "<tr>";
																echo "<td class='markendaten'>Herkunftsland</td>";
																echo "<td>".$row['land']."</td>";
																echo "</tr>";
																echo "<tr>";
																echo "<td class='markendaten'>Markenphilosophie</td>";
																echo "<td>".$row['marken_text']."</td>";
																echo "</tr>";
																echo "</table>";
														}
													}
												?>
											</td>
										</tr>
									</table>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<!--div container welcher alle inhalte zu einer Marke enthält-->
							<div class="markencontainer">
								<div class="markenbox">
									<!--table um die inhalte der Marke zu strukturieren-->
									<table class="markencontent">
										<tr>
											<td class="logocontainer">
												<!--Markenlogo wird aus dem Medien Ordner geöffnet-->
												<img src="../Medien/logo4.png" alt="Logobild" class="logobild">
											</td>
											<td class="markentextcontainer">
												<!--Daten zu der Marke werden aus der Datenbank abgerufen und dann in einer tabelle dargestellt-->
												<?php
									
												$query = "SELECT * FROM marken WHERE id = 4";
									
												$result = $conn->query($query);
									
													if($result->rowCount() > 0) {
														while($row = $result->fetch(PDO::FETCH_ASSOC)){
																echo "<h1 class='markenname'>".$row['name']."</h1>";
																echo "<table class='markentext'>";
																echo "<tr>";
																echo "<td class='markendaten'>Gründungsjahr</td>";
																echo "<td>".$row['gründungsjahr']."</td>";
																echo "</tr>";
																echo "<tr>";
																echo "<td class='markendaten'>Herkunftsland</td>";
																echo "<td>".$row['land']."</td>";
																echo "</tr>";
																echo "<tr>";
																echo "<td class='markendaten'>Markenphilosophie</td>";
																echo "<td>".$row['marken_text']."</td>";
																echo "</tr>";
																echo "</table>";
														}
													}
												?>
											</td>
										</tr>
									</table>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<!--div container welcher alle inhalte zu einer Marke enthält-->
							<div class="markencontainer">
								<div class="markenbox">
									<!--table um die inhalte der Marke zu strukturieren-->
									<table class="markencontent">
										<tr>
											<td class="logocontainer">
												<!--Markenlogo wird aus dem Medien Ordner geöffnet-->
												<img src="../Medien/logo5.png" alt="Logobild" class="logobild">
											</td>
											<td class="markentextcontainer">
												<!--Daten zu der Marke werden aus der Datenbank abgerufen und dann in einer tabelle dargestellt-->
												<?php
									
												$query = "SELECT * FROM marken WHERE id = 5";
									
												$result = $conn->query($query);
									
													if($result->rowCount() > 0) {
														while($row = $result->fetch(PDO::FETCH_ASSOC)){
																echo "<h1 class='markenname'>".$row['name']."</h1>";
																echo "<table class='markentext'>";
																echo "<tr>";
																echo "<td class='markendaten'>Gründungsjahr</td>";
																echo "<td>".$row['gründungsjahr']."</td>";
																echo "</tr>";
																echo "<tr>";
																echo "<td class='markendaten'>Herkunftsland</td>";
																echo "<td>".$row['land']."</td>";
																echo "</tr>";
																echo "<tr>";
																echo "<td class='markendaten'>Markenphilosophie</td>";
																echo "<td>".$row['marken_text']."</td>";
																echo "</tr>";
																echo "</table>";
														}
													}
												?>
											</td>
										</tr>
									</table>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<!--div container welcher alle inhalte zu einer Marke enthält-->
							<div class="markencontainer">
								<div class="markenbox">
									<!--table um die inhalte der Marke zu strukturieren-->
									<table class="markencontent">
										<tr>
											<td class="logocontainer">
												<!--Markenlogo wird aus dem Medien Ordner geöffnet-->
												<img src="../Medien/logo6.png" alt="Logobild" class="logobild">
											</td>
											<td class="markentextcontainer">
												<!--Daten zu der Marke werden aus der Datenbank abgerufen und dann in einer tabelle dargestellt-->
												<?php
									
												$query = "SELECT * FROM marken WHERE id = 6";
									
												$result = $conn->query($query);
									
													if($result->rowCount() > 0) {
														while($row = $result->fetch(PDO::FETCH_ASSOC)){
																echo "<h1 class='markenname'>".$row['name']."</h1>";
																echo "<table class='markentext'>";
																echo "<tr>";
																echo "<td class='markendaten'>Gründungsjahr</td>";
																echo "<td>".$row['gründungsjahr']."</td>";
																echo "</tr>";
																echo "<tr>";
																echo "<td class='markendaten'>Herkunftsland</td>";
																echo "<td>".$row['land']."</td>";
																echo "</tr>";
																echo "<tr>";
																echo "<td class='markendaten'>Markenphilosophie</td>";
																echo "<td>".$row['marken_text']."</td>";
																echo "</tr>";
																echo "</table>";
														}
													}
												?>
											</td>
										</tr>
									</table>
								</div>
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