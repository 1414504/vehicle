<?php
                            $con = new mysqli("localhost", "root", "root", "vehicle");
                            if(mysqli_errno($con))
                            {
                                die(mysqli_error($con)." error connectiion failed.");
                            }
                            
                            $sql = "select * from vehicleTable where lower(vehicle_category)=lower('$category')";
                            
                            $result = $con->query($sql);
                            $con->close();
                            if(mysqli_num_rows($result)>0)
                            {                                
                                while($vehicle = mysqli_fetch_array($result))
                                {
                                    ?>
                                        <div class = "row margin-top">
                        <div class="col-md-6">
                            <input value="<?php echo $vehicle['vehicle_name']; ?>" class="form-control">
                        </div>
                        
                    </div>
                    
                      <div class = "row margin-top">
                          <div class="col-md-6">
                            <input value="<?php echo $vehicle['vehicle_category']; ?>" class="form-control">
                        </div>
                        
                    </div>
                    
                      <div class = "row margin-top">
                          <div class="col-md-9">
                              <textarea class="form-control"> <?php echo $vehicle['vehicle_summary']; ?> </textarea>
                        </div>
                        
                    </div>
                    
                    <hr>
                    
                    
                    <?php
                                }
                            }
                            
                            
                    ?>