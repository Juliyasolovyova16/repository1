<?php
	$login = filter_var(trim($_POST['login']),
	FILTER_SANITIZE_STRING);
	$name = filter_var(trim($_POST['name']),
	FILTER_SANITIZE_STRING);
	$pass = filter_var(trim($_POST['password']),
	FILTER_SANITIZE_STRING);

	if(mb_strlen($login) < 5 || mb_strlen($login) > 90) {
		echo "Недопустимая длина логина";
		exit();
	} else if(mb_strlen($name) < 3 || mb_strlen($name) > 50) {
		echo "Недопустимая длина имени";
		exit();
	} else if(mb_strlen($pass) < 8 || mb_strlen($pass) > 20) {
		echo "Недопустимая длина пароля (от 8 до 20 символов)";
		exit();
	}

	$pass = md5($pass."dgjjgb415645");

	$mysql = new mysqli('localhost', 'root', '', 'register-bg');
	$mysql->query("INSERT INTO `users` (`login`, `pass`, `name`) VALUES('$login', '$pass', '$name')");

	$mysql->close();

	header('Location: /site/signup.html');
	exit();
?>