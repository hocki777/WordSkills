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
.F5{position:absolute;top:100px;left:5%;}
.F6{position:absolute;top:150px;;left:5%;}
.D3{position:relative;top:30px; left:15px;}
.D4{position:relative;top:45px;}
.D5{position:absolute;top:100px;left:55px;}
.D6{position:absolute;top:150px;;left:70px;}
.D7{position:absolute;top:100px;;left:0px;}
.D8{position:absolute;top:100px;;left:105px;}
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
<div class="F1"><h3>Авторизация пользователя</h3></div>
<div class="F2">
<form  action="user_panel.php"method="POST">
	<div class="D3">Логин: </div><div class="F3"><input type="text" name="login" /><br><br></div>
	<div class="D4">Пароль: </div><div class="F4"><input type="password" name="password_user"/><br><br></div>
	<div class="D7"><input type="submit" id="test" value="Войти" style="width:100px;"></div>
</form>	
<form action="register.php" method="POST">
<div class="D8"><input type="submit" value="Регистрация" style="width:150px;"></div>
</form>
</div>
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