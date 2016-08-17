<!DOCTYPE html>
<html>
    
    <?php include 'head.php';?>
    
    
    <body>
        
        <div class="container border">

         <?php include 'header.php';?>
           
            <div class="row">
                <div class="col-md-2 min-height">
                  <?php
                   include './navbar.php';
                   ?>
                
                </div>
                    
                
                <div class="col-md-10 border min-height">
                    
                    <?php
                    $con = new mysqli("ap-cdbr-azure-east-c.cloudapp.net", "b1236d751c9714", "41e55854", "acsm_dd5dc4ba52b59d7");
       
                            $sql = "select * from vehicleTable";
                            $result = $con->query($sql);
                            $con->close();
                            if(mysqli_num_rows($result)>0)
                            {                                
                                while($row = mysqli_fetch_array($result))
                                {
                                    ?>
                                        <div class = "row margin-top">
                        <div class="col-md-6">
                            <input value="<?php echo $row['vehicle_name']; ?>" class="form-control">
                        </div>
                                          
 
                    </div>
                    
                    
                    
                    <div class="row margin-top">
                        <div class="col-md-6">
                            <input value="<?php echo $row['vehicle_category']; ?>" class="form-control">
                        </div>
                    </div>
                    
                    
                    
                      <div class = "row margin-top">
                          <div class="col-md-6">
                            <input  value="<?php echo $row['vehicle_category']; ?>" class="form-control">
                        </div>
                        
                    </div>
                    
                    
                    
                      <div class = "row margin-top">
                          <div class="col-md-9">
                              <textarea class="form-control"> <?php echo $row['vehicle_summary']; ?> </textarea>
                        </div>
                        
                    </div>
                    
                    
                    
                    <hr>
                    
                    
                    <?php
                                }
                            }
                            
                            
                    ?>
                    

                    
                </div>
            </div>
            
         <?php include './footer.php';  ?>

            </div>

    </body>
</html>

