<html>
<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css" >
<meta charset="utf-8"/>
<title>Профиль пользователя</title>
<style>
h3{font-size:24px;font-family:sans-serif;}
.F1{position:relative;}
.F2{position:relative;}
.F3{position:absolute;left:80px; top:25px;}
.F4{position:absolute;top:60px;left:80px;}
.F5{position:absolute;top:95px;left:80px;}
.F6{position:absolute;top:130px;;left:80px;}
.D3{position:relative;top:30px; left:15px;}
.D4{position:relative;top:45px;}
.D5{position:relative;top:60px; left:15px;}
.D6{position:relative;top:75px;;left:25px;}
.D7{position:absolute;top:180px;;left:0px;}
.D8{position:absolute;top:180px;;left:130px;}
form{font-size:20px;font-family:sans-serif;}
input[type="text"]{background-color:#0dbfe5; border:2px solid black;font-family:Arial; height:30px; font-size:16px;}
input[type="password"]{background-color:#0dbfe5; border:2px solid black;font-family:Arial; height:30px; font-size:16px;}
input[type="submit"]{font-family:Arial; height:30px; font-size:16px;}
</style>
</head>
<body>
<!-- Хэдер-->
<header class="header">
<div id="headerInner">
<nav class="topMenuRight">
<ul>
<li><a href="index.html">Главная</a></li>
<li><a href="http://localhost/panel.php">Профиль</a></li>
<li><a href="#">О нас</a></li>
<div class="logo">
<a href="index.html"><img src="images/logo.png" alt="Фотосервис"/></a>
</div>
</div>
<section id="wrapper">
<div id="middle">
<div id="content">
<form action="panel.php" method="POST"><div class="F2">
<?php
$host = 'localhost'; // адрес сервера 
$database = 'users'; // имя базы данных
$user = 'Administrator'; // имя пользователя
$password = ''; // пароль
$login='';
$password_user='';
$email='';
$name='';
$link = mysqli_connect($host, $user, $password, $database) 

    or die("Ошибка " . mysqli_error($link));
	if(isset($_POST['login']))
				$login = $_POST['login'];
			if(isset($_POST['password_user']))
				$password_user = $_POST['password_user'];
				if(isset($_POST['email']))
				$email = $_POST['email'];
				if(isset($_POST['name']))
				$name = $_POST['name'];
			if(($login=="")||($name=="")||($password_user=="")||($email==""))
			{echo("<h3>Заполните все поля!</h3>");}
		else{
$query = "insert into name(id,login,password,email,name) values('','$login','$password_user','$email','$name')";
		$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
		echo("<h3>Вы успешно зарегистрировались!<br>Ваш логин: $login <br> Ваш пароль: $password_user <br>Ваш Email: $email <br> Ваше имя: $name</h3>");}
?>
<div class="D7"><input type="submit" value="Личный кабинет" style="width:200px;"></div>
</div></div>
<div id="colLeft">
</div>
<aside id="colRight">
</aside>
</div>
</div>
</section>
<!--Футер-->
<footer id="footer">
<div id="footerInner">
</div>
</footer>
</body>
</html>