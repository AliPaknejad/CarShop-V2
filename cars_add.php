<?php
include("includes/header.php");
?>



<div class="row">
    <p class="col"> اطلاعات خودرو جدید را وارد کنید </p>
</div>
<form action="cars_add_action.php" method="post" enctype="multipart/form-data" class="row m-2">
   

    <input type="text" class="col-12 col-md card m-1" 
    name="CarName" placeholder="CarName">

    <input type="text" class="col-12 col-md card m-1" 
    name="EngineVolume" placeholder="EngineVolume ">

    <input type="text" class="col-12 col-md card m-1" 
    name="BodyClass" placeholder=" BodyClass">

    <input type="text" class="col-12 col-md card m-1" 
    name="EngineType" placeholder="EngineType ">

    <input type="text" class="col-12 col-md card m-1" 
    name="NumberOfCylinders" placeholder="NumberOfCylinders ">

    <input type="text" class="col-12 col-md card m-1" 
    name="GearBoxType" placeholder="GearBoxType ">

    <input type="text" class="col-12 col-md card m-1" 
    name="FuelConsumption" placeholder="FuelConsumption">

    <input type="text" class="col-12 col-md card m-1" 
    name="Acceleration" placeholder="Acceleration ">

    <input type="text" class="col-12 col-md card m-1" 
    name="MaximumSpeed" placeholder="MaximumSpeed">

    <input type="file" class="col-12 col-md card m-1" 
    name="image">

    <input type="submit" class="col-12 col-md card m-1" 
    value="Submit">

</form>





<?php
include("includes/footer.php");
?>
