<?
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="Style.css"></link>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <?php
    try{      
        if(!isset($_SESSION["login"])){
            throw new Exception("No session");
        }
    }catch(Exception $e){
        
    }

    
    ?>
    <div class="header"></div>
    <div class="">
    <form action="de_bill.php" method="post" class="form">
        <h1>Авторизация</h1>
        <br>
        <label for="n">Ваш логин</label><br>
        <input type="text" name="login" required id="n" ></input><br>
        <label for="p">Ваш пароль </label><br>
        <input type="password" name="password" required id="p"></input><br><br>
        <input type="submit"></input>
    </form>
    <div class="container">
    <div class="podval">NxWare 2020-2077 гг. Никакие права не защищены.</div>
    </div>
</body>
</html>

