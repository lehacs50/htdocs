<?php
$name = filter_var(trim($_POST['name']),
FILTER_SANITIZE_STRING);
$login = filter_var(trim($_POST['login']),
FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),
FILTER_SANITIZE_STRING);
if(mb_strlen($name) < 1 || mb_strlen($name) > 16) {
  echo "Недопустимая длина имени";
  exit();
}else if(mb_strlen($login) < 5 || mb_strlen($name) > 100) {
echo "Недопустимая длина логина";
exit();
}else if(mb_strlen($pass) < 1 || mb_strlen($pass) > 32) {
  echo "Недопустимая длина пароля";
exit();
}
$mysql = new mysqli('localhost', 'root', 'root', 'register');
$mysql->query("INSERT INTO `register-db` (`name`, `login`, `pass`)
VALUES('$name','$login','$pass')");

$mysql->close();
?>
