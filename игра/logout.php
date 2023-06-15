<? 
	session_start();
	session_unset();
	include ("db.php");
	header("Location: http://localhost:$OSport/");
?>