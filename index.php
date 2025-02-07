<?php
include("includes/header.php")
?>




<?php

$link = mysqli_connect("localhost", "root", "", "carshop");
$resul = mysqli_query($link, "SELECT * FROM `cars` WHERE id=1");
mysqli_close($link);
$row = mysqli_fetch_array($resul);

?>


<?php
while ($row) {

?>

  <div class="container b">
    <div class="row e">

      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div id="a1">
          <dd>
            نام خودرو : <span> <?php echo ($row["CarName"]);  ?> </span>

            <br>
            حجم موتور : <span> <?php echo ($row["EngineVolume"]);  ?> </span>
            <br>

            کلاس بدنه : <span> <?php echo ($row["BodyClass"]);  ?> </span>
            <br>
            نوع موتور : <span> <?php echo ($row["EngineType"]);  ?> </span>
            <br>
            تعداد سیلندرها : <span> <?php echo ($row["NumberOfCylinders"]);  ?> </span>
            <br>
            نوع جعبه دنده : <span> <?php echo ($row["GearBoxType"]);  ?> </span>
            <br>
            مصرف سوخت ترکیبی : <span> <?php echo ($row["FuelConsumption"]);  ?> </span>
            <br>
            شتاب 0 تا 100 : <span> <?php echo ($row["Acceleration"]);  ?> </span>
            <br>
            حداکثر سرعت (km/h) : <span> <?php echo ($row["MaximumSpeed(km/h)"]);  ?> </span>

            <br>
            <br>
            <a href="bmw220i.php">اطلاعات بیشتر</a>
          </dd>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div><img class="imgsize img-fluid pad" src="images/220i گرن کوپه - 1K JPEG.jpg"></div>
      </div>
    </div>
  </div>

<?php
  $row = mysqli_fetch_array($resul);
}
?>


<!-- ----------------------------  car 2  -------------------------------- -->


<?php

$link = mysqli_connect("localhost", "root", "", "carshop");
$resul = mysqli_query($link, "SELECT * FROM `cars` WHERE id=2");
mysqli_close($link);
$row = mysqli_fetch_array($resul);

?>


<?php
while ($row) {

?>

  <div class="container b">
    <div class="row e">

      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div id="a1">
          <dd>
            نام خودرو : <span> <?php echo ($row["CarName"]);  ?> </span>

            <br>
            حجم موتور : <span> <?php echo ($row["EngineVolume"]);  ?> </span>
            <br>

            کلاس بدنه : <span> <?php echo ($row["BodyClass"]);  ?> </span>
            <br>
            نوع موتور : <span> <?php echo ($row["EngineType"]);  ?> </span>
            <br>
            تعداد سیلندرها : <span> <?php echo ($row["NumberOfCylinders"]);  ?> </span>
            <br>
            نوع جعبه دنده : <span> <?php echo ($row["GearBoxType"]);  ?> </span>
            <br>
            مصرف سوخت ترکیبی : <span> <?php echo ($row["FuelConsumption"]);  ?> </span>
            <br>
            شتاب 0 تا 100 : <span> <?php echo ($row["Acceleration"]);  ?> </span>
            <br>
            حداکثر سرعت (km/h) : <span> <?php echo ($row["MaximumSpeed(km/h)"]);  ?> </span>

            <br>
            <br>
            <a href="bmw220i.php">اطلاعات بیشتر</a>
          </dd>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div><img class="imgsize img-fluid pad" src="images/f10.jpg"></div>
      </div>
    </div>
  </div>

<?php
  $row = mysqli_fetch_array($resul);
}
?>



<!-- ----------------------------  car 3  -------------------------------- -->




<?php

$link = mysqli_connect("localhost", "root", "", "carshop");
$resul = mysqli_query($link, "SELECT * FROM `cars` WHERE id=3");
mysqli_close($link);
$row = mysqli_fetch_array($resul);

?>


<?php
while ($row) {

?>

  <div class="container b">
    <div class="row e">

      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div id="a1">
          <dd>
            نام خودرو : <span> <?php echo ($row["CarName"]);  ?> </span>

            <br>
            حجم موتور : <span> <?php echo ($row["EngineVolume"]);  ?> </span>
            <br>

            کلاس بدنه : <span> <?php echo ($row["BodyClass"]);  ?> </span>
            <br>
            نوع موتور : <span> <?php echo ($row["EngineType"]);  ?> </span>
            <br>
            تعداد سیلندرها : <span> <?php echo ($row["NumberOfCylinders"]);  ?> </span>
            <br>
            نوع جعبه دنده : <span> <?php echo ($row["GearBoxType"]);  ?> </span>
            <br>
            مصرف سوخت ترکیبی : <span> <?php echo ($row["FuelConsumption"]);  ?> </span>
            <br>
            شتاب 0 تا 100 : <span> <?php echo ($row["Acceleration"]);  ?> </span>
            <br>
            حداکثر سرعت (km/h) : <span> <?php echo ($row["MaximumSpeed(km/h)"]);  ?> </span>

            <br>
            <br>
            <a href="bmwx1.php">اطلاعات بیشتر</a>
          </dd>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div><img class="imgsize img-fluid pad" src="images/20ix1.png"></div>
      </div>
    </div>
  </div>

<?php
  $row = mysqli_fetch_array($resul);
}
?>





<!-- ----------------------------  car 4  -------------------------------- -->




<?php

$link = mysqli_connect("localhost", "root", "", "carshop");
$resul = mysqli_query($link, "SELECT * FROM `cars` WHERE id=4");
mysqli_close($link);
$row = mysqli_fetch_array($resul);

?>


<?php
while ($row) {

?>

  <div class="container b">
    <div class="row e">

      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div id="a1">
          <dd>
            نام خودرو : <span> <?php echo ($row["CarName"]);  ?> </span>

            <br>
            حجم موتور : <span> <?php echo ($row["EngineVolume"]);  ?> </span>
            <br>

            کلاس بدنه : <span> <?php echo ($row["BodyClass"]);  ?> </span>
            <br>
            نوع موتور : <span> <?php echo ($row["EngineType"]);  ?> </span>
            <br>
            تعداد سیلندرها : <span> <?php echo ($row["NumberOfCylinders"]);  ?> </span>
            <br>
            نوع جعبه دنده : <span> <?php echo ($row["GearBoxType"]);  ?> </span>
            <br>
            مصرف سوخت ترکیبی : <span> <?php echo ($row["FuelConsumption"]);  ?> </span>
            <br>
            شتاب 0 تا 100 : <span> <?php echo ($row["Acceleration"]);  ?> </span>
            <br>
            حداکثر سرعت (km/h) : <span> <?php echo ($row["MaximumSpeed(km/h)"]);  ?> </span>

            <br>
            <br>
            <a href="bmwi8.php">اطلاعات بیشتر</a>
          </dd>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div><img class="imgsize img-fluid pad" src="images/1bmwi8.jpg"></div>
      </div>
    </div>
  </div>

<?php
  $row = mysqli_fetch_array($resul);
}
?>

















<?php
include("includes/footer.php")
?>