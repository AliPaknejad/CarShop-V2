<?php 
  include("includes/header.php")
?>

<?php
    unset($_SESSION["state_login"]);  
?>
<div class="alert alert-primary" role="alert">
  <p class="pc">شما با موفیت از حسابتان خارج شدید</p>
</div>

<script type="text/javascript">
  location.replace("index.php");

</script>

<?php
  include("includes/footer.php")
?>