<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="Style.css"></link>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="header">Скорая помощь</div>
    <?php
    try{      
        if(!isset($_SESSION["login"])){
            throw new Exception("No session");
        }
    }catch(Exception $e){
        header("Location: login.php");
    }
    $mysql = mysqli_connect('localhost', 'root', '', 'aybolit');
    $name = $_SESSION['login'];
    $password = $_SESSION['password'];
    $queryaboba = mysqli_query($mysql, "SELECT * FROM veterinar WHERE login = '".$name."' AND password = '".$password."'");
    $fetish_abcoc = $queryaboba->fetch_assoc();
    echo "Пользователь: ".$fetish_abcoc["first_name"]." ".$fetish_abcoc["last_name"];
    ?>
    <br><br>
    <a href="aboba.php" style="color: black; border: 3px solid purple;">Список заявок</a><br><br>
    <a href="pre_amogus.php" style="color: black; border: 3px solid purple;">Записать</a><br><br>
    <a href="logout.php" style="color: black; border: 3px solid purple;">Выпилиться</a><br><br>
    <a href="index.php" style="color: black; border: 3px solid purple;">Главная страница</a>
    <div class="container">
    <div class="podval">NxWare 2020-2077 гг.Никакие права не защищены.</div>
    </div>
</body>
</html>