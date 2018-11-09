<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Документ без названия</title>
</head>

<body>
	
	<?php
	//Если была нажата кнопка ОК,
	//то отправляем письмо и информируем об этом пользователя
	if (isset($_POST['okbutton']))
	{
	if ($_POST['person']== '' or $_POST['email']== '' or
	$_POST['question']== '')
	{
	echo "<font color='red'>Вы ввели не все данные</font>";
	echo "<br><a href=backform.php>Назад</a>";
	exit;
	}
	//Куда будем отправлять письмо
	$komu="LittleBuddan@vr-online.ru";
	//Тема письма
	$tema="Bonpoc от ".$_POST['person']." ".$_POST['email'];
	//Само письмо
	$text_pisma=$_POST['question'];
	
	//Отправляем письмо
	mail($komu,$tema,$text_pisma);
	
	echo "Уважаемый ".$_POST['person']."! Ваш вопрос был отправлен администратору";
	echo "<br><a href=backform.php>Назад</a>";
	//Выполнять больше нечего, выходим из программы
	exit;
	}
	?>
	
	<FORM action="" method="post">
	Ваше имя:<br>
	<input type="text" name="person">
	<br>
	Ваш e-mail:<br>
	<input type="text" name="email">
	<br>
	Вопрос администратору:<br>
	<textarea name="question" cols=40 rows=5></textarea>
	<br>
	<input type="submit" name="okbutton" value="OK">
	</FORM>

</body>
</html>