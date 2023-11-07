<?php
	date_default_timezone_set('Europe/Berlin');
	include_once 'inc/dbh.inc.php';
	include 'comments.inc.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Title</title>
		<link rel="stylesheet" type="text/css" href="inc/comments.css">
	</head>
	<body>
	<!--keine header oder footer Einbindung, da die seite lediglich als popup zum bearbeiten des Kommentars gesehen werden soll-->
	<div id="editbereich">
		<h1 id="commentedith1">Bearbeiten sie ihr Kommentar:</h1><br>
		<!--bearbeiten eines kommentar-->
		<?php
		$cid = $_POST['cid'];
		$uid = $_POST['uid'];
		$date = $_POST['date'];
		$message = $_POST['message'];
		
		echo"<form method='POST' action='".editComments($conn)."'>
			<input type='hidden' name='cid' value='".$cid."'>
			<input type='hidden' name='uid' value='".$uid."'>
			<input type='hidden' name='date' value='".$date."'>
			<textarea name='message'>".$message."</textarea><br>
			<button type='submit' name='commentSubmit' class='submitbutton'>Edit</button>
		</form>";
		
		?>
	</div>
	</body>
</html>