<html>
<head>
<script type='text/javascript'>
function fun1() {
   alert('Вас приветствует учебный центр');
}
function fun2() {
   x=prompt('Введите имя:', 'Имя');
   document.write('Здравствуйте, '+ x);
   }
function fun3() {
   confirm('Хотите стать Web-дизайнером');
}
function fun4() {
   alert('Добро пожаловать на наши курсы,:', 'Имя');
}

</script>

</head>
<body>
<input type='button' value='Окно оповещения' onclick='fun1()' />
<input type='button' value='Окно подтверждения' onclick='fun2()' />
<input type='button' value='Окно запроса' onclick='fun3()' />



</body>
</html>