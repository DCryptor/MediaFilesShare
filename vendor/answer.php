<?php
session_start();
require_once('connect.php');

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$answer = $_POST['answer'];

$sql = "INSERT INTO `invites`(`firstname`, `lastname`, `answer`) VALUES ('$firstname','$lastname','$answer')";

if ($firstname != null && $lastname != null && $answer != null) {
    mysqli_query($connect, $sql);
    $_SESSION['msg'] = "Данные успешно отправлены";
    header('Location: ../');
} else {
    $_SESSION['msg'] = "Заполните все поля!";
    header('Location: ../');
}