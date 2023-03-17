<html>
<head>
<script type="text/javascript">
function fun(){

if (confirm("Хотите стать Web-дизайнером?")) {
2
  alert("Учите стили CSS и JavaScript!")
3
} else {
4
  alert("Упускаете время")
5
}

}

</script>

</head>
<body>
<button OnClick="fun()"> Run<button>
</body>
<html>


	в окне confirm вывести сообщение "Хотите стать Web-дизайнером?" с альтернативными ответами в окнах alert, если TRUE, то "Учите стили CSS и JavaScript!", если FALSE то "Упускаете время!".