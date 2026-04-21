<?php

$mysql = mysqli_connect('localhost', 'root', '', 'aybolit');
$name = $_POST["login"];
$password = $_POST["password"];
$queryaboba = mysqli_query($mysql, "SELECT * FROM veterinar WHERE login = '".$name."' AND password = '".$password."'");
$fetish_abcoc = $queryaboba->fetch_assoc();
if ($fetish_abcoc != null){
    session_start();
    $password = $fetish_abcoc['password'];
    $login = $fetish_abcoc['login'];
    $_SESSION['password'] = $password;
    $_SESSION['login'] = $login;
    header("Location: profile.php");
}else{
    header("Location: 404.html");
}
?>