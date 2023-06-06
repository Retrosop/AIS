<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Функция require</title>
</head>
<body>
	<table border="0" width="100%" height="100%" cellspacing="0" cellpadding="0" align="center">
		<!-- Строка 1 - шапка сайта -->
		<tr>
			<td height="120" colspan="3" bgcolor="green">
				<?php 
					require('header.inc'); 
				?>
			</td>
		</tr>
		<!-- Строка 2 - центральная часть сайта-->
		<tr>
			<td width="150" valign="top" bgcolor="grey">
				<?php require('left.inc'); ?>			
			</td>
			<td><h1 align="center">Это главная страница</h1></td>
			<td width="150" valign="top" bgcolor="grey">
				<?php require('right.inc'); ?>			
			</td>
		</tr>
		<!-- Строка 3 - подвал сайта -->
		<tr>
			<td height="80" colspan="3" bgcolor="yellow">
				<?php require('footer.inc'); ?>
			</td>
		</tr>		
	</table>
</body>
</html>