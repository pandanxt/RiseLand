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
              <!--Login box-->
              <?php 
                 if (isset($_GET['account'])) {
                    if ($_GET["account"]=="agent") {
              ?>
                <!--Agent Login box-->
                <div class="col-md-4">
                    <div class="panel panel-primary col-md-12" style="padding: 0px;margin-top: 10px;">
                        <div class="panel-heading">
                        <h3 class="panel-title">Agent Login - Rise Land</h3>
                        </div>
                        <div class="panel-body" style="border: 1px solid #337ab7; margin: 5px; border-radius: 5px;">
                        <div class="col-md-12" style="margin-top: 5px;">
                            <?php 
                                if (isset($_GET['error'])) {
                                    if ($_GET["error"]=="emptyfields") {
                                        echo '<p style="color:red;">Please Fill All Fields!!!</p>';
                                    }elseif ($_GET["error"]=="sqlerror") {
                                        echo '<p style="color:red;">Something Went Wrong Please Try Later!!!</p>';
                                    }elseif ($_GET["error"]=="wrongpwd") {
                                        echo '<p style="color:red;">Wrong Email/Phone Or Password</p>';
                                    }elseif ($_GET["error"]=="nouser") {
                                        echo '<p style="color:red;">No Account Exists!!!</p>';
                                    }
                                } 
                            ?>
                            <form  action="include/login-handler.php" method="post">
                            <div class="form-group">
                                <label for="email" class="form-label">Email address:</label>
                                <input type="text" class="form-control" id="email" placeholder="Enter Email or Phone" name="mailuid" required/>
                                <label for="pwd" class="form-label">Password:</label>
                                <input type="password" class="form-control" id="pwd" placeholder="Enter Password" name="pwd"  required/>
                            </div>
                            <div class="form-group">        
                                <div class="col-sm-12" style="display: flex;padding: 0px 0px 5px 0px !important;">
                                
                                        <div class="checkbox">
                                        <label><input type="checkbox" name="remember"> Remember me</label>
                                        </div>
                                        <div class="h5">
                                            <a href="#"><label style="margin-top: 3px;margin-left: 20px;">Forget Password</label></a>
                                        </div>
                                </div>
                            </div>
                            <div class="form-group">        
                                <div class="col-sm-12" style="padding: 0px 0px 5px 0px !important;">
                                        <button type="submit" class="btn btn-primary">Create Account</button>
                                        <button type="submit" class="btn btn-primary" name="login-agent">Login</button>
                                </div>
                            </div>
                            </form>
                        </div>
                        <div class="col-sm-12">
                            <span style="color:#337ab7;font-size:1.5em;">Subscribe for SMS Alerts</span>
                            <p>If you want to get property updated then subscribe with us now.</p>
                            <span style="font-size:1.2em;"><b><a href="#">"Subscribe for SMS"</a></b></span>
                        </div>
                        </div>
                    </div>
                </div>
              <?php }elseif($_GET["account"]=="user"){ ?>
                    <!--User Login box-->
                        <div class="col-md-4">
                            <div class="panel panel-primary col-md-12" style="padding: 0px;margin-top: 10px;">
                                <div class="panel-heading">
                                <h3 class="panel-title">User Login - Rise Land</h3>
                                </div>
                                <div class="panel-body" style="border: 1px solid #337ab7; margin: 5px; border-radius: 5px;">
                                <div class="col-md-12" style="margin-top: 5px;">
                                    <?php 
                                        if (isset($_GET['error'])) {
                                        if ($_GET["error"]=="emptyfields") {
                                            echo '<p style="color:red;">Please Fill All Fields!!!</p>';
                                        }elseif ($_GET["error"]=="sqlerror") {
                                            echo '<p style="color:red;">Something Went Wrong Please Try Later!!!</p>';
                                        }elseif ($_GET["error"]=="wrongpwd") {
                                            echo '<p style="color:red;">Wrong Email/Phone Or Password</p>';
                                        }elseif ($_GET["error"]=="nouser") {
                                            echo '<p style="color:red;">No Account Exists!!!</p>';
                                        }
                                    } 
                                    ?>
                                    <form  action="include/login-handler.php" method="post">
                                    <div class="form-group">
                                        <label for="email" class="form-label">Email address:</label>
                                        <input type="text" class="form-control" id="email" placeholder="Enter Email or Phone" name="mailuid" required/>
                                        <label for="pwd" class="form-label">Password:</label>
                                        <input type="password" class="form-control" id="pwd" placeholder="Enter Password" name="pwd"  required/>
                                    </div>
                                    <div class="form-group">        
                                        <div class="col-sm-12" style="display: flex;padding: 0px 0px 5px 0px !important;">
                                        
                                                <div class="checkbox">
                                                <label><input type="checkbox" name="remember"> Remember me</label>
                                                </div>
                                                <div class="h5">
                                                    <a href="#"><label style="margin-top: 3px;margin-left: 20px;">Forget Password</label></a>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="form-group">        
                                        <div class="col-sm-12" style="padding: 0px 0px 5px 0px !important;">
                                                <button type="submit" class="btn btn-primary">Create Account</button>
                                                <button type="submit" class="btn btn-primary" name="login-user">Login</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                                <div class="col-sm-12">
                                    <span style="color:#337ab7;font-size:1.5em;">Subscribe for SMS Alerts</span>
                                    <p>If you want to get property updated then subscribe with us now.</p>
                                    <span style="font-size:1.2em;"><b><a href="#">"Subscribe for SMS"</a></b></span>
                                </div>
                                </div>
                            </div>
                        </div>
              <?php } } ?>
              <!--Advertise box-->
              <div class="col-md-4">
                <?php include('include/advertise-box.php'); ?>
              </div>
              <!--Search now box-->
              <div class="col-md-4">
                <?php include('include/search-box.php'); ?>
              </div>
                 
            </div><!--/col-md-12-->
          </div><!--/row-->
      </div><!--/container-->
      
      <!---Footer--->
      <?php include('include/footer.php'); ?>