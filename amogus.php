<?php
$mysql = mysqli_connect('localhost', 'root', '', 'aybolit');
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$super_last_name = $_POST["super_last_name"];
$phone = $_POST["phone"];
$statusss = $_POST["statusss"];
$dateee = $_POST["dateee"];

mysqli_query($mysql, "INSERT INTO aboba (first_name,last_name,super_last_name,phone,statusss, dateee) VALUES ('$first_name','$last_name','$super_last_name',
'$phone','$statusss','$dateee');");
header("Location: profile.php");
?>