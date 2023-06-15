<? 
include ("db.php");

$conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname, $dbport);

$createtable = "CREATE TABLE IF NOT EXISTS `hunter`(
								`id` INTEGER(12) AUTO_INCREMENT PRIMARY KEY,
								`name` VARCHAR(256) NOT NULL UNIQUE, 
								`pass` VARCHAR(64) NOT NULL,
								`total_hits` INTEGER(12) DEFAULT 0,
								`total_shots` INTEGER(12) DEFAULT 0,
								`miss` INTEGER(12) DEFAULT 0,
								`lasttime` DATETIME,
								`best_shots` INTEGER(12) DEFAULT 0,
								`registration` DATETIME)";

mysqli_query($conn, $createtable);

if(isset($_POST["regusername"]) && isset($_POST["regpassword"]) && strlen($_POST["regusername"]) > 0 && strlen($_POST["regpassword"]) > 0)
{
	$regusername = $_POST["regusername"];
	$regpassword = $_POST["regpassword"];

	$regusername = trim($regusername, " \n\r\t\v\x00");
	$regpassword = trim($regpassword, " \n\r\t\v\x00");

	$sql = "INSERT INTO `hunter`(`name`, `pass`, `registration`) VALUES ('$regusername', '$regpassword', NOW())";

	$result = mysqli_query($conn, $sql);
}

header("Location: http://localhost:$OSport/");
?>