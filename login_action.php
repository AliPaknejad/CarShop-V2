<?php 
  include("includes/header.php")
?>

<?php 

// $name=$_POST["name"];
$user=$_POST["user"];
$pass=$_POST["pass"];
// $gmail=$_POST["gmail"];



$c=mysqli_connect("localhost","root","","CarShop");
$find=mysqli_query($c,"SELECT * FROM `Users` WHERE UserName='$user' AND PassWord='$pass'");
$row=mysqli_fetch_array($find);
if($row){
    echo("Welcome to your website :)");
}else{
    echo("The entered information is not correct !!");
}

mysqli_close($c);

?>

<?php 
  include("includes/footer.php")
?>