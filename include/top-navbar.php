<nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><b>Rise Land</b></a>
          </div>
      
          <!-- Collect the nav links and other content for toggling -->
          <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav">
              <li><a href="#"><b>Advertise </b><span class="sr-only">(current)</span></a></li>
            </ul>
            <?php if (isset($_SESSION['userid'])) { 
                //session_start();
                echo '<ul class="nav navbar-nav navbar-right">';
                echo '<li class="nav-item"><a class="nav-link" href="profile.php?id='.$_SESSION["userid"].'"><span class="glyphicon glyphicon-user"></span><b> '.$_SESSION['name'].'</b></a>';
                echo '<li class="nav-item"><a class="nav-link" href="include/logout.php"><span class="glyphicon glyphicon-log-out"></span><b> Logout</b></a>';
                echo '</ul>'; 
              }else if (isset($_SESSION['agentid'])) {
                echo '<ul class="nav navbar-nav navbar-right">';
                echo '<li class="nav-item"><a class="nav-link" href="profile.php?id='.$_SESSION["agentid"].'"><span class="glyphicon glyphicon-user"></span><b> '.$_SESSION['name'].'</b></a>';
                echo '<li class="nav-item"><a class="nav-link" href="include/logout.php"><span class="glyphicon glyphicon-log-out"></span><b> Logout</b></a>';
                echo '</ul>';
              }else{ 
              echo '<ul class="nav navbar-nav navbar-right">';
              echo '<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span><b> Register</b></a>';
              echo '<div class="dropdown-menu" aria-labelledby="navbarDropdown" style="width:max-content;padding:10px 10px 10px 0px;margin-right:20px;">';
              echo '<ol style="text-decoration:none;">';
              echo '  <li><a class="dropdown-item" href="agent-register.php" style="text-decoration:none;"><b>Agent Register <small>(For Agency)</small></b></a></li>';
              echo '  <li><a class="dropdown-item" href="user-register.php" style="text-decoration:none;"><b>User Register <small>(Direct Buy-Sell)</small></b></a></li>';
              echo '</ol>';
              echo '</div>';
              echo ' </li>';
              echo '<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdownLogin" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span><b> Login</b></a>';
              echo '<div class="dropdown-menu" aria-labelledby="navbarDropdownLogin" style="width:max-content;padding:10px 10px 10px 0px;margin-right:20px;">';
              echo '<ol style="text-decoration:none;">';
              echo '  <li><a class="dropdown-item" href="login.php?account=agent" style="text-decoration:none;"><b>Agent Login <small>(For Agency)</small></b></a></li>';
              echo '  <li><a class="dropdown-item" href="login.php?account=user" style="text-decoration:none;"><b>User Login <small>(Direct Buy-Sell)</small></b></a></li>';
              echo '</ol>';
              echo '</div>';
              echo '</li>';
              echo '</ul>';
             } ?>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
      