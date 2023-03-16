<html>
<head>
  <script type="text/javascript">
     document.write("Я изучаю JavaScript.");
  </script>
  
  <script type='text/javascript'>
   function fun1(a) {
     alert(a+' Яокнооповещения '+2*a/0);
   }
   function fun2() {
     confirm('Яокноподтверждения');
   }
   function fun3() {
     x=prompt('ВведитеВашеимя:', 'Имя');
     document.write('Здравствуйте, '+ x);
   }
</script>

  <!--
  <script type="text/javascript" src="ex.js"></script>
  -->
</head>

<body>
 <button OnClick="fun1(1)"> My first button </button>


</body>


</html>