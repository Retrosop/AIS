<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <title>Магазин канцелярии</title>
</head>
<body>
 <h1 style="color:#212121">Магазин канцелярии</h1>
 <h2 style="color:#261da3">Форма заказа</h2>
 <form action="zakaz2.php" method="post">
  <table border="0">
   <tr bgcolor="#4ec3c7">
    <td width="150">Товар</td>
    <td width="100">Количество</td>
   </tr>
   <tr>
    <td>Ручки</td>
    <td align="left"><input type="text" name="pen" size="4" maxlength="3" value="0"></td>
   </tr>
   <tr>
    <td>Карандаш</td>
    <td align="left"><input type="text" name="pencil" size="4" maxlength="3" value="0"></td>
   </tr>
   <tr>
    <td>Линейка</td>
    <td align="left"><input type="text" name="ruler" size="4" maxlength="3" value="0"></td>
   </tr>
   <tr>
    <td>Пенал</td>
    <td align="left"><input type="text" name="pencil_case" size="4" maxlength="3" value="0"></td>
   </tr>
   <td>Адрес доставки</td>
   <td align="left"><input type="text" name="address" size="80" maxlength="200"></td>
  </tr>
   <tr>
    <td colspan="2" align="center">
     <input type="submit" value="Заказать">
    </td>
   </tr>
  </table>
 </form>
</body>
</html>