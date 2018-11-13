<?php
require_once 'connect.php';
session_start();
if (!isset($_SESSION['auth'])){
    echo <<< html
<center><a href='login.php'>Для доступа к форуму вам необходимо авторизоваться!</а><center><br>
html;
}
else{
    echo "<br><h5>Вы вошли на сайт как, <u>".$_SESSION['name']."</u>!</h5>";
    echo "<p align='left'><a href='logout.php'>Выйти</a></p>";
}
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="yandex-verification" content="2393ae162ee5c086" />
    <title>Title</title>
    <style>
        @import url("style/index.css");
        @import url("style/menu.css");

        p {
            margin-right: 5%; /* Отступ справа */
            margin-left: 200px;
            font-size: 14pt;
        }
		
		.fixed-box {
    height: 60px;
}
.fixed-div {
    height: 60px;
	margin-left: 200px;
}
	.fix {
    height: px;
		}
.fixban {
    height: px;
	margin-left: 200px;
}
.fixed {
    position: fixed;
    z-index: 9999;
    top: 0;
}
    </style>

    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-
9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
<body>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-
A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
<script src="banner/scroll.js"></script>
<h1 align="center"> Информация о кафедре</h1>
<hr>
		<div class="fixed-box">
    <div class="fixed-div">
		<a href="https://priem.mirea.ru/"><img src="banner/banner1.jpg"></a>
    </div>
</div>
<div id="menu">
    <center><a>МЕНЮ</a></center>
    <li><a href="info.html">Информация о кафедре</a> <br></li>
    <li><a href="docum.html">Нормативные документы</a> <br></li>
    <li><a href="stats.html">Статистика</a> <br></li>
    <li><a href="register.html">Добавление студента</a> <br></li>
    <li><a href="up/upload.php">Учёт документов </a> <br></li>
    <li><a href="PersonSearch.html">Поиск студента</a> <br></li>
    <li><a href="index.html">Выход</a></a> <br></li>
</div>


<p>Наименование кафедры Инструментального и прикладного программного обеспечения.
</p>
<p>Год создания кафедры 2016 год.
</p>
<p>Наименование института, в состав которого входит кафедра: Институт информационных технологий</p>
<p>
<p>Кафедра выполняет все виды учебной и учебно-методической работы по всем формам обучения (очная, очно-заочная и заочная), предусмотренные соответствующими учебными планами и образовательными программами.</p>
<p>Главная цель Кафедры  – подготовка востребованных на рынке труда высококвалифицированных кадров, владеющих необходимыми компетенциями для самостоятельной научно-исследовательской и проектно-конструкторской деятельности, на базе основных образовательных программ среднего, высшего и дополнительного профессионального образования, профессионально-ориентирующих и других программ довузовской подготовки по профилю образовательной деятельности Кафедры.</p>
<p>В области учебной, методической и воспитательной работы основными задачами Кафедры являются:</p>
<p>- подготовка специалистов различных уровней образования по профилю образовательной деятельности Кафедры, обладающих глубокими профессиональными знаниями и высоким уровнем общей культуры;</p>
<p>- удовлетворение потребностей личности в профессиональном, интеллектуальном, культурном и нравственном развитии на основе получения высшего и дополнительного профессионального образования, а также комплексного процесса обучения и научно-исследовательской деятельности;</p>
<p>- удовлетворение материальных, духовных и интеллектуальных потребностей работников Кафедры;</p>
<p>- планирование, организация и постоянное совершенствование инновационного учебного процесса и учебно-методической деятельности Кафедры; -разработка и совершенствование учебно-методического обеспечения учебного процесса по направлению деятельности Кафедры в соответствии с требованиями федеральных государственных образовательных стандартов и локальных нормативных актов Университета;</p>
<p>- ведение учебно-учетной документации в соответствии с номенклатурой дел;</p>
<p>- планирование, организация и проведение воспитательной работы со студентами;</p>
<p>- организация и проведение агитационной и профориентационной работы с учащимися общеобразовательных учреждений;</p>
<p>- реализация информационного обеспечения всех сторон деятельности Кафедры;</p>
<p>- участие в воспитательной работе, направленной на формирование у обучающихся гражданской позиции, сохранение и приумножение нравственных и культурных ценностей общества.</p>
<div class="fix">
    <div class="fixban">
		<img src="banner/design.gif"></a>
    </div>
</div>

<br></body>
</html>

