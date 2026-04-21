<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Style3.css"></link>
</head>
<body>
    <div class="header">Скорая помощь</div>
    <?php
    session_start();
    try{
        if(!isset($_SESSION["login"])){
            throw new Exception("No session");
        }
    }catch(Exception $e){
        header("Location: login.php");
    }
    ?>
    <form action="amogus.php" method="post">
        <label for="n">Имя: </label>
        <input type="text" name="first_name" require id="n" style="border: 2px inset black; border-radius: 5px;"></input>
        <label for="f">Фамилия: </label>
        <input type="text" name="last_name" require id="f" style="border: 2px inset black; border-radius: 5px;"></input>
        <label for="r">Отчество: </label>
        <input type="text" name="super_last_name" require id="r" style="border: 2px inset black; border-radius: 5px;"></input>
        <label for="p">Телефон: </label>
        <input type="text" name="phone" require id="p" style="border: 2px inset black; border-radius: 5px;"></input>
        <label for="k">Статус: </label>
        <input type="text" name="statusss" require id="k" style="border: 2px inset black; border-radius: 5px;"></input>
        <label for="t">Дата: </label>
        <input type="date" name="dateee" require id="t" style="border: 2px inset black; border-radius: 5px;"></input>
        <input type="submit" style="border: 2px solid black;border-radius: 6%;background-color: #f7f7f7;color: cadetblue;"></input>
        <button style="border: 2px solid black;border-radius: 6%;background-color: #f7f7f7;color: cadetblue;"><a href="profile.php">Назад</a></button>
        </form>
        <div class="container">
       <div class="podval">NxWare 2020-2077 гг. Никакие права не защищены.</div>
        </div>
</body>
</html>