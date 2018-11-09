<html>
<head>
<title>Отправка SMS</title>
</head>
<body>
	<?php
	//Если была нажата кнопка ОК,
	//то отправляем письмо и информируем об этом пользователя
	if (isset($_POST['okbutton']))
	{
	if ($_POST['nomer']== '')
	{
	echo "<font color='red'>Вы ввели не все данные</font>";
	echo "<br><a href=backform.php>Назад</a>";
	exit;
	}
		?>
<form method=POST action=sms.php>
  <table border=0 align=center>
    <tr>
      <td>
        Оператор
      </td>
      <td>
        <select name='operator'>
          <option value='KSTAR'>Киевстар</option>
          <option value='JEANS'>Джинс</option>
          <option value='UMC'>UMC</option>
        </select>
      </td>
    </tr>
    <tr>
    <td>
    Номер
    </td>
    <td>
    <input type=text name=nomer maxlength=7>
    </td>
      </tr>
      <tr>
      <td>
     Сообщение
      </td>
       <td>
        <textarea name=sms cols=40 rows=6></textarea>
        </td>
        </tr>
    <tr>
      <td>
       .
      </td>
      <td>
         <center> <input type=reset value='Очистить форму'>
         <input type=hidden name=action value=true>
          <input type=submit name="okbutton" value='Отправить SMS'>   </center>
      </td>
    </tr>
  </table>
</form>
<p> <font color="red">
<b>
	</body>
	</html>