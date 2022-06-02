<?php
session_start();
if (isset($_SESSION['login']) && $_SESSION['login']!='admin')
{
    echo 'Тут важный контент обычных пользователей';
    echo '<a href = "unauth.php"> Выйти из аккаунта</a>';
}else {
    header ('Location: form.php');
    die;
}