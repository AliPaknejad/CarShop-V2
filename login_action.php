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
    $_SESSION["Login"]=true;
    ?>
    <div class="alert alert-success" role="alert">
        <p class="pc"> Welcome to your web </p>
    </div>
    <?php
}else{

  ?>
  <div class="alert alert-danger" role="alert">
      <p class="pc">!! The entered information is not correct </p>
  </div>
  <?php
   
}

mysqli_close($c);

?>

<?php 
  include("includes/footer.php")
?>