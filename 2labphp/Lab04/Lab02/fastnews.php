<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/style.css" type="text/css">
		<title>Быстрые новости</title>
	</head>
	<body topmargin="0", class='fon'>
		<style type='text/css'>
			.fon{
			background-image: url(fon.png);
			}
			.text{
				width: 155px;
				margin-left: 25px;
				padding: 5px;
				border: 1px solid #000;
				background-color: #409070;
				font-family: Courier New;
				color: #000;
				font-size: 25px;
				font-weight: bold;
			}
			.submenu{
				margin-top: 0;
				font-family: Monotype Corsiva;
				color: #fff;
				font-size: 22px;
				text-emphasis: underline;
			}
			.Btext{
				font-family: Courier New;
				color: Chocolate;
				font-size: 35px;
				font-weight: bold;
			}
			.Mtext{
				font-family: arial;
				color: #000;
				font-size: 20px;
				font-weight: bold;
			}
			a:link, a:visited, a:hover, a:active {
				text-decoration: none;
			}
			a:link, a:visited {
				color: #fff;
			}
			a:hover {
				color: #000;
			}
			a:active {
				color: #25447d;
			}
		</style>
		<table align="center" border="0" class='fon' width="1150" height="600" cellpadding="2">
			<tr><!-- Шапка сайта -->
			<td colspan="3" height="150"><img src="logotip.png" width="200px">	</td>
			</tr><!-- Верхнее меню -->
			<tr>
				<td colspan="3" bgcolor="#999" width="950" height="40" align="center">
					<font size="6" face="Monotype Corsiva">
						<a href="news.php">Главная</a> - 
						<a href="news1.php">Новости</a> - 
						<a href="stats.php">Статьи</a> - 
						<a href="rubriks.php">Рубрики</a> - 
						<a href="partners.php">Партнерам</a>
					</font>
				</td>
			</tr><!-- Центральная часть из трёх колонок -->
			<tr>
				<td width="180" valign="top">
					<div class="text">Здесь будет панель навигации</div>
				</td>
				<td valign="top">
					<font class="Btext">Свежие новости</font><br>
					<font class="Mtext">Сегодня произошло...</font><br>
				</td>
				<td width="170" valign="top">
					<object width="70" height="200">
						<img src="banr.png">
					</object>
				</td>
			</tr>
		</table>
	</body>
</html>