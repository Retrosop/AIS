<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/style.css" type="text/css">
		<title>Mitsubishi live</title>
	</head>
	<body topmargin="10" class="fon"> <!-- Фон сайта (отступы и фон) -->
		<style type='text/css'>
			.fon{
				background-image: url(Ban.png);
				background-size: cover;
			}
			.log{
				margin: 0 50px 0 0; <!-- Отступы вокруг фотографии -->
			}
			.t{
				text-align: center;
				vertical-align: top;
			}
			.d{
				text-align:center;
				font: bold 21px Areal;
			}
			div#tekst_sverhu_kartinki {
				position: relative;
			}.tekst_sverhu_kartinki {
				position: absolute;
				top: 5%;
				left: 10px;
				text-transform: uppercase;			
				color: white;		
				width: 700px;				
				background: #00000094;				
				padding: 10px;				
				text-align: center;				
				font: bold 21px Helvetica, Sans-Serif;				
			}
			.text{
				width: 155px;
				margin-left: 2px;
				padding: 5px;
				border: 1px solid #000;
				background-color: PaleGoldenrod;
				font-family: Courier New;
				color: #000;
				font-size: 25px;
				font-weight: bold;
			}
			.form{
				margin-left: 2px;
				padding: 5px;
				border: 1px solid #000;
				background-color: PaleGoldenrod;
				font-family: Areal;
				color: #000;
				font-size: 15px;
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
		<table width="1180"> <!--align="center" border="0" height="400" cellpadding="0"-->
			<tr><!-- Шапка сайта -->
				<td colspan="3" bgcolor="#999" height="80">
					<img src="Log.png" class="log" width="300px"><!-- Верхнее меню -->
					<font size="6" face="Monotype Corsiva">
						<a href="index.php">Главная</a> - 
						<a>О компании</a> - 
						<a href="model.php">Модели</a> - 
						<a>Новости</a> - 
						<a>Покупателям</a>
					</font>
				</td>
			</tr>
			<tr><!-- Левая часть из трёх колонок -->
				<td width="180" valign="top">
					<div class="text">
						<a>Профиль</a>
						<a>Фото</a>
						<a>Избранное</a>
						<a>Контакты</a>
						<a>Помощь</a>
					</div>
				</td>
				<td > <!-- Центральная часть из трёх колонок -->
					<div id="tekst_sverhu_kartinki">
					<img src="Centr.jpg" height="450px" width="750px" valign="middle">
					<div class="tekst_sverhu_kartinki">
						Официальный центр Mitsubishi в Биробиджане 
						<br><br><br>
						Стать владельцем нового автомобиля Mitsubishi проще, чем вы думали - просто выберите нужную конфигурацию или найдите ближайшего к вам дилера.
					</div>
					</div>
				</td>
				<td width="220" valign="top"> <!-- Правая часть из трёх колонок -->
					<div class="form" style="border-color:#ba2d08;">
						<div class="d">Оформите заявку</div><br>
						<form enctype="multipart/form-data" method="post">
							<input type="hidden" name="Название формы" value="">
								<div>
									<div>Введите имя</div>
									<div>
										<input type="text" required="required" name="Введите имя" placeholder="Введите имя" autocomplete="off">
									</div>
								</div><br>
								<div>
									<div>Введите E-mail</div>
									<div>
										<input type="email" required="required" name="Введите E-mail" placeholder="mail@mail.ru" autocomplete="off">
									</div>
								</div><br>
								<div>
									<div>Введите номер телефона</div>
									<div>
										<input type="text" required="required" pattern="[+)( .-]*[0-9]+[0-9+)( .-]*" minlength="6" name="Введите номер телефона" placeholder="xxx-xxx-xxx" autocomplete="off">
									</div>
								</div><br>
								<div>
									<div>
										<input type="submit" class="submit_btn surround dark" data-hcolor="#6f2919" data-action="thanks" data-metrica_event="undefined" data-fb_pixel="undefined" data-vk_pixel="undefined" data-gtag_event="undefined" data-url="" data-amount="0" data-product_name="undefined" value="Закажите звонок" style="background-color: rgb(186, 45, 8); border-radius: 2em; border-color: transparent;" autocomplete="off" data-color="rgb(186, 45, 8)">
									</div>
								</div>
						</form><br>
						<div>
							Нажимая на кнопку, Вы принимаете Положение
							 и Согласие на обработку персональных данных.
						</div>
					</div>
				</td>
			</tr>
		</table>
	</body>
</html>