<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="Style2.css"></link>
<head>
    <script src="write.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="header"></div>
    <div class="tabll">
    <table id="tab" style="border: 2px solid black; padding: 5px;">
        <thead>
        <tr>
            <th>ID</th>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Отчество</th>
            <th>Номер телефона</th>
            <th>Статус</th>
            <th>Дата</th>
        </tr>
        </thead>
        <tbody>

    <?php


session_start();
try{      
    if(!isset($_SESSION["login"])){
        throw new Exception("No session");
    }
}catch(Exception $e){
    header("Location: login.php");
}
    

    $mysql = mysqli_connect('localhost', 'root', '', 'aybolit');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $last_name = $_POST["Last_name"];
    $first_name = $_POST["First_name"];
    $queryaboba = mysqli_query($mysql, "SELECT * FROM aboba WHERE last_name = '".$last_name."' AND first_name = '".$first_name."'");
}else{
    $queryaboba = mysqli_query($mysql, "SELECT * FROM aboba");
}

try{
    while($fetish_abcoc = $queryaboba->fetch_assoc()){?>
            <tr>
        <td>   <? echo $fetish_abcoc['id']; ?></td>
        <td>    <? echo $fetish_abcoc['first_name']; ?></td>
        <td>   <? echo $fetish_abcoc['last_name']; ?></td>
        <td>   <? echo $fetish_abcoc['super_last_name']; ?></td>
        <td>   <? echo $fetish_abcoc['phone']; ?></td>
        <td>   <? echo $fetish_abcoc['statusss']; ?></td>
        <td>   <? echo $fetish_abcoc['dateee']; ?></td>
            <tr>
        <?} echo "<br><br>";
}catch(Exception $e){
    echo "Список пуст!"."<br>";
}
?>
            </tbody>
        </table>
    </div>
    <br>
    <br>
    <form action="" method="post">
    <label for="n">Фамилия: </label>
    <input type="text" name="Last_name" required id="n"></input>
    <label for="p">Имя: </label>
    <input type="text" name="First_name" required id="p"></input>
    <input type="submit" value="Поиск" style="border: 2px solid black;border-radius: 6%;background-color: #f7f7f7;color: cadetblue;"></input>
    <button><a href="" style="border: 2px solid black;border-radius: 6%;background-color: #f7f7f7;color: cadetblue;">Очистить фильтр</a></button>
    <input value="Печать" onclick="printTable()" type="button" style="border: 2px solid black;border-radius: 6%;background-color: #f7f7f7;color: cadetblue;"></input>
    <button><a href="profile.php" style="border: 2px solid black;border-radius: 6%;background-color: #f7f7f7;color: cadetblue;">Назад</a></button>
    </form>
    <br>
    <br>
    
    <div class="container">
    <div class="podval">NxWare 2020-2077 гг.Никакие права не защищены.</div>
    </div>
</body>
</html>
