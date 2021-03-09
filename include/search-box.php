<div class="panel panel-primary col-md-12" style="padding: 0px;margin: 10px;">
    <div class="panel-heading">
        <h3 class="panel-title">Search Now</h3>
    </div>
    <div class="panel-body" style="border: 1px solid #337ab7; margin: 5px; border-radius: 5px;">
        <!-- <img src="img/Logo.jpeg" class="img-responsive"/> -->
        <div class="col-md-12" style="margin-top: 0px;">
                        <form action="/action_page.php">
                          <div class="form-group">
                                <div class="col-md-12" style="padding: 0px 0px 5px 0px !important;">
                                <select id="newstype" name="society" class="form-control" required>
                                    <option disabled selected>Select City</option>
                                <?php
                                    $type = 'SELECT `city_id`,`city_name` FROM `city`';
                                    $result = mysqli_query($db, $type) or die (mysqli_error($db));
                                        while ($row = mysqli_fetch_array($result)) {
                                        $id = $row['city_id'];  
                                        $name = $row['city_name'];
                                        echo '<option value="'.$id.'">'.$name.'</option>'; 
                                    }
                                ?>    
                                </select>
                                </div>
                                <div class="col-md-12" style="padding: 0px 0px 5px 0px !important;">
                                <select id="newstype" name="society" class="form-control" required>
                                    <option disabled selected>Select Society</option>
                                    <?php
                                        $type = 'SELECT `society_id`,`society_name` FROM `society`';
                                        $result = mysqli_query($db, $type) or die (mysqli_error($db));
                                        while ($row = mysqli_fetch_array($result)) {
                                            $id = $row['society_id'];  
                                            $name = $row['society_name'];
                                            echo '<option value="'.$id.'">'.$name.'</option>'; 
                                    }
                                    ?>    
                                    </select>     
                                </div>
                                <div class="col-md-12" style="padding: 0px 0px 5px 0px !important;">
                                    <!-- <select class="form-control">
                                        <option selected class="form-control">Select Property Type</option>  
                                    </select> -->
                                    <select id="propertytype" name="type" class="form-control" required>
                                        <option disabled selected>Select Property Type</option>
                                        <?php
                                        $type = 'SELECT `property_type_id`,`property_type_name` FROM `property_type`';
                                        $result = mysqli_query($db, $type) or die (mysqli_error($db));
                                            while ($row = mysqli_fetch_array($result)) {
                                            $id = $row['property_type_id'];  
                                            $name = $row['property_type_name'];
                                            echo '<option value="'.$id.'">'.$name.'</option>'; 
                                        }
                                        ?>    
                                    </select>
                                </div>
                                <div class="col-md-12" style="padding: 0px 0px 5px 0px !important;">
                                <select id="plottype" name="plottype" class="form-control" required>
                                    <option disabled selected>Select Plot Type</option>
                                    <?php
                                    $type = 'SELECT `plot_type_id`,`plot_type_name` FROM `plot_type`';
                                    $result = mysqli_query($db, $type) or die (mysqli_error($db));
                                        while ($row = mysqli_fetch_array($result)) {
                                        $id = $row['plot_type_id'];  
                                        $name = $row['plot_type_name'];
                                        echo '<option value="'.$id.'">'.$name.'</option>'; 
                                    }
                                    ?>    
                                </select>
                                </div>

                            <div class="form-group">
                                <div class="col-md-6" style="padding: 0px 0px 5px 0px !important;">
                                <select class="form-control">
                                    <option selected class="form-control">Price From</option>  
                                </select>
                                </div>
                                <div class="col-md-6" style="padding: 0px 0px 5px 5px !important;">
                                <select class="form-control">
                                    <option selected class="form-control">Price To</option>  
                                </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6" style="padding: 0px 0px 5px 0px !important;">
                                <select class="form-control">
                                    <option selected class="form-control">Area From</option>  
                                </select>
                                </div>
                                <div class="col-md-6" style="padding: 0px 0px 5px 5px !important;">
                                <select class="form-control">
                                    <option selected class="form-control">Area To</option>  
                                </select>
                                </div>
                            </div>
                           
                            </div>
                          <div class="form-group">        
                            <div class="col-md-12" style="padding: 0px 0px 5px 0px !important;">
                                    <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                          </div>
                        </form>
                      </div>
    </div>
</div><!--/panel panel-primary col-md-12(Search Now)-->