<?php 
 $pen=$_POST['pen'];
 $pencil=$_POST['pencil'];
 $ruler=$_POST['ruler'];
 $pencil_case=$_POST['pencil_case'];
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Результат заказа</title>
	</head>
	<body>
		<h2>Результат заказа</h2>
		<?php
			echo '<font color=\"red\"><b>Заказ обработан</br><br/>Вы заказали</b></font><br/><br/>';
			echo $pen.' ручек<br/>';
			echo $pencil.' карандашей<br/>';
			echo $ruler.' линеек<br/>';
			echo $pencil_case.' пеналов';
		?>
	</body>
</html>
