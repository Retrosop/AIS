<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Лабораторная работа №2</title>
	</head>
	<body>
		<h3>Упражнение 1</h3>
		<?php
			print 'Привет Мир - выведено при помощи print';
			echo "</br>";
			echo 'Привет Мир - выведено при помощи echo';
		?>
		</br>
		
		<h3>Упражнение 2. Операции с числами</h3>
		<?php
			echo '1)</br>';
			$a=10;
			$b=20;

			print('a='.$a.'</br>');
			print('b='.$b.'</br></br>');
			
			echo '2) </br>';
			$c=$a+$b;

			print('a+b=');
			print($c);
			print('</br></br>');

			echo '3) </br>';
			print('c*3=');
			print($c*3);
			print('</br></br>');

			echo '4) </br>';
			print('c/(b-a)=');
			print($c/($b-$a));
			print('</br></br>');

			echo '5) </br>';
			$p="Программа";
			$d="работает";
			echo $p.'</br>';
			echo $d.'</br></br>';

			
			echo '6) </br>';
			$result=$p." ".$d;
			print($result.'</br></br>');
			
			echo '7) </br>';
			$result.= " хорошо!";
			print($result."</br>");
		?>
		 
		 </br>
		<h3>Упражнение 3. Чтение данных из файла</h3>
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
