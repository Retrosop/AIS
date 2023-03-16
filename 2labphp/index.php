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
<?php
        readfile("menu.txt")
    ?>
<?php
    $a = 1;
    $b = 0;

    if($a>$b)
    print("a больше b");
?>
<?php
    $a = 0;
    $b = 1;

    if($a>$b)
    print("a больше b");
    else
    print("a меньше, либо равно b");
?>
<?php
    for ($i = 1; $i <= 6; $i++){
        echo "Номер ".$i."<img width=300px height=200px src=\"a$i.bmp\">";
    }
?>


</body>
</html>
