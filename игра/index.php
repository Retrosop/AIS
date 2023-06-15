<? session_start()?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Стрелок</title>
		<script type="text/javascript" src="js/jquery-1.5.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.8.9.custom.min.js"></script>
		<script type="text/javascript" src="js/behavior.js"></script>

		<link rel="stylesheet" href="css/style.css">
		
	</head>
	<body>
		<div class="registration">
			<center>
				<div class="parent">
					<? if(!isset($_SESSION["username"])): ?>
					<div class="child">
						<form action="registration.php" method="POST" align="center">
							<text>Логин:</text><br> <input type="text" name="regusername"><br>
							<text>Пароль:</text><br> <input type="text" name="regpassword"><br><br>
							<input type="Submit"  value="Регистрация">
						</form>
					</div>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<div class="child">
						<form action="login.php" method="POST" align="center">
							<text>Логин:</text><br> <input type="text" name="username"><br>
							<text>Пароль:</text><br> <input type="text" name="password"><br><br>
							<input type="Submit"  value="Авторизация">
						</form>
					</div>
				</div>
			</center>
			<? else: ?>
			<div id="stat">
				<span id="sessionname"><?=$_SESSION['username']?></span>
				<span id="hit">0 мимо</span>
				<span id="miss">0 в цель</span>
				<a id="btnstart" href="javascript://">Играть &darr;</a>
				<a id="btnlogout" href="logout.php">Выйти &darr;</a>
			</div>
			<? endif ?>
		</div>
		
		<? if(isset($_SESSION["username"])): ?>
		<div id="note"> <h2>Нажмите &quot;Играть&quot;, чтобы запустить игру. Игра длится 30 секунд, в полицая стрелять не надо.</h2> </div>
		<? else: ?>
		<div id="note"> <h2>Авторизуйтесь, чтобы играть.</h2> </div>
		<? endif ?>
		
		<div id="container">
			<div id="char1" class="character enemy1"></div>
			<div id="char2" class="character enemy2"></div>
			<div id="char3" class="character enemy3"></div>
			<div id="char4" class="character ally"></div>
		</div>

		<div id="message"> Спасибо за игру. Нажмите &quot;Играть&quot;, чтобы запустить игру снова. </div>
		<br><br>
		<div class="rating">
			<center>
				<text style="color:white">Рейтинг игроков</text>
				<table class="iksweb">
					<tbody>
						<tr> <td>ID</td> <td>Имя</td> <td>↑<br>Всего попаданий<p></p></td> <td>Всего выстрелов</td> <td>Всего промахов</td> <td>Последнее число попаданий</td> <td>Последняя игра</td> <td>Регистрация</td> </tr>
						<?php
						mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
						include ("db.php");
						$mysqli = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname, $dbport);
						$result = $mysqli->query("SELECT * FROM `hunter` ORDER BY `total_hits` DESC");
						if($result->num_rows > 0)
						{
							$ar = $result->fetch_all(MYSQLI_ASSOC);
							foreach($ar as $row) 
							{
								$str = "<tr> <td>%d</td> <td>%s</td> <td>%d</td> <td>%d</td> <td>%d</td> <td>%d</td> <td>%s</td> <td>%s</td> </tr>";
								echo sprintf($str, $row["id"], $row["name"], $row["total_hits"], $row["total_shots"], $row["miss"], $row["best_shots"], $row["lasttime"], $row["registration"]);
							}
						}
						else
						{									
							echo "<tr>";
							for($i = 0; $i < 5; $i++) echo "<td>Нет данных</td>";
							echo "</tr>";
						}
						$mysqli->close();
						?>
					</tbody>
				</table>
			</center>
		</div>
	</body>
</html>
