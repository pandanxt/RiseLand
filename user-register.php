<!--Header File Include-->
<?php include('include/header.php'); ?>

<!---Top Navbar--->
<?php include('include/top-navbar.php'); ?>
      
<!---Advertise Banner--->
<?php include('include/banner.php');?>

<!---Dropdown Navbar--->
<?php include('include/dropdown-navbar.php'); ?>

<!---Register Panels--->
<div class="container" style="margin-top: 20px;">

  <div class="row">
  
    <div class="col-md-12">
    
      <div class="col-md-4">
        
        <!--Advertise Box-->
        <?php include('include/advertise-box.php'); ?>
        
        <!--Search Box-->
        <?php include('include/search-box.php'); ?>      
      
      </div><!--/col-md-4-->
      
      <!--SignUp-box Land-->
      <div class="panel panel-primary col-md-7 col-md-offset-1" style="padding: 0px;margin: 10px; float: right;">
        <div class="panel-heading">
          <h3 class="panel-title">User Sign Up - Rise Land</h3>
        </div>
        <div class="panel-body">
          Rise Land is a Pakistan real estate website to buy sell rent properties like plots, homes, farms etc. Intellisoft Solutions is maintaing this portal, which specialize in Real Estate websites. Real Estate Agents and other investors can create their account on this portal and sell their properties. Also users can keep track of their properties and inventories or other clients they have. So Please join us now to advertise your properties to sale or rent free of cost.
        
          <div class="col-md-12" style="margin-top: 10px;">
            <form action="/action_page.php">
              <div class="form-group">
                <div class="col-sm-6">
                  <label for="email" class="form-label">Email address:</label>
                  <input type="email" class="form-control" id="email" placeholder="Enter password" name="pwd">
                </div>
                <div class="col-sm-6">
                  <label for="pwd" class="form-label">Password:</label>
                  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                </div>
              </div>
                          
              <div class="form-group">
                <div class="col-sm-6">
                  <label for="pwd" class="form-label">Password (Confirm):</label>
                  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">  
                </div>
                <div class="col-sm-6">
                  <label for="fname" class="form-label">Full Name:</label>
                  <input type="fname" class="form-control" id="fname" placeholder="Enter Full Name" name="fname">  
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-6">
                  <label for="phone" class="form-label">Phone:</label>
                  <input type="email" class="form-control" id="email" placeholder="Enter password" name="pwd">
                </div>
                <div class="col-sm-6">
                  <label for="pwd" class="form-label">Cell / Mobile (Format 346-9999999):</label>
                  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-6">
                  <label for="email" class="form-label">Fax:</label>
                  <input type="email" class="form-control" id="email" placeholder="Enter password" name="pwd">
                </div>
                <div class="col-sm-6">
                  <label for="pwd" class="form-label">Address:</label>
                  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-6">
                  <label for="email" class="form-label">Zip Code:</label>
                  <input type="email" class="form-control" id="email" placeholder="Enter password" name="pwd">
                </div>
                <div class="col-sm-6">
                  <label for="pwd" class="form-label">Country:</label>
                  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                </div>
              </div>
                          
              <!-- <span style="color:#337ab7;font-size:2em;margin-left:15px;">Agency Information</span>
              
              <div class="form-group">
                <div class="col-sm-12">
                  <label for="email" class="form-label">Select Cities You Deal In:</label>
                  <input type="email" class="form-control" id="email" placeholder="Enter password" name="pwd">
                </div>
                <div class="col-sm-12">
                  <label for="pwd" class="form-label">Agency Name:</label>
                  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                </div>
              </div>
              
              <div class="form-group">
                <div class="col-sm-12">
                  <label for="email" class="form-label">Description of Services:</label>
                  <input type="email" class="form-control" id="email" placeholder="Enter password" name="pwd">
                </div>
              </div>
                          
              <span style="color:#337ab7;font-size:2em;margin-left:15px;">Agency Contact Details</span>
              
              <div class="form-group">
                <div class="col-sm-6">
                  <label for="email" class="form-label">Company Phone:</label>
                  <input type="email" class="form-control" id="email" placeholder="Enter password" name="pwd">
                </div>
                <div class="col-sm-6">
                  <label for="pwd" class="form-label">Company Cell:</label>
                  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                </div>
              </div>
              
              <div class="form-group">
                <div class="col-sm-6">
                  <label for="email" class="form-label">Company Fax:</label>
                  <input type="email" class="form-control" id="email" placeholder="Enter password" name="pwd">
                </div>
                <div class="col-sm-6">
                  <label for="pwd" class="form-label">Company Address:</label>
                  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                </div>
              </div> -->
              
              <div class="form-group">
                <div class="col-sm-12">
                  <label for="email" class="form-label">User Image:</label>
                  <input type="email" class="form-control" id="email" placeholder="Enter password" name="pwd">
                </div>
                <!-- <div class="col-sm-6">
                  <label for="pwd" class="form-label">Company Logo:</label>
                  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                </div> -->
              </div>
              
              <div class="form-group">        
                <div class="col-sm-12">
                  <div class="checkbox">
                    <label><input type="checkbox" name="remember"> Subscribe with us for alerts on your mobile?</label>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="checkbox">
                    <label><input type="checkbox" name="remember"> I have read and agree to rise land Terms & Conditions</label>
                  </div>
                </div>
              </div>
              
              <div class="form-group">        
                <div class="col-sm-12">
                  <button type="submit" class="btn btn-primary">Create Account</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div><!--/panel panel-primary col-md-7 col-md-offset-1-->

    </div><!--/col-md-12-->
  
  </div><!--/row-->

</div><!--/container-->

<!---Footer--->
<?php include('include/footer.php'); ?>