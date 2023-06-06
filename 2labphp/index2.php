<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP - упражнение 1</title>
</head>
<body>
    <h3>Упражнение 1</h3>
    <?php 
        print("Привет Мир - выведено при помощи print</br>");
        echo "Привет Мир - выведено при помощи echo"
    ?>
	
	</br>
	<h2>Упражнение 2. Операции с числами</h2>
	<?php
		$a=10;
		$b=20;

		print('a='.$a.'</br>');
		print('b='.$b.'</br>');

		$c=$a+$b;

		print('a+b=');
		print($c);
		print('</br>');

		print('c*3=');
		print($c*3);
		print('</br>');

		print('c/(b-a)=');
		print($c/($b-$a));
		print('</br>');

		$p="программа";
		$d="работает";

		$result=$p." ".$d;

		print($result."</br>");

		$result.= " хорошо";

		print($result."</br>");
	?>
	 
	 </br>
	<h1>Упражнение 3. Чтение данных из файла</h1>
	<h2 align="center">Меню здорового питания</h2>
	<?php
        readfile("menu.txt");
    ?>
	
	</br>
	<h3>Упражнение 4. Организация ветвления, оператор if</h3>
	<?php
    $a = 1;
    $b = 0;

    if($a>$b)
    print("a больше b");
	?>
	
	</br>
	<h3>Упражнение 5. Организация ветвления, оператор else</h3>
	<?php
    $a = 0;
    $b = 1;

    if($a>$b)
    print("a больше b");
    else
    print("a меньше, либо равно b");
	?>
	
	</br>
	<h2>Упражнение 6. Организация ветвления, оператор for</h2>
	<h3 align="center"> Изображения редких цветов</h3>
	<?php
		for ($i = 1; $i <= 6; $i++){
			echo "Номер ".$i."<img width=150px height=120px src=\"pic$i.jpg\">";
		}
	?>

</body>
</html>
