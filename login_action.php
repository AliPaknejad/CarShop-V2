<?php 
  include("includes/header.php")
?>

<?php 

// $name=$_POST["name"];
$user=$_POST["user"];
$pass=$_POST["pass"];

// $gmail=$_POST["gmail"];



$link=mysqli_connect("localhost","root","","CarShop");
$result=mysqli_query($link,"SELECT * FROM `Users` WHERE UserName='$user' AND PassWord='$pass'");
mysqli_close($link);
$row=mysqli_fetch_array($result);
if($row==true){
    $_SESSION["state_login"]=true;
    $_SESSION["name"]=$row["Name"];

    if($row["admin"]==0)
      {
        $_SESSION["user_type"]="public";
      }
    else if($row["admin"]==1)
      {
        $_SESSION["user_type"]="admin";
      }

    ?>
   
    <div class="alert alert-success" role="alert">
        <p class="pc"> Welcome to your web </p>
    </div>
    
      <script type="text/javascript">
        location.replace("index.php")
      </script>

    <?php
}else{

  ?>
  <div class="alert alert-danger" role="alert">
      <p class="pc">!! The entered information is not correct </p>
  </div>
  <?php
   
}



?>

<?php 
  include("includes/footer.php")
?>