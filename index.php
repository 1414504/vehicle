<?php
if (isset($_GET['save_vehicle'])) {
    $vehicle_name1 = $_GET['vehicle_name'];
    $vehicle_model1 = $_GET['vehicle_model'];
    $vehicle_menufecturer1 = $_GET['vehicle_menufecturer'];
    
    $sql = "insert into vehicle_details (vehicle_name,vehicle_model,vehicle_menufecturer) values ('$vehicle_name1', '$vehicle_model1', '$vehicle_menufecturer1')";
    
    $conn = new mysqli("localhost", "root", "root", "vehicle");
    $conn->query($sql);
    $conn->close();
   
    
}


?>


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <form>
            <label>Vehicle Name</label>
            <input type="text" name="vehicle_name"><br>
            <label>Vehicle Model</label>
            <input type="text" name="vehicle_model"><br>
            <label>Vehicle Menufecturer </label>
            <input type="text" name="vehicle_menufecturer"><br>
            <input type="submit" name="save_vehicle" value="Submit">
            
            
            
        </form>
        <?php
        $sql = "select * from vehicle_details";
        
        $conn = new mysqli("localhost", "root", "root", "vehicle");
        
       $result = $conn->query($sql);
       
       $conn->close();
       
       if(mysqli_num_rows($result)>0){
           
           while($row = mysqli_fetch_array($result)){
               
               echo 'vehicle name:' . $row['vehicle_name'] .'<br>';
                echo 'vehicle model:' . $row['vehicle_model'] .'<br>';
                 echo 'vehicle menufecturer:' . $row['vehicle_menufecturer'] .'<br>'. '<br>'. '<br>';
               
               
               
           }
           
       }
        
        
        
        
        ?>
        
 
       
    </body>
</html>
