<?php
include("includes/header.php");
?>
<?php

$CarName=$_POST["CarName"];
$EngineVolume=$_POST["EngineVolume"];
$BodyClass=$_POST["BodyClass"];
$EngineType=$_POST["EngineType"];
$NumberOfCylinders=$_POST["NumberOfCylinders"];
$GearBoxType=$_POST["GearBoxType"];
$FuelConsumption=$_POST["FuelConsumption"];
$Acceleration=$_POST["Acceleration"];
$MaximumSpeed=$_POST["MaximumSpeed"];
$id=$_POST["id"];
$image=$_FILES["image"]["name"];
$imageurl="images/".$image;

move_uploaded_file($_FILES["image"]["tmp_name"],$imageurl);

$link=mysqli_connect("localhost","root","","carshop");
$result=mysqli_query($link,"UPDATE `cars` SET `CarName`='$CarName',`EngineVolume`='$EngineVolume',`BodyClass`='$BodyClass',`EngineType`='$EngineType',`NumberOfCylinders`='$NumberOfCylinders',`GearBoxType`='$GearBoxType',`FuelConsumption`='$FuelConsumption',`Acceleration`='$Acceleration',`MaximumSpeed`='$MaximumSpeed',`imageurl`='$imageurl' WHERE `id`='$id'");
mysqli_close($link);
if($result===true){
    ?>
<script>
    location.replace("manage.php");
</script>
<?php
}else{
    echo("ذخیره  نشد");
}

?>







<?php
include("includes/footer.php");
?>