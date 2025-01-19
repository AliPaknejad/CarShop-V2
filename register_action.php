<?php 

$name=$_POST["name"];
$user=$_POST["user"];
$pass=$_POST["pass"];
$gmail=$_POST["gmail"];



$c=mysqli_connect("localhost","root","","CarShop");
mysqli_query($c,"INSERT INTO `Users` (`Name`, `UserName`, `PassWord`, `Gmail`) VALUES ('$name', '$user', '$pass', '$gmail')");
mysqli_close($c);

echo("حساب شما با موفقیت ایجاد گردید");
?>
