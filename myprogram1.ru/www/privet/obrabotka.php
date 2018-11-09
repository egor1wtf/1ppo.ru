<?php
	//Проверяем, был ли скрипт вызван как обработчик формы
	if (isset($_POST['okbutton']))
	{
	//Куда будем отправлять письмо
	$komu="LittleBuddan@vr-online.ru";
	//Тема письма
	$tema="Bonpoc от ".$_POST['person']." ".$_POST['email'];
	//Само письмо
	$text_pisma=$_POST['question'];

	//Отправляем письмо
	mail($komu,$tema,$text_pisma);
	
	echo "Уважаемый ".$_POST['person']."! Ваш вопрос был отправлен 16	администратору";
	echo "<br><a href=backform.php>Назад</a>";
	}
	?>
