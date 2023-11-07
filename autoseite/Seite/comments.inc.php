<?php
	//in das form eingetragene Kommentare werden in der Datenbank gespeichert
	function setComments1($conn) {
		if (isset($_POST['commentSubmit1'])) {
			$cars_id = $_POST['cars_id'];
			$uid = $_POST['uid'];
			$date = $_POST['date'];
			$message = $_POST['message'];
			
			$sql= "INSERT INTO comments (cars_id, uid, date, message) VALUES ('$cars_id', '$uid', '$date', '$message')";
			$result = $conn->query($sql);
		}
	}
	//in das form eingetragene Kommentare werden in der Datenbank gespeichert
	function setComments2($conn) {
		if (isset($_POST['commentSubmit2'])) {
			$cars_id = $_POST['cars_id'];
			$uid = $_POST['uid'];
			$date = $_POST['date'];
			$message = $_POST['message'];
			
			$sql= "INSERT INTO comments (cars_id, uid, date, message) VALUES ('$cars_id', '$uid', '$date', '$message')";
			$result = $conn->query($sql);
		}
	}
	//in das form eingetragene Kommentare werden in der Datenbank gespeichert
	function setComments3($conn) {
		if (isset($_POST['commentSubmit3'])) {
			$cars_id = $_POST['cars_id'];
			$uid = $_POST['uid'];
			$date = $_POST['date'];
			$message = $_POST['message'];
			
			$sql= "INSERT INTO comments (cars_id, uid, date, message) VALUES ('$cars_id', '$uid', '$date', '$message')";
			$result = $conn->query($sql);
		}
	}
	//in das form eingetragene Kommentare werden in der Datenbank gespeichert
	function setComments4($conn) {
		if (isset($_POST['commentSubmit4'])) {
			$cars_id = $_POST['cars_id'];
			$uid = $_POST['uid'];
			$date = $_POST['date'];
			$message = $_POST['message'];
			
			$sql= "INSERT INTO comments (cars_id, uid, date, message) VALUES ('$cars_id', '$uid', '$date', '$message')";
			$result = $conn->query($sql);
		}
	}
	//in das form eingetragene Kommentare werden in der Datenbank gespeichert
	function setComments5($conn) {
		if (isset($_POST['commentSubmit5'])) {
			$cars_id = $_POST['cars_id'];
			$uid = $_POST['uid'];
			$date = $_POST['date'];
			$message = $_POST['message'];
			
			$sql= "INSERT INTO comments (cars_id, uid, date, message) VALUES ('$cars_id', '$uid', '$date', '$message')";
			$result = $conn->query($sql);
		}
	}
	//in das form eingetragene Kommentare werden in der Datenbank gespeichert
	function setComments6($conn) {
		if (isset($_POST['commentSubmit6'])) {
			$cars_id = $_POST['cars_id'];
			$uid = $_POST['uid'];
			$date = $_POST['date'];
			$message = $_POST['message'];
			
			$sql= "INSERT INTO comments (cars_id, uid, date, message) VALUES ('$cars_id', '$uid', '$date', '$message')";
			$result = $conn->query($sql);
		}
	}
	//in das form eingetragene Kommentare werden in der Datenbank gespeichert
	function setComments7($conn) {
		if (isset($_POST['commentSubmit7'])) {
			$cars_id = $_POST['cars_id'];
			$uid = $_POST['uid'];
			$date = $_POST['date'];
			$message = $_POST['message'];
			
			$sql= "INSERT INTO comments (cars_id, uid, date, message) VALUES ('$cars_id', '$uid', '$date', '$message')";
			$result = $conn->query($sql);
		}
	}
	//in das form eingetragene Kommentare werden in der Datenbank gespeichert
	function setComments8($conn) {
		if (isset($_POST['commentSubmit8'])) {
			$cars_id = $_POST['cars_id'];
			$uid = $_POST['uid'];
			$date = $_POST['date'];
			$message = $_POST['message'];
			
			$sql= "INSERT INTO comments (cars_id, uid, date, message) VALUES ('$cars_id', '$uid', '$date', '$message')";
			$result = $conn->query($sql);
		}
	}
	//Kommentare zu dem Auto werden abgerufen
	//deleteform wird als button zum löschen des Kommentars angezeigt
	//editform wird als button angezeigt und führt auf die seite editcomment.php auf die Seite werden die daten des Kommentars übernommen und der text kann bearbeitet werden	
	function getComments1($conn) {
		$sql = "SELECT * FROM comments WHERE cars_id = 1";
		$result = $conn->query($sql);
		while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
			echo "<div class='commentbox'><p>";
				echo $row['uid']."<br>";
				echo $row['date']."<br><br>";
				echo nl2br($row['message']);
			echo "</p>
				<form class='deleteform' method='POST' action='".deleteComments($conn)."'>
					<input type='hidden' name='cid' value='".$row['cid']."'>
					<button type='submit' name='commentDelete'>Delete</button>
				</form>
				<form class='editform' method='POST' action='editcomment.php'>				
					<input type='hidden' name='cid' value='".$row['cid']."'>
					<input type='hidden' name='cars_id' value='".$row['cars_id']."'>
					<input type='hidden' name='uid' value='".$row['uid']."'>
					<input type='hidden' name='date' value='".$row['date']."'>
					<input type='hidden' name='message' value='".$row['message']."'>
					<button>Edit</button>
				</form>
			</div>";
		}
	}
	//Kommentare zu dem Auto werden abgerufen
	//deleteform wird als button zum löschen des Kommentars angezeigt
	//editform wird als button angezeigt und führt auf die seite editcomment.php auf die Seite werden die daten des Kommentars übernommen und der text kann bearbeitet werden
	function getComments2($conn) {
		$sql = "SELECT * FROM comments WHERE cars_id = 2";
		$result = $conn->query($sql);
		while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
			echo "<div class='commentbox'><p>";
				echo $row['uid']."<br>";
				echo $row['date']."<br><br>";
				echo nl2br($row['message']);
			echo "</p>
				<form class='deleteform' method='POST' action='".deleteComments($conn)."'>
					<input type='hidden' name='cid' value='".$row['cid']."'>
					<button type='submit' name='commentDelete'>Delete</button>
				</form>
				<form class='editform' method='POST' action='editcomment.php'>				
					<input type='hidden' name='cid' value='".$row['cid']."'>
					<input type='hidden' name='cars_id' value='".$row['cars_id']."'>
					<input type='hidden' name='uid' value='".$row['uid']."'>
					<input type='hidden' name='date' value='".$row['date']."'>
					<input type='hidden' name='message' value='".$row['message']."'>
					<button>Edit</button>
				</form>
			</div>";
		}
	}
	//Kommentare zu dem Auto werden abgerufen
	//deleteform wird als button zum löschen des Kommentars angezeigt
	//editform wird als button angezeigt und führt auf die seite editcomment.php auf die Seite werden die daten des Kommentars übernommen und der text kann bearbeitet werden
	function getComments3($conn) {
		$sql = "SELECT * FROM comments WHERE cars_id = 3";
		$result = $conn->query($sql);
		while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
			echo "<div class='commentbox'><p>";
				echo $row['uid']."<br>";
				echo $row['date']."<br><br>";
				echo nl2br($row['message']);
			echo "</p>
				<form class='deleteform' method='POST' action='".deleteComments($conn)."'>
					<input type='hidden' name='cid' value='".$row['cid']."'>
					<button type='submit' name='commentDelete'>Delete</button>
				</form>
				<form class='editform' method='POST' action='editcomment.php'>				
					<input type='hidden' name='cid' value='".$row['cid']."'>
					<input type='hidden' name='cars_id' value='".$row['cars_id']."'>
					<input type='hidden' name='uid' value='".$row['uid']."'>
					<input type='hidden' name='date' value='".$row['date']."'>
					<input type='hidden' name='message' value='".$row['message']."'>
					<button>Edit</button>
				</form>
			</div>";
		}
	}
	//Kommentare zu dem Auto werden abgerufen
	//deleteform wird als button zum löschen des Kommentars angezeigt
	//editform wird als button angezeigt und führt auf die seite editcomment.php auf die Seite werden die daten des Kommentars übernommen und der text kann bearbeitet werden
	function getComments4($conn) {
		$sql = "SELECT * FROM comments WHERE cars_id = 4";
		$result = $conn->query($sql);
		while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
			echo "<div class='commentbox'><p>";
				echo $row['uid']."<br>";
				echo $row['date']."<br><br>";
				echo nl2br($row['message']);
			echo "</p>
				<form class='deleteform' method='POST' action='".deleteComments($conn)."'>
					<input type='hidden' name='cid' value='".$row['cid']."'>
					<button type='submit' name='commentDelete'>Delete</button>
				</form>
				<form class='editform' method='POST' action='editcomment.php'>				
					<input type='hidden' name='cid' value='".$row['cid']."'>
					<input type='hidden' name='cars_id' value='".$row['cars_id']."'>
					<input type='hidden' name='uid' value='".$row['uid']."'>
					<input type='hidden' name='date' value='".$row['date']."'>
					<input type='hidden' name='message' value='".$row['message']."'>
					<button>Edit</button>
				</form>
			</div>";
		}
	}
	//Kommentare zu dem Auto werden abgerufen
	//deleteform wird als button zum löschen des Kommentars angezeigt
	//editform wird als button angezeigt und führt auf die seite editcomment.php auf die Seite werden die daten des Kommentars übernommen und der text kann bearbeitet werden
	function getComments5($conn) {
		$sql = "SELECT * FROM comments WHERE cars_id = 5";
		$result = $conn->query($sql);
		while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
			echo "<div class='commentbox'><p>";
				echo $row['uid']."<br>";
				echo $row['date']."<br><br>";
				echo nl2br($row['message']);
			echo "</p>
				<form class='deleteform' method='POST' action='".deleteComments($conn)."'>
					<input type='hidden' name='cid' value='".$row['cid']."'>
					<button type='submit' name='commentDelete'>Delete</button>
				</form>
				<form class='editform' method='POST' action='editcomment.php'>				
					<input type='hidden' name='cid' value='".$row['cid']."'>
					<input type='hidden' name='cars_id' value='".$row['cars_id']."'>
					<input type='hidden' name='uid' value='".$row['uid']."'>
					<input type='hidden' name='date' value='".$row['date']."'>
					<input type='hidden' name='message' value='".$row['message']."'>
					<button>Edit</button>
				</form>
			</div>";
		}
	}
	//Kommentare zu dem Auto werden abgerufen
	//deleteform wird als button zum löschen des Kommentars angezeigt
	//editform wird als button angezeigt und führt auf die seite editcomment.php auf die Seite werden die daten des Kommentars übernommen und der text kann bearbeitet werden
	function getComments6($conn) {
		$sql = "SELECT * FROM comments WHERE cars_id = 6";
		$result = $conn->query($sql);
		while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
			echo "<div class='commentbox'><p>";
				echo $row['uid']."<br>";
				echo $row['date']."<br><br>";
				echo nl2br($row['message']);
			echo "</p>
				<form class='deleteform' method='POST' action='".deleteComments($conn)."'>
					<input type='hidden' name='cid' value='".$row['cid']."'>
					<button type='submit' name='commentDelete'>Delete</button>
				</form>
				<form class='editform' method='POST' action='editcomment.php'>				
					<input type='hidden' name='cid' value='".$row['cid']."'>
					<input type='hidden' name='cars_id' value='".$row['cars_id']."'>
					<input type='hidden' name='uid' value='".$row['uid']."'>
					<input type='hidden' name='date' value='".$row['date']."'>
					<input type='hidden' name='message' value='".$row['message']."'>
					<button>Edit</button>
				</form>
			</div>";
		}
	}
	//Kommentare zu dem Auto werden abgerufen
	//deleteform wird als button zum löschen des Kommentars angezeigt
	//editform wird als button angezeigt und führt auf die seite editcomment.php auf die Seite werden die daten des Kommentars übernommen und der text kann bearbeitet werden
	function getComments7($conn) {
		$sql = "SELECT * FROM comments WHERE cars_id = 7";
		$result = $conn->query($sql);
		while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
			echo "<div class='commentbox'><p>";
				echo $row['uid']."<br>";
				echo $row['date']."<br><br>";
				echo nl2br($row['message']);
			echo "</p>
				<form class='deleteform' method='POST' action='".deleteComments($conn)."'>
					<input type='hidden' name='cid' value='".$row['cid']."'>
					<button type='submit' name='commentDelete'>Delete</button>
				</form>
				<form class='editform' method='POST' action='editcomment.php'>				
					<input type='hidden' name='cid' value='".$row['cid']."'>
					<input type='hidden' name='cars_id' value='".$row['cars_id']."'>
					<input type='hidden' name='uid' value='".$row['uid']."'>
					<input type='hidden' name='date' value='".$row['date']."'>
					<input type='hidden' name='message' value='".$row['message']."'>
					<button>Edit</button>
				</form>
			</div>";
		}
	}
	//Kommentare zu dem Auto werden abgerufen
	//deleteform wird als button zum löschen des Kommentars angezeigt
	//editform wird als button angezeigt und führt auf die seite editcomment.php auf die Seite werden die daten des Kommentars übernommen und der text kann bearbeitet werden
	function getComments8($conn) {
		$sql = "SELECT * FROM comments WHERE cars_id = 8";
		$result = $conn->query($sql);
		while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
			echo "<div class='commentbox'><p>";
				echo $row['uid']."<br>";
				echo $row['date']."<br><br>";
				echo nl2br($row['message']);
			echo "</p>
				<form class='deleteform' method='POST' action='".deleteComments($conn)."'>
					<input type='hidden' name='cid' value='".$row['cid']."'>
					<button type='submit' name='commentDelete'>Delete</button>
				</form>
				<form class='editform' method='POST' action='editcomment.php'>				
					<input type='hidden' name='cid' value='".$row['cid']."'>
					<input type='hidden' name='cars_id' value='".$row['cars_id']."'>
					<input type='hidden' name='uid' value='".$row['uid']."'>
					<input type='hidden' name='date' value='".$row['date']."'>
					<input type='hidden' name='message' value='".$row['message']."'>
					<button>Edit</button>
				</form>
			</div>";
		}
	}
	
	//wenn commentSubmit auf der Seite editcomment.php gedrückt wird, wird das kommentar mit der passende cid (comment id) auf den neuen Text geupdatet
	function editComments($conn) {
		if (isset($_POST['commentSubmit'])) {
			$cid = $_POST['cid'];
			$cars_id = $_POST['cars_id'];
			$uid = $_POST['uid'];
			$date = $_POST['date'];
			$message = $_POST['message'];
			
			$sql= "UPDATE comments SET message='$message' WHERE cid='$cid'";
			$result = $conn->query($sql);
			header("Location: comments.php");
		}
	}
	
	//wenn commentDelete gedrückt wird, wird das kommentar mit der passende cid (comment id) gelöscht
	function deleteComments($conn) {
		if (isset($_POST['commentDelete'])) {
			$cid = $_POST['cid'];
			
			$sql= "DELETE FROM comments WHERE cid='$cid'";
			$result = $conn->query($sql);
			header("Location: comments.php");
		}
	}
?>