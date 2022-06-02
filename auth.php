<?php
include('db.php');

$login = $_REQUEST['login'];
$pass = $_REQUEST['pass'];

$query = "SELECT user_id FROM users WHERE login='$login' AND pass='$pass'AND role='1'";

$role = "SELECT role FROM users WHERE login='$login' AND pass='$pass'";

$result = mysqli_query($link, $query);

$rez2 = mysqli_query($link, $role);

// if (mysqli_num_rows($result) != 0){
//     session_start();
//     $_SESSION['login'] = $login;
//     echo 'Вы авторизованы';
//     echo '<a href = "admin.php">Перейти в админку</a>';
// } else{
//  header('Location: form.php');
//  die;
// }

if (mysqli_num_rows($result) == 1){
    session_start();
    $_SESSION['login'] = $login;
    echo 'Вы авторизованы';
    echo '<a href = "admin.php">Перейти в админку</a>';
} else{
    session_start();
    $_SESSION['login'] = $login;
    echo 'Вы авторизованы';
    echo '<a href = "kek.php">Перейти в кабинет обычного пользователя</a>';
}

