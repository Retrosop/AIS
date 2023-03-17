<html>
<head>
<script type="text/javascript">
function fun(){

if (confirm("Хотите посчитать")) {
  y=9;
  x=5;
  //alert(' '+((35*y-25*x)/5+232) );
  //alert('e '+ '1 ' );
  alert(2 + '1 ' );
 // alert(2 + 1);
} else {

  alert("Упускаете время")

}

}

</script>

</head>
<body>
<button OnClick="fun()"> Run<button>
</body>
<html>


	в окне confirm вывести сообщение "Хотите стать Web-дизайнером?" с альтернативными ответами в окнах alert, если TRUE, то "Учите стили CSS и JavaScript!", если FALSE то "Упускаете время!".