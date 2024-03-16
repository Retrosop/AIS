<htmL>
<body>

<?
  $r = 'Нет значения';
  
  if(!empty($_GET['pageid']))
  {
	  $r = $_GET['pageid'];
  }
	  
  echo('result:'.$r);
  
  

?>

<?php header("Location: http://pythonbook.ru"); exit(); ?>
</body>
</html>