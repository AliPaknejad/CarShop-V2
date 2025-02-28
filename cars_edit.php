<?php
include("includes/header.php");
?>
<?php

$id=$_GET["id"];
$link=mysqli_connect("localhost","root","","carshop");
$result=mysqli_query($link,"SELECT * FROM `cars` WHERE id=$id");
mysqli_close($link);
$row=mysqli_fetch_array($result);
$CarName="";
$EngineVolume="";
$BodyClass="";
$EngineType="";
$NumberOfCylinders="";
$GearBoxType="";
$FuelConsumption="";
$Acceleration="";
$MaximumSpeed="";
$imageurl="";

if($row){
    $CarName=$row["CarName"];
    $EngineVolume=$row["EngineVolume"];
    $BodyClass=$row["BodyClass"];
    $EngineType=$row["EngineType"];
    $NumberOfCylinders=$row["NumberOfCylinders"];
    $GearBoxType=$row["GearBoxType"];
    $FuelConsumption=$row["FuelConsumption"];
    $Acceleration=$row["Acceleration"];
    $MaximumSpeed=$row["MaximumSpeed"];
    $imageurl=$row["imageurl"];
   
}
?>

<div class="row">
    <p class="col">  تغیرات را اعمال نمایید </p>
</div>
<form action="cars_edit_action.php" method="post" enctype="multipart/form-data" class="row m-2">
  
    <input type="text" class="col-12 col-md card m-1" 
    name="id" placeholder="id" hidden value="<?php echo($id); ?>">

    <input type="text" class="col-12 col-md card m-1" 
    name="CarName" placeholder="CarName" value="<?php echo($CarName); ?>">

    <input type="text" class="col-12 col-md card m-1" 
    name="EngineVolume" placeholder="EngineVolume" value="<?php echo($EngineVolume); ?>">
    
    <input type="text" class="col-12 col-md card m-1" 
    name="BodyClass" placeholder="BodyClass" value="<?php echo($BodyClass); ?>">

    <input type="text" class="col-12 col-md card m-1" 
    name="EngineType" placeholder="EngineType" value="<?php echo($EngineType); ?>">

    <input type="text" class="col-12 col-md card m-1" 
    name="NumberOfCylinders" placeholder="NumberOfCylinders" value="<?php echo($NumberOfCylinders); ?>">

    <input type="text" class="col-12 col-md card m-1" 
    name="GearBoxType" placeholder="GearBoxType" value="<?php echo($GearBoxType); ?>">

    <input type="text" class="col-12 col-md card m-1" 
    name="FuelConsumption" placeholder="FuelConsumption" value="<?php echo($FuelConsumption); ?>">

    <input type="text" class="col-12 col-md card m-1" 
    name="Acceleration" placeholder="Acceleration" value="<?php echo($Acceleration); ?>">

    <input type="text" class="col-12 col-md card m-1" 
    name="MaximumSpeed" placeholder="MaximumSpeed" value="<?php echo($MaximumSpeed); ?>">


    <input type="file" class="col-12 col-md card m-1" 
    name="image" value="<?php echo($imageurl); ?>">

    <input type="submit" class="col-12 col-md card m-1" 
    value="ذخیره">

</form>








<?php
include("includes/footer.php");
?>