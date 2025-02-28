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
$image=$_FILES["image"]["name"];
$imageurl="images/".$image;

$flagSaveOk=true;


if(file_exists($imageurl)){
    $flagSaveOk=false;
}

$save=move_uploaded_file($_FILES["image"]["tmp_name"],$imageurl);
if($save==false){
    $flagSaveOk=false;
}

if($flagSaveOk=true){
    
    $link=mysqli_connect("localhost","root","","carshop");
    $result=mysqli_query($link,"INSERT INTO `cars`( `CarName`, `EngineVolume`, `BodyClass`, `EngineType`, `NumberOfCylinders`, `GearBoxType`, `FuelConsumption`, `Acceleration`, `MaximumSpeed`, `imageurl`) VALUES ('$CarName','$EngineVolume','$BodyClass','$EngineType','$NumberOfCylinders','$GearBoxType','$FuelConsumption','$Acceleration','$MaximumSpeed','$imageurl')");
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
}


?>








<?php
include("includes/footer.php");
?>
