<!DOCTYPE html>
<html>
<head>
	<title>bkinvtest</title>
</head>
<body>

<?php

$host = 'localhost';
$user = 'Radbk';
$password = 'bankshot';
$dbname =  'bkdb';


$dsn = 'mysql:host='. $host .';dbname='.$dbname;

$pdo = new PDO($dsn, $user, $password);

$stmt = $pdo->query("SELECT * FROM inventory"); // fetch data


while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
	echo $row['product_name']."<br>";
}
?>