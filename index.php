<?php
include("includes/header.php");
?>





<?php

$link = mysqli_connect("localhost", "root", "", "carshop");
$resul = mysqli_query($link,"SELECT * FROM `cars`");
mysqli_close($link);
$row = mysqli_fetch_array($resul);

?>




<?php
while ($row) {

?>

  <div class="container b">
    <div class="row e ">

      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
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
            حداکثر سرعت (km/h) : <span> <?php echo ($row["MaximumSpeed"]);  ?> </span>

          
          </dd>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div>        <img class="img-thumbnail m-2 p-1" src="<?php echo($row["imageurl"]) ?>" alt="">
        </div>
      </div>
    </div>
  </div>

<?php
  $row = mysqli_fetch_array($resul);
}
?>















<?php
include("includes/footer.php");
?>