<?php

$dsn = "mysql:host=localhost;dbname=vkerner";
$dbusername = "root";
$dbpassword = "";

try {
    $conn = new PDO($dsn, $dbusername, $dbpassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} 
catch(PDOExecption $e)
	{
    echo "Verbindung fehlgeschlagen: ". $e->getMessage();
	}