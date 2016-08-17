<?php
$message = "";
if(isset($_POST['save_vehicle']))
{
    $name = $_POST['vehicle_name'];
    $category = $_POST['vehicle_category'];
    $summary = $_POST['vehicle_summary'];

    $con = new mysqli("ap-cdbr-azure-east-c.cloudapp.net", "b1236d751c9714", "41e55854", "acsm_dd5dc4ba52b59d7");
    
    $sql = "insert into vehicleTable (vehicle_name, vehicle_summary, vehicle_category)values('$name', '$summary','$category')";
    
    $con->query($sql);
    $con->close();
    $message = "<h3>Data saved successfully</h3>";
    
}//end if statement
