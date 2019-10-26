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
.D7{position:relative;top:10px;}
.D8{position:relative;left:105px;}
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
<div class="F1"><h3>Личный кабинет пользователя</h3><br></br></div>
<div class="F2">
<?php
$host = 'localhost'; // адрес сервера 
$database = 'users'; // имя базы данных
$user = 'Administrator'; // имя пользователя
$password = ''; // пароль
$login='';
$password_user='';
$email='';
$name='';
$Role='';
$id='';
$login1='';
$password_user1='';
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
			if(($login=="")||($password_user==""))
			{echo("<h3>Вы ввели неправильный логин или пароль!</h3>");}
		else{
$query = "select * from name where login='$login' and password='$password_user'";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
		if($result) 
    while ($row = mysqli_fetch_assoc($result)) {
		
		$id=$row['id'];
		$login1=$row['login'];
		$password_user1=$row['password'];
				
	}
	if(($login1!=$login)&&($password_user1!=$password_user))
	{echo("<h3>Вы ввели неправильный логин или пароль!</h3>");}
else{
		$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
		if($result) 
    while ($row = mysqli_fetch_assoc($result)) {
		echo('Номер пользователя: ');
		echo $row['id'];
		echo('<br>');
		echo('Логин пользователя: ');
			echo $row['login'];
			echo('<br>');
			echo('Пароль пользователя: ');
				echo $row['password'];
				echo('<br>');
				echo('Почта пользователя: ');
				echo $row['email'];
				echo('<br>');
				echo('Имя пользователя: ');
				echo $row['name'];
				echo('<br>');
				
			
$query = "select * from images where id_user='$id';";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
		if($result) 
    while ($row = mysqli_fetch_assoc($result)) {
	$image=$row['image'];	
	$id_image=$row['id'];
	echo("<img src='$image' style='width:300px;height:300px'></img>");
				
	}
	}
		}
		}
?>
<form action="panel.php" method="POST">
	<div class="D7"><input type="submit" id="test" value="Выйти" style="width:100px;"></div>
</form>	
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