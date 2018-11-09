<?php
	//Данный модуль возвращает в $_SESSION['autorized'] значение TRUE,
	//если авторизация пройдена

//Начинаем сессию 
 session_start();
	//Проверяем,  как запущен скрипт - обработчик? или как форма для авторизации?
	if(!isset($_POST['enter']))
	{
	//Выводим форму авторизации
	?>
	<form action=''>
        <table cellpadding="3">
            <tr>
                <td><label>Логин:</label></td>
                <td><input type="text" name="login" required></td>
            </tr>
            <tr>
                <td><label>Пароль:</label></td>
                <td><input type="password" name="password" required></td>
            </tr>
      
                <td align="center"><button type="submit"  name="do_login" class="btn btn-primary" >Вход</button>
                </td></tr>
        </table>
    </form>
	<?php
 	}
	//Если как обработчик, то пытаемся авторизовать пользователя
	else
	{
	//Проверяем, ввел ли пользователь имя и пароль
	if ($_POST['name']!='' and $_POST[ 'pass']!='')
	{
	//Защита от взлома
	$safe_name=mysql_escape_string($_POST['name']);
	$safe_pass=mysql_escape_string($_POST['pass']);
	//Преобразуем пароль в хеш
	$safe_pass=md5($safe_pass);
	//Подключаемся к MySQL и базе данных
	require_once('connect.php');
	//Формируем запрос
	$sql="SELECT name,pass,role FROM users WHERE name=' ".$safe_name." ' and pass=' ".$safe_pass." ' ";
	//Получаем результат запроса в переменную $result
	$result=mysql_query($sql);
	//Проверяем, есть ли такой пользователь
	if (!mysql_num_rows($result))
	//Если такого пользователя нет, то отказываем ему в доступе
	die("Неверный логин или пароль <а href='index.php'>Назад!</а>");
	//Иначе записываем факт авторизации в сессию
 	else
	{
	//Получаем результат запроса
	$line=mysql_fetch_row($result);
 	//Записываем факт авторизации в сессию
	$_SESSION ['autorized'] =true;
	//Сохраняем имя пользователя
	$_SESSION ['name'] =$_POST ['name'] ;
	//Сохраняем роль пользователя
	$_SESSION['role']=$line[2];
	//Выводим пользователю информацию, что он был авторизован
	echo "Авторизация прошла успешно!
 <а href=index.php>Вернуться  в форум</а>";
	}
	
	//Если пользователь не ввел данные
//	else
//	{
//	//Отказываем ему в доступе
//	die("Неправильный логин или пароль <а href='index.php'>Назад!</а>");
//	}
	}
	 }
	?> 

