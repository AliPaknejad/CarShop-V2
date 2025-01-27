
<?php 
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="stayle.css">
    <title>BMW</title>
  </head>
  <body>

    <header style="justify-content: center;">
      
    </header>



    <nav class="navbar navbar-expand-xl navbar-dark bg-dark">
        <div class="container">
          
          <a class="navbar-brand fs-2 fw-bold" href="#"><span text-danger>BMW</span><img id="imglogo" src="logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDark" aria-controls="navbarDark" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse show sa" id="navbarDark">
            <ul class="navbar-nav ms-auto mb-2 mb-xl-0 fs-5 ms-auto p-2 text-center ">
              <li class="nav-item me-3">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item me-3">
                <a class="nav-link" href="about.php">About</a>
              </li>
              <li class="nav-item me-3">
                <a class="nav-link" href="#">Contact</a>
              </li>
              <li class="nav-item me-3">
                <a class="nav-link" href="#">Call</a>
              </li>
              <li class="nav-item me-3">
                <a class="nav-link" href="#">Gallery</a>
              </li>
              <!-- <li class="nav-item me-3">
                <a class="nav-link" href="login.html">Login/Register</a>
              </li> -->
              <li class="nav-item me-3">
              <?php 
                  if(isset($_SESSION["Login"]) && $_SESSION["Login"]==true){
                   ?>
                      <a class="nav-link" href="logout.php">Logout</a>
                   <?php
                  }else{
                    ?>
                    <a class="nav-link" href="register.html">Login</a>
                   <?php
                  }
                  ?>
              </li>
            </ul>
           
          </div>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light" type="submit">Search</button>
          </form>
        </div>
      </nav>


    <main>
        <section>
            <!-- <img src="test.jpg" alt=""> -->
        </section>
     