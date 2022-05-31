<?php
$dsn = "mysql:host=localhost;charset=utf8;dbname=Questionnaire_member";
$pdo = new PDO($dsn, "root", "root");
$account = $_POST['account'];
$sql = "insert into `users` (`account`,`pwd`,`birthday`,`clue`,`email`) 
        values              ('{$_POST[`account`]}','{$_POST["pwd"]}','{$_POST["birthday"]}','{$_POST["clue"]}','{$_POST["email"]}')";
$pdo->exec($sql);
header("location:login.php");
?>