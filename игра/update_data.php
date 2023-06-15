<?php 
include ("db.php");

$conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname, $dbport);

$hits = $_POST["id"];
$miss = $_POST["name"];

$shots = $hits+$miss;

$sQuery = "UPDATE `hunter` SET 
			`total_hits` = `total_hits`+$hits, 
			`total_shots` = `total_shots`+$shots, 
			`miss` = `miss`+$miss,
			`lasttime` = now(),
			`best_shots` = $hits";

mysqli_query($conn, $sQuery);

header("Location: http://localhost:$OSport/");
?>