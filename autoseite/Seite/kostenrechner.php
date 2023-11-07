<?php
	include_once 'inc/dbh.inc.php';
	//daten aus dem form werden entnommen wenn der submit button geklickt wurde und eine monthnumber angegeben wurde
	if (isset($_GET['submit']) && isset($_GET['monthnumber']) && $_GET['monthnumber'] != "") {
		
		$carnr = $_GET['cars'];
		$monate = $_GET['monthnumber'];
		$basecost = 0;
		//basecost würd standartmäßig auf 0 gesetzt
		//wenn die checkbox geklickt wurde wird der wert auf 1 gesetzt
		if (isset($_GET['basecost'])) {
			$basecost = 1;
		}
		//daten für die angegebene car id werden aus der Datenbank entnommen
		$sql = 'SELECT kauf_kosten, monat_kosten FROM kosten WHERE cars_id = :carnr';
		$stmt = $conn->prepare($sql);
		$stmt->execute([':carnr' => $carnr]);
		
		$kosten = $stmt->fetchALL(PDO::FETCH_ASSOC);
		//die endkosten werden aus den entnommenen daten berechnet
		$endkosten = $basecost * $kosten[0]['kauf_kosten'] + $monate * $kosten[0]['monat_kosten'];
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="shortcut icon" type="image/x-icon" href="../Medien/icon-oldtimer.png">
		<title>RetroRideRating</title>
		<link rel="stylesheet" href="inc/general.css">
		<link rel="stylesheet" href="inc/kostenberechner.css">
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
				<!--div container welcher den Konstenrechner enhält-->
				<div id="formcontainer">
					<!--form um die zur Rechnung benötigten Daten vom nutzer abzufragen-->
					<form method="get" id="formform">
						<fieldset>
							<legend>Kostenberechner:</legend><br>
							<!--select feld um das Auto auszuwählen, für welches die Kosten berechnet werden sollen-->
							<select id="cars" name="cars">
								<option value="1">
									<!--Name des autos wird aus der Datenbank abgerufen-->
									<?php
										
										$query = "SELECT name FROM cars WHERE id = 1";
										
										$result = $conn->query($query);
										
										if($result->rowCount() > 0) {
											while($row = $result->fetch(PDO::FETCH_ASSOC)){
													echo "".$row['name']."";
											}
										}
									?>
								</option>
								<option value="2">
									<!--Name des autos wird aus der Datenbank abgerufen-->
									<?php
										
										$query = "SELECT name FROM cars WHERE id = 2";
										
										$result = $conn->query($query);
										
										if($result->rowCount() > 0) {
											while($row = $result->fetch(PDO::FETCH_ASSOC)){
													echo "".$row['name']."";
											}
										}
									?>
								</option>
								<option value="3">
									<!--Name des autos wird aus der Datenbank abgerufen-->
									<?php
										
										$query = "SELECT name FROM cars WHERE id = 3";
										
										$result = $conn->query($query);
										
										if($result->rowCount() > 0) {
											while($row = $result->fetch(PDO::FETCH_ASSOC)){
													echo "".$row['name']."";
											}
										}
									?>
								</option>
								<option value="4">
									<!--Name des autos wird aus der Datenbank abgerufen-->
									<?php
										
										$query = "SELECT name FROM cars WHERE id = 4";
										
										$result = $conn->query($query);
										
										if($result->rowCount() > 0) {
											while($row = $result->fetch(PDO::FETCH_ASSOC)){
													echo "".$row['name']."";
											}
										}
									?>
								</option>
								<option value="5">
									<!--Name des autos wird aus der Datenbank abgerufen-->
									<?php
										
										$query = "SELECT name FROM cars WHERE id = 5";
										
										$result = $conn->query($query);
										
										if($result->rowCount() > 0) {
											while($row = $result->fetch(PDO::FETCH_ASSOC)){
													echo "".$row['name']."";
											}
										}
									?>
								</option>
								<option value="6">
									<!--Name des autos wird aus der Datenbank abgerufen-->
									<?php
										
										$query = "SELECT name FROM cars WHERE id = 6";
										
										$result = $conn->query($query);
										
										if($result->rowCount() > 0) {
											while($row = $result->fetch(PDO::FETCH_ASSOC)){
													echo "".$row['name']."";
											}
										}
									?>
								</option>
								<option value="7">
									<!--Name des autos wird aus der Datenbank abgerufen-->
									<?php
										
										$query = "SELECT name FROM cars WHERE id = 7";
										
										$result = $conn->query($query);
										
										if($result->rowCount() > 0) {
											while($row = $result->fetch(PDO::FETCH_ASSOC)){
													echo "".$row['name']."";
											}
										}
									?>
								</option>
								<option value="8">
									<!--Name des autos wird aus der Datenbank abgerufen-->
									<?php
										
										$query = "SELECT name FROM cars WHERE id = 8";
										
										$result = $conn->query($query);
										
										if($result->rowCount() > 0) {
											while($row = $result->fetch(PDO::FETCH_ASSOC)){
													echo "".$row['name']."";
											}
										}
									?>
								</option>
							</select><br><br>
							<!--auswahlfeld in welchem der Nutzer die Anzahl der Monate auswählen kann, es sind zahlen zwischen 1 und 120 erlaubt und ohne eine eingabe kann kein Preis berechnet werden-->
							<input type="number" id="monthnumber" name="monthnumber" min="1" max="120" placeholder="Monate"><br><br>
							<!--checkbox um auszuwählen ob der Kaufpreis des Autos mit einberechnet werden soll-->
							<input type="checkbox" id="basecost" name="basecost" value="basecost">
							<label for="basecost">Anschaffungskosten</label><br><br>
						</fieldset><br>
						<!--button um das form abzugeben und den Preis berechen zu lassen-->
						<input type="submit" name="submit" value="Berechnen" id="submitbutton"><br><br>
						<!--Das ergebniss der Rechnung wird, wenn vorhanden ausgegeben-->
						<?php
							if(isset($endkosten)) {
								echo "= ".$endkosten;
							}
						?>
					</form>
				</div>
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