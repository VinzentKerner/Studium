<?php
	include_once 'inc/dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<link rel="shortcut icon" type="image/x-icon" href="../Medien/icon-oldtimer.png">
		<title>RetroRideRating</title>
		<link rel="stylesheet" href="inc/general.css">
		<link rel="stylesheet" href="inc/home.css">
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
				<!--div container wird geöffnet, mit einer mindeshöhe von 100vh, sodas nur die inhalte in dem container für den nutzer sofort sichtbar sind wenn die seite gestarte wird,
				für den darauffolgenden über uns Teil muss runtergescrollt werden-->
				<div id="homescreen"> 
					<!--slideshow mit vier Bildern-->
					<div class="cssSlider">	
						<!--um das nächste Bild zu sehen kann der nutzer auf einen der 4 kreise klicken, die Bilder scrollen nicht automatisch weiter-->
						<input type="radio" name="slider" id="slide01" checked="checked">
						<input type="radio" name="slider" id="slide02">
						<input type="radio" name="slider" id="slide03">
						<input type="radio" name="slider" id="slide04">		 
						<ul class="sliderElements">
							<li>
								<figure>
									<!--slideshow Bild wird aus dem Medien Ordner geöffnet-->
									<img src="../Medien/slideshow1.png" alt="" height="400" width="1200">
									<figcaption>VW Transporter</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<!--slideshow Bild wird aus dem Medien Ordner geöffnet-->
									<img src="../Medien/slideshow2.png" alt="" height="400" width="1200">
									<figcaption>VW Käfer</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<!--slideshow Bild wird aus dem Medien Ordner geöffnet-->
									<img src="../Medien/slideshow3.png" alt="" height="400" width="1200">
									<figcaption>Porsche 911</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<!--slideshow Bild wird aus dem Medien Ordner geöffnet-->
									<img src="../Medien/slideshow4.png" alt="" height="400" width="1200">
									<figcaption>Fiat 500</figcaption>
								</figure>
							</li>
						</ul>		 
						<ul class="sliderControls">
							<li><label for="slide01">1</label></li>
							<li><label for="slide02">2</label></li>
							<li><label for="slide03">3</label></li>
							<li><label for="slide04">4</label></li>
						</ul>
					</div>
					<div id="startbox">
						<!--button under der Slideshow um sofort zu der Autoliste zu kommen-->
						<button id="startbutton" onclick="location.href='autoliste.php'">Zur Autoliste &#10148;</button>
					</div>
				</div>
					<!--div container mit einige hintergrundinformationen über die Seite-->
					<div id="aboutus">
						<h1 id="aboutush1">Über uns:</h1>
						<hr id="hrline">
						<p id="aboutustext">Willkommen bei RetroRideRating, deinem ultimativen Ziel für Liebhaber von Oldtimern und Sammlern! Unsere Leidenschaft für klassische Automobile und zeitlose Designs hat uns dazu inspiriert, 
							diese Plattform zu schaffen, auf der wir die Schönheit, Geschichte und Handwerkskunst von Oldtimern feiern.<br><br>
							Bei RetroRideRating verstehen wir die Anziehungskraft von Vintage-Autos, von denen jedes eine einzigartige Geschichte seiner Ära erzählt. 
							Unser Team aus engagierten Experten und Auto-Enthusiasten setzt sich dafür ein, ein umfassendes und zuverlässiges Bewertungssystem anzubieten, 
							das diese automobilen Schätze mit größter Präzision und Sorgfalt bewertet.<br><br>
							Wir sind stolz darauf, eine umfangreiche Datenbank mit ikonischen Oldtimer-Autos zu kuratieren und dafür zu sorgen, dass jedes Modell seinen rechtmäßigen Platz in der Automobilgeschichte einnimmt. 
							Von eleganten Luxus-Klassikern bis hin zu robusten Roadstern berücksichtigt unser Bewertungssystem verschiedene Faktoren, darunter historische Bedeutung, Design-Eleganz, 
							mechanisches Können und allgemeine Auswirkungen auf die Automobilindustrie.<br><br>
							Transparenz und Genauigkeit stehen im Mittelpunkt von RetroRideRating. Unsere Bewertungsmethodik basiert auf umfangreicher Recherche, 
							Branchenkenntnissen und dem Feedback der Benutzer und garantiert eine objektive und faire Bewertung dieser geschätzten Automobile. 
							Egal, ob du ein erfahrener Sammler oder ein Enthusiast bist, der gerade erst seine Reise in die Welt der Oldtimer beginnt, auf unsere Bewertungen kannst du vertrauen, 
							um fundierte Entscheidungen zu treffen und verborgene Schätze zu entdecken.<br><br>
							Jenseits der Bewertungen dient RetroRideRating als lebendige Community von Liebhabern von Vintage-Autos. Hier kannst du dich mit Gleichgesinnten verbinden, 
							deine Erfahrungen teilen und wertvolle Erkenntnisse austauschen. Wir glauben daran, dass die Leidenschaft für Oldtimer keine Grenzen kennt, 
							und diese Plattform ist eine Feier der gemeinsamen Liebe für diese automobilen Meisterwerke.<br><br>
							Während wir unsere Plattform weiter ausbauen und verbessern, laden wir dich ein, uns auf dieser nostalgischen Reise zu begleiten. Entdecke die Schönheit der klassischen Autos, 
							erlebe ihren zeitlosen Charme und sei Teil einer Community, die die Faszination von Retro-Rides schätzt. Vielen Dank, dass du Teil von RetroRideRating bist, wo die Vergangenheit auf die Gegenwart trifft, 
							um eine Zukunft der Wertschätzung für Oldtimer zu inspirieren.<br>
						</p>
					<div>
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