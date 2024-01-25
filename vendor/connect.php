<?php
$host = 'localhost';
$login = 'root';
$password = '';
$db = 'test';

$connect = mysqli_connect($host, $login, $password, $db);

if ($connect) {
    header('Location: ../');
} else {
    echo "Error connection to DataBase";
}