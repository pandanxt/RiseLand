<?php
if (isset($_POST['user-signup'])) {
    require 'conn.php';

    $email = $_POST['email'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $passwordConfirm = $_POST['passwordcon'];
    $cell = $_POST['cell'];
    $country = $_POST['country'];
    $address = $_POST['address'];
    $zip = $_POST['zip'];
    $filename = $_FILES["file"]["name"]; 
    $tempname = $_FILES["file"]["tmp_name"];     
    $folder = "../img/".$filename; 
    // $alerts = $_POST['alerts'];

    if (empty($name)||empty($email)||empty($password)||empty($passwordConfirm)||empty($cell)||empty($country)||empty($address)) {
        header("Location: ../user-register.php?error=emptyfields&name=".$name."&email=".$email."&cell=".$cell."&country=".$country."&address=".$address);
        exit();
    }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$cell)) {
        header("Location: ../user-register.php?error=invalidemail&phone=");
        exit();
    }else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../user-register.php?error=invalidemail&phone=".$cell);
        exit();
    }else if (!preg_match("/^[a-zA-Z0-9]*$/",$cell)) {
        header("Location: ../user-register.php?error=invalidcell&email=".$email);
        exit();
    }else if ($password !== $passwordConfirm) {
        header("Location: ../user-register.php?error=passwordcheck&name=".$name."&email=".$email."phone=".$cell);
        exit();
    }else{
        $sql = "SELECT * FROM `signup` WHERE `user_email`=? OR `user_mobile`=?";
        $stmt = mysqli_stmt_init($db);
        if (!mysqli_stmt_prepare($stmt,$sql)) {
        header("Location: ../user-register.php?error=sqlerror&emailormobilealreadytaken");
        exit();
        }else{
            mysqli_stmt_bind_param($stmt,"ss",$cell,$email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt); 
            if($resultCheck > 0){
                header("Location: ../user-register.php?error=celltaken&error=emailtaken");
                exit();
            }elseif(move_uploaded_file($tempname, $folder)){
                $sql = "INSERT INTO `signup`(`user_name`, `user_email`, `user_password`, `user_mobile`, `user_address`, `user_zipcode`, `user_image`, `user_country`)VALUES(?,?,?,?,?,?,?,?)";
                mysqli_stmt_execute($stmt);
                if (!mysqli_stmt_prepare($stmt,$sql)) {
                    header("Location: ../user-register.php?error=sqlerror&DataIsNotComplete");
                    exit();
                }else{
                    $hashedPwd =password_hash($password,PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt,"ssssssss",$name,$email,$hashedPwd,$cell,$address,$zip,$filename,$country);
                    mysqli_stmt_execute($stmt);
                ?>
                <script type="text/javascript">
                    alert("Successfully Added");
                    window.location = "../index.php";
                </script>
                <?php
                exit();
                }
            }else{
                $sql = "INSERT INTO `signup`(`user_name`, `user_email`, `user_password`, `user_mobile`, `user_address`, `user_zipcode`, `user_image`, `user_country`)VALUES(?,?,?,?,?,?,?,?)";
                mysqli_stmt_execute($stmt);
                if (!mysqli_stmt_prepare($stmt,$sql)) {
                    header("Location: ../user-register.php?error=sqlerror&DataIsNotCompleteWithoutImage");
                    exit();
                }else{
                    $hashedPwd =password_hash($password,PASSWORD_DEFAULT);
                    $image = 'img/no.jpg';
                    mysqli_stmt_bind_param($stmt,"ssssssss",$name,$email,$hashedPwd,$cell,$address,$zip,$image,$country);
                    mysqli_stmt_execute($stmt);
                ?>
                <script type="text/javascript">
                    alert("Successfully Added");
                    window.location = "../index.php";
                </script>
                <?php
                exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($db);
}else{
    header("Location: ../user-register.php");
    exit();
}
?>