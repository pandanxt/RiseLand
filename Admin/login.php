<?php include ('include/conn.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="../img/Logo.jpeg" type="image" sizes="16x16"><title>Rise Land</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/admin.min.css">
  <link rel="stylesheet" href="dist/css/skins/skin-green.min.css">
  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <style>
        * {
        margin: 0px;
        padding: 0px;
        }
        .login {
        background: linear-gradient(to bottom, #00a65a 0%, #fff 100%);
        height: 100vh;
        width: 100%;
        justify-content: center;
        align-items: center;
        display: flex;
        }
        .account-login {
        width: 500px;
        }
        .form-control:focus {
        box-shadow: none;
        }
        p a {
        padding-left: 2px;
        }
        .account-login h1 {
        font-size: 25px;
        text-align: left;
        color: #fff;
        text-transform: uppercase;
        font-weight: bold;
        border-radius: 5px;
        }
        .login-form input {
        width: 100%;
        position: relative;
        border-bottom: 1px solid #00a65a;
        padding: 0;
        border-top: 0px;
        border-left: 0px;
        border-right: 0px;
        box-shadow: none;
        height: 63px;
        border-radius: 0px;
        }
        .login-form {
        background: #fff;
        float: left;
        width: 100%;
        padding: 40px;
        border-radius: 5px;
        }
        button.btn {
        width: 100%;
        background: #00a65a;
        font-size: 20px;
        padding: 11px;
        color: #fff;
        border: 0px;
        margin: 10px 0px 20px;
        }
        .btn:hover{
            color: #fff;
            opacity: 0.8;
        }
        p {
        float: left;
        width: 100%;
        text-align: center;
        font-size: 14px;
        }
        .remember {
        float: left;
        width: 100%;
        margin: 10px 0 0;
        }
        /* Customize the label (the container) */
        .custom-checkbox {
        display: block;
        position: relative;
        padding-left: 27px;
        margin-bottom: 12px;
        cursor: pointer;
        font-size: 13px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        font-weight: normal;
        padding-top: 2px;
        float: left;
        }
        /* Hide the browser's default checkbox */
        .custom-checkbox input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
        }
        /* Create a custom checkbox */
        .custom-checkbox .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 20px;
        width: 20px;
        background-color: #bfbcbc;
        }
        /* On mouse-over, add a grey background color */
        .custom-checkbox:hover input ~ .checkmark {
        background-color: #747474;
        }
        /* When the checkbox is checked, add a blue background */
        .custom-checkbox input:checked ~ .checkmark {
        background-color: #00a65a;
        }
        /* Create the checkmark/indicator (hidden when not checked) */
        .checkmark:after {
        content: "";
        position: absolute;
        display: none;
        }
        /* Show the checkmark when checked */
        .custom-checkbox input:checked ~ .checkmark:after {
        display: block;
        }
        /* Style the checkmark/indicator */
        .custom-checkbox .checkmark:after {
        left: 9px;
        top: 5px;
        width: 5px;
        height: 10px;
        border: solid white;
        border-width: 0 3px 3px 0;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
        }
        @media (max-width: 767px){
        .account-login {
            width: 90%;
        }
        }
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            height:50px;
        }
    </style>
</head>
<body class="hold-transition skin-green">
  <!-- <nav class="navbar navbar-expand-sm" style="background-color: #00a65a;">
  <a class="navbar-brand" href="#" style="color:white;">Rise Land</a>
 </nav>  -->

 <div class="login">
            <div class="account-login">
               <h1>Rise Land Login</h1>
               <?php 
                    if (isset($_GET['error'])) {
                        if ($_GET["error"]=="wrongpwd") {
                            echo '<p style="color:red;">Wrong password</p>';
                        }
                    } 
                ?>
               <form action="include/login-handler.php" method="post" class="login-form">
                  <div class="form-group">
                     <input type="text" placeholder="User Name" class="form-control"  name="mailuid" required>
                  </div>
                  <div class="form-group">
                     <input type="password" placeholder="Password"  class="form-control" name="pwd" required>
                  </div>
                  <div class="remember">
                     <label class="custom-checkbox">Remember me
                     <input type="checkbox" value="remember-me">
                     <span class="checkmark"></span>
                     </label>
                     <a href="#" class="pull-right">Forgot Password?</a>
                  </div>
                  <button class="btn" name="login-submit">Login</button>
                  <!-- <p>Are you new?<a href="#">Sign Up</a></p> -->
               </form>
            </div>
        </div>  

 <footer class="col-md-12 footer" style="border-top:2px solid;">
    <div class="pull-right hidden-xs">Rise Land</div>
    <strong>Copyright &copy; 2021 <a href="#">Mobeen Shah</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- REQUIRED JS SCRIPTS -->
<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>