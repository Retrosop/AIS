<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Поисковая система публикаций</title>

  <!-- Подключение стилей Bootstrap 5 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css">

  <!-- Подключение стилей CSS -->
  <link rel="stylesheet" href="css/style.css">

  <!-- Подключение скриптов Bootstrap 5 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js"></script>
</head>
<?php

    include ("db.php");
// Подключение к базе данных
$conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname, $dbport);

// Проверка на ошибку подключения
if ($conn->connect_error) {
    die('Ошибка подключения: (' . $conn->connect_errno . ') ' . $conn->connect_error);
}

$str = "%s %s %s %s %s";

$title = $_POST['title'];
$author = $_POST['author'];
$date = $_POST['date'];
// $new_data = explode(".", $date);
// $date =$new_data[0];
// echo $date;


$str1 = '';
$str2 = '';
$str3 = '';

if(strlen($title) > 0) $str1 = "SELECT * FROM Public WHERE namepub LIKE '%$title%'";
else $str1 = '';

if(strlen($author) > 0) $str2 = "SELECT * FROM Public WHERE authorpub LIKE '%$author%'";
else $str2 = '';

if(strlen($date) > 0) $str3 = "SELECT * FROM Public WHERE datepub LIKE '%$date%'";
else $str3 = '';

$sQuery = sprintf($str, isset($_POST['title']) ? $str1 : '', strlen($title) > 0 && strlen($author) > 0 ? " UNION " : '',  isset($_POST['author']) ? $str2 : '', strlen($author) > 0 && strlen($date) > 0 ? " UNION " : '', isset($_POST['date']) ? $str3 : '');

$sQuery = trim($sQuery, " \n\r\t\v\x00");

if($sQuery!=='') 
{
    
    $result = $conn -> query($sQuery);

    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo '<center>';
            echo '<p>';
            echo '<div class="card mb-4 shadow"> <img style="display:block;margin-left:auto;margin-right:auto;width:200px" src="'.$row["image"];
            echo '" class="card-img-top" alt="..."> <div class="card-body"> <h5 class="card-title">'.$row['namepub'];
            echo '</h5> <p class="card-text">'.$row['descpub'];
            echo '</p></div> </div>';
            echo '</p>';
            echo '</center>';
            
        }
        echo '<center><button class="btn btn-dark"><a style="text-decoration:none;color:white" href="http://localhost:';echo$OSport;echo'/wwwwww">К поиску</a></button></center>';
    } 
    else 
    {echo '<p>Поиск не дал результатов</p>';
    echo '<center><button class="btn btn-dark"><a style="text-decoration:none;color:white" href="http://localhost:';echo$OSport;echo'/wwwwww">К поиску</a></button></center>';}
} 
else header("Location: http://localhost:$OSport/wwwwww");

$conn->close();
?>
