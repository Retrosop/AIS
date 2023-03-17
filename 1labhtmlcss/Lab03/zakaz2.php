<?php 
 $pen=$_POST['pen'];
 $pencil=$_POST['pencil'];
 $ruler=$_POST['ruler'];
 $pencil_case=$_POST['pencil_case'];
 $address=$_POST['address'];
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
  $sumcout=$pen+$pencil+$ruler+$pencil_case; //Общее количество товара
  define('PENPRICE',10); //константа - стоимость ручек
  define('PENCILPRICE',5); //константа - стоимость карандашей
  define('RULERPRICE',6); //константа - стоимость линеек
  define('PENSILCASEPRICE',9); //константа - стоимость пеналов
  $sumprice=$pen*PENPRICE +
  $pencil*PENCILPRICE +
  $ruler*RULERPRICE +
  $pencil_case*PENSILCASEPRICE; //общая стоимость всех заказаных товаров
  
  if($sumcout==0) //если ни один товар не выбран
  {
    echo '<p><b>Список закакза пуст</b></p>';
  }
  elseif($pen<0||$pencil<0||$ruler<0||$pencil_case<0) //если число введено некорректно
  {
    echo '<p><b>Количество товара введено некорректно</b></p>';
  }
  else{
    if($pen<10)
     $discount = 0; //если ручек до , скидка 0%
    elseif($pen>=10&&$pen<=49)
     $discount = 5; //если ручек от 10 до 49 , скидка 5%
    elseif($pen>=50&&$pen<=99)
     $discount = 10; //если ручек от 50 до 99, скидка 10%
    elseif($pen>=100)
     $discount = 15; //если ручек от 100, скидка 15%

  $sumdiscount=$sumprice-$pen*PENPRICE*$discount/100; //Общая стоимость с учётом скидки
  $nalogsale=0.10; //местный налог с продаж 10%
  $sumnalog=$sumdiscount*(1+$nalogsale); //Общая стоимость с учётом налога с продаж

  echo '<font color=\"red\"><b>Заказ обработан в '.date('H:i, j.s F').'<br/><br/>Вы заказали</b></font><br/><br/>';
  echo $pen.' ручек<br/>';
  echo $pencil.' карандашей<br/>';
  echo $ruler.' линеек<br/>';
  echo $pencil_case.' пеналов<br/>';
  echo 'Заказано товаров: '.$sumcout.'<br/>';
  echo 'Ваша скидка составила: '.$discount.'%<br/>';
  echo 'Итого: '.number_format($sumdiscount,2).'<br/><br/>';
  echo 'Всего, включая налог с продаж: $'.number_format($sumnalog,2).'<br/>';
  echo 'Ваш адрес: '.$address.'<br/>';
}
?>
<?php
	$date=date('H:i, j F'); //заносим дату в переменную
	$output=$date." ".$pen." ручек, ".$pencil." карандашей, ".$ruler." линеек, ".$pencil_case." пеналов. Всего на сумму $".number_format($sumnalog,2)." ".$address."\n"; //в переменную заносим описание заказа

	//запись в файл
	$fp=fopen("orders.txt",'a');//команда создания текстового файла в режиме многократной записи
	fwrite($fp,$output);//запись значения переменной с формулировкой заказа
	fclose($fp);//закрытие файла
?>
</body>
</html>

