<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// определите переменные и задайте пустые значения
$nameErr = $smsErr = "";
$name = $email = $gender = $comment = $website = "";
$genErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Необходимо указать номер";
  } else {
    $name = test_input($_POST["name"]);
  }

	  if (empty($_POST["comment"])) {
    $smsErr = "Необходимо ввести сообщение";
  } else {
    $comment = test_input($_POST["name"]);
  }
	
//  if (empty($_POST["comment"])) {
//    $comment = "";
//  } else {
//    $comment = test_input($_POST["comment"]);
//  }


	
  if (empty($nameErr) && empty($smsErr)) {
	  $genErr = "Сообщение успешно отправлено!";
  }
}

	
	
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
  <table border=0 align=center>
<tr>
	<h2><center>Отправка SMS сообщения:</center></h2>
	  </tr>
	  <tr>
		  <p><center><span class="error">* Обязательные поля</span></center></p>
	  </tr>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
	<tr>
		<td>
	Оператор 
		</td>
		<td> 
			<select name='operator'>
            <option value='beeline'>Билайн</option>
            <option value='mega'>Мегафон</option>
            <option value='mts'>МТС</option>
            </select>
		</td>
	</tr>
	<tr>
		<td>
			Номер:
		</td> 
		<td> 
			<input type="text" name="name">
		</td>
		<td>
  			<span class="error">* <?php echo $nameErr;?></span>
		</td>
	</tr>
  <tr>
	  <td>
  Сообщение:
	 </td> 
	  <td>
		  <textarea name="comment" rows="5" cols="40"></textarea>
		  </td>
	  <td>
  <span class="error">* <?php echo $smsErr;?></span>
		</td>
	</tr>
	<tr>
		<td>
  <input type="submit" name="submit" value="Отправить">  
		</td>
	</tr>
<tr>
	<center>
<?php
//echo "<h2>Ваш ввод:</h2>";
//echo $name;
//echo "<br>";
//echo $email;
//echo "<br>";
//echo $website;
//echo "<br>";
//echo $comment;
//echo "<br>";
//echo $gender;
echo $genErr;
?>
	</center>
	</tr>
	</table>
	</form>

</body>
</html>
