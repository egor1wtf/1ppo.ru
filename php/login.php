<?php
session_start();
include 'connect.php';
echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>';
<style>
        @import url("style/index.css");
        .centerv{
            width: 25%; /* Ширина элемента в пикселах */
            padding: 10px; /* Поля вокруг текста */
            margin: 5% 37% ; /* Выравниваем по центру */
            background: rgba(128, 136, 123, 0.48); /* Цвет фона */
        }
    </style>
<h1 align="center">Авторизация</h1>

	<div class="centerv">
    <form action="login.php">
        <table cellpadding="3">
            <tr>
                <td><label>Логин:</label></td>
                <td><input type="text" name="login" required></td>
            </tr>
            <tr>
                <td><label>Пароль:</label></td>
                <td><input type="password" name="password" required></td>
            </tr>
            <tr><td align="center"><button class="btn btn-primary" onclick="location.href='registration.html'" >Регистрация</button>
                <td align="center"><button type="submit"  name="do_login" class="btn btn-primary" >Вход</button>
                </td></tr>
        </table>
    </form>
</div>

if(isset($_GET['login'])) {
    $login = $_GET['login'];
    $password = md5($_GET['password']);

    $sql = "SELECT login, password FROM register WHERE login = '$login' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        if ($row = $result->fetch_assoc()) {
            $_SESSION['auth'] = true;
            $_SESSION['name'] = $login;
//            $_SESSION['role'] = $row['role'];
        <script>
        alert("Вы вошли как $login");
       window.location = "index.php"
        </script>
html;
        }
    }
    else{
      
        <script>
        alert("Пользователь не найден!");
        </script>
    }
}
