<?php
session_start();
if (isset($_SESSION['login']))
{
    echo 'Тут важный контент админки';
    echo '<a href = "unauth.php"> Выйти из аккаунта</a>';
}else {
    header ('Location: form.php');
    die;
}