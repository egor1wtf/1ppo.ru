<html>
<head>
<title>Защищённый вариант</title>
</head>
<body>
	

<?php
	if (isset($_POST["enter_system"]))
{
	echo  "Привет, ".htmlspecialchars($_POST['name_of_user']."!"); }
?>

</body>
</html>