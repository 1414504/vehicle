<?php
$category = "";
if(isset($_GET['cat']))
{
    $category = $_GET['cat'];
}
else
{
    header("location: index.php");
}

?>

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
                    
                <main> 
                <div class="col-md-10 border min-height">
                    
                    <?php include './catagory-vehicles.php'; ?>
                    

                    
                </div>
            
                </main>
            </div>
          <?php include './footer.php'; ?>

            </div>

    </body>
</html>