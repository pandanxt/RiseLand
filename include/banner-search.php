<div class="container-fluid" style="padding: 0 !important;">
        <!---Banner Image--->  
        <img src="img/banner-main.jpg" style="width: 100%; height: 325px;background-position: center;background-repeat: no-repeat;background-size: cover;position: absolute;"/>
          <h2 style="position: relative;text-align: center;color:#fdc222;">Find Properties For Sale & Rent</h2>
          <!---Banner Form--->
          <div class="row col-md-8 col-md-offset-2" style="position: relative; border: 1px solid rgb(253, 252, 252); border-radius: 5px; background-color: white;">
            <div class="col-lg-6" style="margin: 5px 0px;">
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
            <div class="col-lg-6" style="margin: 5px 0px;">
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
            <div class="col-lg-6" style="margin: 5px 0px;">
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
            <div class="col-lg-6" style="margin: 5px 0px;">
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
            <div class="col-lg-6" style="margin: 5px 0px;">
              <div class="col-lg-6" style="padding-left: 0px;">
                <select class="form-control">
                  <option selected class="form-control">Price From</option>  
                </select>
              </div>
              <div class="col-lg-6" style="padding-right: 0px;">
                <select class="form-control">
                  <option selected class="form-control">Price To</option>  
                </select>
              </div>
            </div>
            <div class="col-lg-6" style="margin: 5px 0px;">
              <div class="col-lg-6" style="padding-left: 0px;">
                <select class="form-control">
                  <option selected class="form-control">Area From</option>  
                </select>
              </div>
              <div class="col-lg-6" style="padding-right: 0px;">
                <select class="form-control">
                  <option selected class="form-control">Area To</option>  
                </select>
              </div>
            </div>
            <div class="col-lg-12" style="margin: 5px 0px;">
                <button type="button" class="btn btn-primary btn-block">Search</button>
            </div>
          </div>
      </div>