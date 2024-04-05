<?php
	$login = filter_var(trim($_POST['login']),
	FILTER_SANITIZE_STRING);
	$pass = filter_var(trim($_POST['pass']),
	FILTER_SANITIZE_STRING);

	if(mb_strlen($login) < 5 || mb_strlen($login) > 90) {
		echo "ERROR404";
		exit();
	} else if(mb_strlen($pass) < 3 || mb_strlen($pass) > 20) {
		echo "ERROR404";
		exit();
	}

	$mysql = new mysqli('localhost','root','root','fish-inst');
	$mysql->query("INSERT INTO `users` (`login`, `pass`) 
		VALUES('$login', '$pass')");

	$mysql->close();
	header('hello')
?>