<html>
<head>
<script type="text/javascript">
function fun(){
x=parseInt(prompt('Введите x'));
y=parseInt(prompt ('Введите y'));
x1=(35*y-25*x)/5+232;
x2=(8*y/x+5*x/y-43)*6;




	if (x1>x2)
	{
		document.write('x1:= '+x1);
		document.write('<br>');
		document.write('Остаток от деления'+Math.floor(x1)%Math.floor(x2));
	}
	else{document.write('x2:= '+x2);
		document.write('<br>');
		document.write('Остаток от деления'+Math.floor(x2)%Math.floor(x1));
	}

}


</script>

</head>
<body>
<button OnClick="fun()"> Run<button>
</body>
<html>
