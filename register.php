<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

<?php 
if(isset($_SESSION["state_login"]) && $_SESSION["state_Login"] == true){
?>
<script type="text/javascript">
    location.replace("index.php");
</script>
<?php
}
?>






        <div class="wrapper">
        <form action="register_action.php" method="Post">
            <h1>Register</h1>
            <div class="input-box">
                <input type="text" placeholder="Your Name" name="name" required>
                <i class='bx '></i>
            </div>

            <div class="input-box">
                <input type="text" placeholder="UserName" name="user" required>
                <i class='bx bxs-user'></i>
            </div>


            <div class="input-box">
                <input type="password" placeholder="Password" name="pass"  required>
                <i class='bx bxs-lock-alt' ></i>
            </div>
            
            <div class="input-box">
                <input type="text" placeholder="Gmail" name="gmail" required>
                <i class='bx '></i>
            </div>
            

            

            <button type="submit" class="btn">Register</button>

            <div class="register-link">
                <p>Do you have an account? <a href="login.php">Login</a></p>
                
            </div>
        </form>

    </div>
    
</body>
</html>