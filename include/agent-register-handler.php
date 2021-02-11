<?php
if (isset($_POST['agent-signup'])) {
    require 'conn.php';

    $email = $_POST['email'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $passwordConfirm = $_POST['passwordcon'];
    $cell = $_POST['cell'];
    $country = $_POST['country'];
    $address = $_POST['personaladdress'];
    $zip = $_POST['zip'];
    $agencyname = $_POST['agencyname'];
    $service = $_POST['service'];
    $citydeal = implode(', ', $_POST['citydeal']);
    $companycell = $_POST['companycell'];
    $companyaddress = $_POST['companyaddress'];
    $filename = $_FILES["file"]["name"]; 
    $tempname = $_FILES["file"]["tmp_name"];     
    $folder = "../img/".$filename; 
    $companyfile = $_FILES["companyfile"]["name"]; 
    $tempnameCompany = $_FILES["companyfile"]["tmp_name"];     
    $folderCompany = "../img/".$companyfile; 
    $status = "Pakistan Agent";
    // $alerts = $_POST['alertsms'];

    if (empty($name)||empty($email)||empty($password)||empty($passwordConfirm)||empty($cell)||empty($country)||empty($address)||empty($citydeal)||empty($agencyname)||empty($service)||empty($companycell)||empty($companyaddress)||empty($companyfile)) {
        header("Location: ../agent-register.php?error=emptyfields&name=".$name."&email=".$email."&cell=".$cell."&country=".$country."&address=".$address);
        exit();
    }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$cell) && !preg_match("/^[a-zA-Z0-9]*$/",$companycell)) {
        header("Location: ../agent-register.php?error=invalidemail&phone=");
        exit();
    }else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../agent-register.php?error=invalidemail&phone=".$cell."&companyCell=".$companycell);
        exit();
    }else if (!preg_match("/^[a-zA-Z0-9]*$/",$cell)) {
        header("Location: ../agent-register.php?error=invalidcell&email=".$email);
        exit();
    }else if (!preg_match("/^[a-zA-Z0-9]*$/",$companycell)) {
        header("Location: ../agent-register.php?error=invalidCompanyCell&email=".$cell);
        exit();
    }else if ($password !== $passwordConfirm) {
        header("Location: ../agent-register.php?error=passwordcheck&name=".$name."&email=".$email."phone=".$cell);
        exit();
    }else{
        $sql = "SELECT * FROM `signup_as_agent` WHERE `agent_email`=? OR `agent_phone`=? OR `agent_agency_name`=? OR `agent_company_phone`=?";
        $stmt = mysqli_stmt_init($db);
        if (!mysqli_stmt_prepare($stmt,$sql)) {
        header("Location: ../agent-register.php?error=sqlerror&emailormobilealreadytaken");
        exit();
        }else{
            mysqli_stmt_bind_param($stmt,"ssss",$cell,$email,$agencyname,$companycell);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt); 
            if($resultCheck > 0){
                header("Location: ../agent-register.php?error=celltaken&error=emailtaken");
                exit();
            }elseif(move_uploaded_file($tempname, $folder) && move_uploaded_file($tempnameCompany, $folderCompany)){
                $sql = "INSERT INTO `signup_as_agent`(`agent_name`, `agent_email`, `agent_password`, `agent_phone`, `agent_address`, `agent_zipcode`, `agent_image`, `agent_country`, `agent_city_deal`, `agent_agency_name`, `agent_services`, `agent_company_phone`, `agent_company_address`, `agent_company_logo`, `status`)VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
                mysqli_stmt_execute($stmt);
                if (!mysqli_stmt_prepare($stmt,$sql)) {
                    header("Location: ../agent-register.php?error=sqlerror&DataIsNotComplete");
                    exit();
                }else{
                    $hashedPwd =password_hash($password,PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt,"sssssssssssssss",$name, $email,  $hashedPwd, $cell, $address, $zip, $filename, $country, $citydeal, $agencyname, $service, $companycell, $companyaddress, $companyfile, $status);
                    mysqli_stmt_execute($stmt);
                ?>
                <script type="text/javascript">
                    alert("Successfully Added");
                    window.location = "../index.php";
                </script>
                <?php
                exit();
                }
            }elseif(move_uploaded_file($tempnameCompany, $folderCompany)){
                $sql = "INSERT INTO `signup_as_agent`(`agent_name`, `agent_email`, `agent_password`, `agent_phone`, `agent_address`, `agent_zipcode`, `agent_image`, `agent_country`, `agent_city_deal`, `agent_agency_name`, `agent_services`, `agent_company_phone`, `agent_company_address`, `agent_company_logo`, `status`)VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
                mysqli_stmt_execute($stmt);
                if (!mysqli_stmt_prepare($stmt,$sql)) {
                    header("Location: ../agent-register.php?error=sqlerror&DataIsNotComplete");
                    exit();
                }else{
                    $hashedPwd =password_hash($password,PASSWORD_DEFAULT);
                    $image = 'img/no.jpg';
                    mysqli_stmt_bind_param($stmt,"sssssssssssssss",$name, $email,  $hashedPwd, $cell, $address, $zip, $image, $country, $citydeal, $agencyname, $service, $companycell, $companyaddress, $companyfile, $status);
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
                $sql = "INSERT INTO `signup_as_agent`(`agent_name`, `agent_email`, `agent_password`, `agent_phone`, `agent_address`, `agent_zipcode`, `agent_image`, `agent_country`, `agent_city_deal`, `agent_agency_name`, `agent_services`, `agent_company_phone`, `agent_company_address`, `agent_company_logo`, `status`)VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
                mysqli_stmt_execute($stmt);
                if (!mysqli_stmt_prepare($stmt,$sql)) {
                    header("Location: ../agent-register.php?error=sqlerror&DataIsNotCompleteWithoutImage");
                    exit();
                }else{
                    $hashedPwd =password_hash($password,PASSWORD_DEFAULT);
                    $image = 'img/no.jpg';
                    mysqli_stmt_bind_param($stmt,"sssssssssssssss",$name, $email,  $hashedPwd, $cell, $address, $zip, $image, $country, $citydeal, $agencyname, $service, $companycell, $companyaddress, $companyfile, $status);
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
    header("Location: ../agent-register.php");
    exit();
}
?>