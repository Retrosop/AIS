<?
include ("db.php");
$connection = new mysqli($dbhost, $dbuser, $dbpassword, $dbname, $dbport);
$sQuery = "CREATE TABLE IF NOT EXISTS `orders` (`id` INTEGER(12) AUTO_INCREMENT PRIMARY KEY,
												`mail` VARCHAR(128) UNIQUE,
												`description_order` VARCHAR(4096),
												`date` DATETIME,
												`status` BOOLEAN DEFAULT 0)";
$connection->query($sQuery);

if(isset($_POST["mail"]) && isset($_POST["orderdesc"]))
{
	$mail = $_POST["mail"];
	$orderdesc = $_POST["orderdesc"];
	$sQuery = "INSERT INTO `orders` (`mail`, `description_order`, `date`) VALUES ('$mail', '$orderdesc', NOW())";
	$connection->query($sQuery);
	$connection->close();
}

header("Location: http://localhost:$OSport/");
?>