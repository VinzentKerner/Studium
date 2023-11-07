<?php
	date_default_timezone_set('Europe/Berlin');
	include_once 'inc/dbh.inc.php';
	include_once 'comments.inc.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="shortcut icon" type="image/x-icon" href="../Medien/icon-oldtimer.png">
		<title>RetroRideRating</title>
		<link rel="stylesheet" href="inc/general.css">
		<link rel="stylesheet" type="text/css" href="inc/comments.css">
	</head>
	<body id="body">
		<!--header Einbindung-->
		<header>
			<?php
			
			include("inc/header.php");
			
			?>
		</header>
		<!--content-->
		<div id="page-container">
			<div id="content-wrap">
				<!--div container mit einem Bild und ein paar infos zum Auto-->
				<div class="autoflair" id="boxauto1">
					<h1 class="carname">
						<!--Autoname und Markenname des Autos werden durch einen JOIN befehl aus der Datenbank abgerufen und aneinandergehängt-->
						<?php
					
							$query = "SELECT marken.name as marken_name, cars.name FROM cars INNER JOIN marken ON cars.marken_id=marken.id WHERE cars.id = 1";
							
							$result = $conn->query($query);
							
							if($result->rowCount() > 0) {
								while($row = $result->fetch(PDO::FETCH_ASSOC)){
										echo "".$row['marken_name']." ".$row['name']."";
								}
							}
						?></h1>
					<!--Autobild wird aus dem Medien Ordner geöffnet-->
					<img src="../Medien/autoflair1.png" alt="Flairbild" class="flairbild">
					<!--flairtext wird aus der Datenbank abgerufen und angezeigt-->
					<p class="flairtext">"
						<?php
						
							$query = "SELECT flair_text FROM cars WHERE id = 1";
							
							$result = $conn->query($query);
							
							if($result->rowCount() > 0) {
								while($row = $result->fetch(PDO::FETCH_ASSOC)){
										echo "".$row['flair_text']."";
								}
							}
						?> "
					</p><br>
					<h1 class="carrating"> unsere Bewertung: 
						<!--Bewertung des Autos wird aus der Datenbank abgerufen und angezeigt-->
						<?php
							
							$query = "SELECT score FROM cars WHERE id = 1";
							
							$result = $conn->query($query);
							
							if($result->rowCount() > 0) {
								while($row = $result->fetch(PDO::FETCH_ASSOC)){
										echo "".$row['score']."";
								}
							}
						?>/5
					</h1>	
				</div>
				<div class="commentbereich">
					<!--form zum eingeben von Kommentaren wird angezeigt und darunter werden kommentare zu dem Auto abgerufen und angezeigt-->
					<?php
					echo"<form method='POST' action='".setComments1($conn)."'>
						<input type='hidden' name='cars_id' value='1'>
						<input type='hidden' name='uid' value='Anonymous'>
						<input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
						<textarea name='message'></textarea><br>
						<button type='submit' name='commentSubmit1' class='submitbutton'>Comment</button>
					</form>";
					
					getComments1($conn);
					?>
				</div>
				<!--div container mit einem Bild und ein paar infos zum Auto-->
				<div class="autoflair" id="boxauto2">
					<h1 class="carname">
						<!--Autoname und Markenname des Autos werden durch einen JOIN befehl aus der Datenbank abgerufen und aneinandergehängt-->
						<?php
					
							$query = "SELECT marken.name as marken_name, cars.name FROM cars INNER JOIN marken ON cars.marken_id=marken.id WHERE cars.id = 2";
							
							$result = $conn->query($query);
							
							if($result->rowCount() > 0) {
								while($row = $result->fetch(PDO::FETCH_ASSOC)){
										echo "".$row['marken_name']." ".$row['name']."";
								}
							}
						?></h1>
					<!--Autobild wird aus dem Medien Ordner geöffnet-->
					<img src="../Medien/autoflair2.png" alt="Flairbild" class="flairbild">
					<p class="flairtext">"
						<!--flairtext wird aus der Datenbank abgerufen und angezeigt-->
						<?php
						
							$query = "SELECT flair_text FROM cars WHERE id = 2";
							
							$result = $conn->query($query);
							
							if($result->rowCount() > 0) {
								while($row = $result->fetch(PDO::FETCH_ASSOC)){
										echo "".$row['flair_text']."";
								}
							}
						?> "
					</p><br>
					<h1 class="carrating"> unsere Bewertung: 
						<!--Bewertung des Autos wird aus der Datenbank abgerufen und angezeigt-->
						<?php
							
							$query = "SELECT score FROM cars WHERE id = 2";
							
							$result = $conn->query($query);
							
							if($result->rowCount() > 0) {
								while($row = $result->fetch(PDO::FETCH_ASSOC)){
										echo "".$row['score']."";
								}
							}
						?>/5
					</h1>
				</div>
				<div class="commentbereich">
					<!--form zum eingeben von Kommentaren wird angezeigt und darunter werden kommentare zu dem Auto abgerufen und angezeigt-->
					<?php
					echo"<form method='POST' action='".setComments2($conn)."'>
						<input type='hidden' name='cars_id' value='2'>
						<input type='hidden' name='uid' value='Anonymous'>
						<input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
						<textarea name='message'></textarea><br>
						<button type='submit' name='commentSubmit2' class='submitbutton'>Comment</button>
					</form>";
					
					getComments2($conn);
					?>
				</div>
				<!--div container mit einem Bild und ein paar infos zum Auto-->
				<div class="autoflair" id="boxauto3">
					<h1 class="carname">
						<!--Autoname und Markenname des Autos werden durch einen JOIN befehl aus der Datenbank abgerufen und aneinandergehängt-->
						<?php
					
							$query = "SELECT marken.name as marken_name, cars.name FROM cars INNER JOIN marken ON cars.marken_id=marken.id WHERE cars.id = 3";
							
							$result = $conn->query($query);
							
							if($result->rowCount() > 0) {
								while($row = $result->fetch(PDO::FETCH_ASSOC)){
										echo "".$row['marken_name']." ".$row['name']."";
								}
							}
						?></h1>
					<!--Autobild wird aus dem Medien Ordner geöffnet-->
					<img src="../Medien/autoflair3.png" alt="Flairbild" class="flairbild">
					<p class="flairtext">"
						<!--flairtext wird aus der Datenbank abgerufen und angezeigt-->
						<?php
						
							$query = "SELECT flair_text FROM cars WHERE id = 3";
							
							$result = $conn->query($query);
							
							if($result->rowCount() > 0) {
								while($row = $result->fetch(PDO::FETCH_ASSOC)){
										echo "".$row['flair_text']."";
								}
							}
						?> "
					</p><br>
					<h1 class="carrating"> unsere Bewertung: 
						<!--Bewertung des Autos wird aus der Datenbank abgerufen und angezeigt-->
						<?php
							
							$query = "SELECT score FROM cars WHERE id = 3";
							
							$result = $conn->query($query);
							
							if($result->rowCount() > 0) {
								while($row = $result->fetch(PDO::FETCH_ASSOC)){
										echo "".$row['score']."";
								}
							}
						?>/5
					</h1>
				</div>
				<div class="commentbereich">
					<!--form zum eingeben von Kommentaren wird angezeigt und darunter werden kommentare zu dem Auto abgerufen und angezeigt-->
					<?php
					echo"<form method='POST' action='".setComments3($conn)."'>
						<input type='hidden' name='cars_id' value='3'>
						<input type='hidden' name='uid' value='Anonymous'>
						<input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
						<textarea name='message'></textarea><br>
						<button type='submit' name='commentSubmit3' class='submitbutton'>Comment</button>
					</form>";
					
					getComments3($conn);
					?>
				</div>
				<!--div container mit einem Bild und ein paar infos zum Auto-->
				<div class="autoflair" id="boxauto4">
					<h1 class="carname">
						<!--Autoname und Markenname des Autos werden durch einen JOIN befehl aus der Datenbank abgerufen und aneinandergehängt-->
						<?php
					
							$query = "SELECT marken.name as marken_name, cars.name FROM cars INNER JOIN marken ON cars.marken_id=marken.id WHERE cars.id = 4";
							
							$result = $conn->query($query);
							
							if($result->rowCount() > 0) {
								while($row = $result->fetch(PDO::FETCH_ASSOC)){
										echo "".$row['marken_name']." ".$row['name']."";
								}
							}
						?></h1>
					<!--Autobild wird aus dem Medien Ordner geöffnet-->
					<img src="../Medien/autoflair4.png" alt="Flairbild" class="flairbild">
					<p class="flairtext">"
						<!--flairtext wird aus der Datenbank abgerufen und angezeigt-->
						<?php
						
							$query = "SELECT flair_text FROM cars WHERE id = 4";
							
							$result = $conn->query($query);
							
							if($result->rowCount() > 0) {
								while($row = $result->fetch(PDO::FETCH_ASSOC)){
										echo "".$row['flair_text']."";
								}
							}
						?> "
					</p><br>
					<h1 class="carrating"> unsere Bewertung: 
						<!--Bewertung des Autos wird aus der Datenbank abgerufen und angezeigt-->
						<?php
							
							$query = "SELECT score FROM cars WHERE id = 4";
							
							$result = $conn->query($query);
							
							if($result->rowCount() > 0) {
								while($row = $result->fetch(PDO::FETCH_ASSOC)){
										echo "".$row['score']."";
								}
							}
						?>/5
					</h1>
				</div>
				<div class="commentbereich">
					<!--form zum eingeben von Kommentaren wird angezeigt und darunter werden kommentare zu dem Auto abgerufen und angezeigt-->
					<?php
					echo"<form method='POST' action='".setComments4($conn)."'>
						<input type='hidden' name='cars_id' value='4'>
						<input type='hidden' name='uid' value='Anonymous'>
						<input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
						<textarea name='message'></textarea><br>
						<button type='submit' name='commentSubmit4' class='submitbutton'>Comment</button>
					</form>";
					
					getComments4($conn);
					?>
				</div>
				<!--div container mit einem Bild und ein paar infos zum Auto-->
				<div class="autoflair" id="boxauto5">
					<h1 class="carname">
						<!--Autoname und Markenname des Autos werden durch einen JOIN befehl aus der Datenbank abgerufen und aneinandergehängt-->
						<?php
					
							$query = "SELECT marken.name as marken_name, cars.name FROM cars INNER JOIN marken ON cars.marken_id=marken.id WHERE cars.id = 5";
							
							$result = $conn->query($query);
							
							if($result->rowCount() > 0) {
								while($row = $result->fetch(PDO::FETCH_ASSOC)){
										echo "".$row['marken_name']." ".$row['name']."";
								}
							}
						?></h1>
					<!--Autobild wird aus dem Medien Ordner geöffnet-->
					<img src="../Medien/autoflair5.png" alt="Flairbild" class="flairbild">
					<p class="flairtext">"
						<!--flairtext wird aus der Datenbank abgerufen und angezeigt-->
						<?php
						
							$query = "SELECT flair_text FROM cars WHERE id = 5";
							
							$result = $conn->query($query);
							
							if($result->rowCount() > 0) {
								while($row = $result->fetch(PDO::FETCH_ASSOC)){
										echo "".$row['flair_text']."";
								}
							}
						?> "
					</p><br>
					<h1 class="carrating"> unsere Bewertung: 
						<!--Bewertung des Autos wird aus der Datenbank abgerufen und angezeigt-->
						<?php
							
							$query = "SELECT score FROM cars WHERE id = 5";
							
							$result = $conn->query($query);
							
							if($result->rowCount() > 0) {
								while($row = $result->fetch(PDO::FETCH_ASSOC)){
										echo "".$row['score']."";
								}
							}
						?>/5
					</h1>
				</div>
				<div class="commentbereich">
					<!--form zum eingeben von Kommentaren wird angezeigt und darunter werden kommentare zu dem Auto abgerufen und angezeigt-->
					<?php
					echo"<form method='POST' action='".setComments5($conn)."'>
						<input type='hidden' name='cars_id' value='5'>
						<input type='hidden' name='uid' value='Anonymous'>
						<input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
						<textarea name='message'></textarea><br>
						<button type='submit' name='commentSubmit5' class='submitbutton'>Comment</button>
					</form>";
					
					getComments5($conn);
					?>
				</div>
				<!--div container mit einem Bild und ein paar infos zum Auto-->
				<div class="autoflair" id="boxauto6">
					<h1 class="carname">
						<!--Autoname und Markenname des Autos werden durch einen JOIN befehl aus der Datenbank abgerufen und aneinandergehängt-->
						<?php
					
							$query = "SELECT marken.name as marken_name, cars.name FROM cars INNER JOIN marken ON cars.marken_id=marken.id WHERE cars.id = 6";
							
							$result = $conn->query($query);
							
							if($result->rowCount() > 0) {
								while($row = $result->fetch(PDO::FETCH_ASSOC)){
										echo "".$row['marken_name']." ".$row['name']."";
								}
							}
						?></h1>
					<!--Autobild wird aus dem Medien Ordner geöffnet-->
					<img src="../Medien/autoflair6.png" alt="Flairbild" class="flairbild">
					<p class="flairtext">"
						<!--flairtext wird aus der Datenbank abgerufen und angezeigt-->
						<?php
						
							$query = "SELECT flair_text FROM cars WHERE id = 6";
							
							$result = $conn->query($query);
							
							if($result->rowCount() > 0) {
								while($row = $result->fetch(PDO::FETCH_ASSOC)){
										echo "".$row['flair_text']."";
								}
							}
						?> "
					</p><br>
					<h1 class="carrating"> unsere Bewertung: 
						<!--Bewertung des Autos wird aus der Datenbank abgerufen und angezeigt-->
						<?php
							
							$query = "SELECT score FROM cars WHERE id = 6";
							
							$result = $conn->query($query);
							
							if($result->rowCount() > 0) {
								while($row = $result->fetch(PDO::FETCH_ASSOC)){
										echo "".$row['score']."";
								}
							}
						?>/5
					</h1>
				</div>
				<div class="commentbereich">
					<!--form zum eingeben von Kommentaren wird angezeigt und darunter werden kommentare zu dem Auto abgerufen und angezeigt-->
					<?php
					echo"<form method='POST' action='".setComments6($conn)."'>
						<input type='hidden' name='cars_id' value='6'>
						<input type='hidden' name='uid' value='Anonymous'>
						<input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
						<textarea name='message'></textarea><br>
						<button type='submit' name='commentSubmit6' class='submitbutton'>Comment</button>
					</form>";
					
					getComments6($conn);
					?>
				</div>
				<!--div container mit einem Bild und ein paar infos zum Auto-->
				<div class="autoflair" id="boxauto7">
					<h1 class="carname">
						<!--Autoname und Markenname des Autos werden durch einen JOIN befehl aus der Datenbank abgerufen und aneinandergehängt-->
						<?php
					
							$query = "SELECT marken.name as marken_name, cars.name FROM cars INNER JOIN marken ON cars.marken_id=marken.id WHERE cars.id = 7";
							
							$result = $conn->query($query);
							
							if($result->rowCount() > 0) {
								while($row = $result->fetch(PDO::FETCH_ASSOC)){
										echo "".$row['marken_name']." ".$row['name']."";
								}
							}
						?></h1>
					<!--Autobild wird aus dem Medien Ordner geöffnet-->
					<img src="../Medien/autoflair7.png" alt="Flairbild" class="flairbild">
					<p class="flairtext">"
						<!--flairtext wird aus der Datenbank abgerufen und angezeigt-->
						<?php
						
							$query = "SELECT flair_text FROM cars WHERE id = 7";
							
							$result = $conn->query($query);
							
							if($result->rowCount() > 0) {
								while($row = $result->fetch(PDO::FETCH_ASSOC)){
										echo "".$row['flair_text']."";
								}
							}
						?> "
					</p><br>
					<h1 class="carrating"> unsere Bewertung: 
						<!--Bewertung des Autos wird aus der Datenbank abgerufen und angezeigt-->
						<?php
							
							$query = "SELECT score FROM cars WHERE id = 7";
							
							$result = $conn->query($query);
							
							if($result->rowCount() > 0) {
								while($row = $result->fetch(PDO::FETCH_ASSOC)){
										echo "".$row['score']."";
								}
							}
						?>/5
					</h1>
				</div>
				<div class="commentbereich">
					<!--form zum eingeben von Kommentaren wird angezeigt und darunter werden kommentare zu dem Auto abgerufen und angezeigt-->
					<?php
					echo"<form method='POST' action='".setComments7($conn)."'>
						<input type='hidden' name='cars_id' value='7'>
						<input type='hidden' name='uid' value='Anonymous'>
						<input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
						<textarea name='message'></textarea><br>
						<button type='submit' name='commentSubmit7' class='submitbutton'>Comment</button>
					</form>";
					
					getComments7($conn);
					?>
				</div>
				<!--div container mit einem Bild und ein paar infos zum Auto-->
				<div class="autoflair" id="boxauto8">
					<h1 class="carname">
						<!--Autoname und Markenname des Autos werden durch einen JOIN befehl aus der Datenbank abgerufen und aneinandergehängt-->
						<?php
					
							$query = "SELECT marken.name as marken_name, cars.name FROM cars INNER JOIN marken ON cars.marken_id=marken.id WHERE cars.id = 8";
							
							$result = $conn->query($query);
							
							if($result->rowCount() > 0) {
								while($row = $result->fetch(PDO::FETCH_ASSOC)){
										echo "".$row['marken_name']." ".$row['name']."";
								}
							}
						?></h1>
					<!--Autobild wird aus dem Medien Ordner geöffnet-->
					<img src="../Medien/autoflair8.png" alt="Flairbild" class="flairbild">
					<p class="flairtext">"
						<!--flairtext wird aus der Datenbank abgerufen und angezeigt-->
						<?php
						
							$query = "SELECT flair_text FROM cars WHERE id = 8";
							
							$result = $conn->query($query);
							
							if($result->rowCount() > 0) {
								while($row = $result->fetch(PDO::FETCH_ASSOC)){
										echo "".$row['flair_text']."";
								}
							}
						?> "
					</p><br>
					<h1 class="carrating"> unsere Bewertung: 
						<!--Bewertung des Autos wird aus der Datenbank abgerufen und angezeigt-->
						<?php
							
							$query = "SELECT score FROM cars WHERE id = 8";
							
							$result = $conn->query($query);
							
							if($result->rowCount() > 0) {
								while($row = $result->fetch(PDO::FETCH_ASSOC)){
										echo "".$row['score']."";
								}
							}
						?>/5
					</h1>
				</div>
				<div class="commentbereich">
					<!--form zum eingeben von Kommentaren wird angezeigt und darunter werden kommentare zu dem Auto abgerufen und angezeigt-->
					<?php
					echo"<form method='POST' action='".setComments8($conn)."'>
						<input type='hidden' name='cars_id' value='8'>
						<input type='hidden' name='uid' value='Anonymous'>
						<input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
						<textarea name='message'></textarea><br>
						<button type='submit' name='commentSubmit8' class='submitbutton'>Comment</button>
					</form>";
					
					getComments8($conn);
					?>
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