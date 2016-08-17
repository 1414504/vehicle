<form action="" method="POST"> 
                   

                    <div class = "row" style="margin-top: 10px;">
                        <div class="col-md-3"> Vehicle Name</div>
                        <div class="col-md-9"> 
                            <input name="vehicle_name" type="text" class="form-control" required=""> </div>
                    </div>
                    
                      
                    
                    <div class = "row" style="margin-top:10px;">
                        <div class="col-md-3"> Vehicle summary</div>
                        <div class="col-md-9"> 
                            <textarea name="vehicle_summary" class="form-control" required=""></textarea> </div>
                    </div>
                    
                      
                    
                    <div class = "row" style="margin-top: 10px;">
                        <div class="col-md-3"> Vehicle Category </div>
                        <div class="col-md-9"> 
                            <input name="vehicle_category" type="text" class="form-control" required=""></div>
                    </div>
                    
                    
                    
                    <div class="row" style="margin-top: 10px">
                        <div class="col-md-2" style="float:right;">
                            <input type="submit" name="save_vehicle" value="Submit" class="form-control">
                            
                        </div>
                        
                    </div>
 
 <?php echo $message; ?>
                

                   
                    </form>
