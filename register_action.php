<?php 
  include("includes/header.php")
?>
<?php 

$name=$_POST["name"];
$user=$_POST["user"];
$pass=$_POST["pass"];
$gmail=$_POST["gmail"];



$c=mysqli_connect("localhost","root","","CarShop");
$result=mysqli_query($c,"INSERT INTO `Users` (`Name`, `UserName`, `PassWord`, `Gmail`) VALUES ('$name', '$user', '$pass', '$gmail')");

if($result==true){
    ?>
    <div class="alert alert-success" role="alert">
        <p class="pc"> ثبت نام شما با موفقیت انجام گردید </p>
    </div>
    <?php
}else{
    ?>
    <div class="alert alert-danger" role="alert">
        <p class="pc">ثبت نام شما با خطا مواجه شد</p>
    </div>
    <?php
}

mysqli_close($c);



?>

<?php 
  include("includes/footer.php")
?>