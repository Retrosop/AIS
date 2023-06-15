<?php
session_start();
include ("db.php");
$conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname, $dbport);

if(isset($_POST["username"]) && isset($_POST["password"])) 
{
    $username = $_POST["username"];
    $password = $_POST["password"];

	$sql = "SELECT * FROM hunter WHERE name = '$username' AND pass = '$password'";

    $result = mysqli_query($conn, $sql);

    if($result->num_rows > 0) $_SESSION['username'] = $username;
	else 
	{
        $response = array("status" => "error", "message" => "Wrong password or user not found");
        echo json_encode($response);
    }

    mysqli_close($conn);
}

header("Location: http://localhost:$OSport/");
?>