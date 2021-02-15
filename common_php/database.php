<?php
session_start();

function database()
{
	$dbname = 'eshop';
	$options = array(
		PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
		PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
	);
	$connect = new PDO('mysql:host=localhost;dbname=' . $dbname, 'root', '', $options);
	return $connect;
}

function InsertUser($username, $password, $email, $number)
{
	$connect = database();
	$result = $connect->prepare('INSERT INTO users SET username=?, password=? , email=?, number=?');
	$result->bindValue(1, $username);
	$result->bindValue(2, md5($password));
	$result->bindValue(3, $email);
	$result->bindValue(4, $number);
	$result->execute();
	header('location:login.php?register=true');
}

function RegisterUser()
{
	if (isset($_POST['register_btn'])) {
		if (
			isset($_POST['username']) &&
			isset($_POST['email']) &&
			isset($_POST['password']) &&
			isset($_POST['repassword']) &&
			!empty($_POST['username']) &&
			!empty($_POST['email']) &&
			!empty($_POST['password']) &&
			!empty($_POST['repassword'])) {
			$connect = database();
			$result = $connect->prepare('SELECT * FROM users WHERE username=? OR email=?');
			$result->bindValue(1, $_POST['username']);
			$result->bindValue(2, $_POST['email']);
			$result->execute();
			$row = $result->fetchAll(PDO::FETCH_ASSOC);
			if (count($row) > 0)
				header('location:login.php?user=false');
			else {
				if ($_POST['password'] === $_POST['repassword']) {
					InsertUser($_POST['username'], $_POST['password'], $_POST['email'], $_POST['number']);
				} else
					header('location:login.php?password=false');
			}

		} else {
			header('location:login.php?input=false');
		}
	}

}

function LoginUser()
{
	if (isset($_POST['login_btn'])) {
		if (
			isset($_POST['login_username_email']) &&
			isset($_POST['login_password']) &&
			!empty($_POST['login_username_email']) &&
			!empty($_POST['login_password'])) {
			$connect = database();
			$result = $connect->prepare('SELECT * FROM users WHERE username=? OR email=? AND password=?');
			$result->bindValue(1, $_POST['login_username_email']);
			$result->bindValue(2, $_POST['login_username_email']);
			$result->bindValue(3, md5($_POST['login_password']));
			$result->execute();
			$row = $result->fetch(PDO::FETCH_ASSOC);
			if (empty($row))
				header('location:login.php?login-user=false');
			else {
				$_SESSION['user'] = $row['username'];
				$_SESSION['user_id'] = $row['id'];
				$_SESSION['user_is_superuser'] = $row['superuser'];
				$_SESSION['user_is_active'] = $row['active'];
				if(isset($_POST['forget']) && !empty($_POST['forget'])){
					setcookie('remind', $_SESSION['user'], time() + 60 * 60 * 24 * 2);
					setcookie('remind2', $_POST['login_password'], time() + 60 * 60 * 24 * 2);
				} else {
					setcookie('remind', '', time() - 60 * 60 * 24 * 2);
					setcookie('remind2', '', time() - 60 * 60 * 24 * 2);
				}
				header('location:login.php?login=true');
			}
		} else {
			header('location:login.php?login=false');
		}
	}

}

function ExitUser()
{
	if (isset($_GET['exituser'])) {
		unset($_SESSION['user']);
		header('location:login.php');
	}
}


?>