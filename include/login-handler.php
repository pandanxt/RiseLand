<?php
    include('conn.php');
    
    $mailuid = $_POST['mailuid'];
    $pass = $_POST['pwd'];

if (isset($_POST['login-user'])) {
 
    if (empty($mailuid)||empty($pass)) {
    header("Location: ../login.php?account=user&error=emptyfields");
    exit();
    }else{
    $sql = "SELECT * FROM `signup_as_user` WHERE `user_email` = ? OR `user_mobile` = ?;";
    $stmt = mysqli_stmt_init($db);
    if (!mysqli_stmt_prepare($stmt,$sql)) {
    header("Location: ../login.php?account=user&error=sqlerror");
    exit();
    }else{
        mysqli_stmt_bind_param($stmt,"ss",$mailuid,$mailuid);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($pass,$row['user_password']);
                    if ($pwdCheck == false) {
                        header("Location: ../login.php?account=user&error=wrongpwd");
                        exit();
                    }elseif ($pwdCheck == true) {
                        session_start();
                        $_SESSION['userid'] = $row['user_id'];
                        $_SESSION['email'] = $row['user_email'];
                        $_SESSION['name'] = $row['user_name'];
                        $_SESSION['phone'] = $row['user_mobile'];
                        $_SESSION['address'] = $row['user_address'];
                        $_SESSION['zipcode'] = $row['user_zipcode'];
                        $_SESSION['image'] = $row['user_image'];
                        $_SESSION['country'] = $row['user_country'];
                        header("Location: ../index.php?login=success");
                        exit();
                    }else{
                        header("Location: ../login.php?account=user&error=wrongpwd");
                        exit();
                    }
            }else{
                header("Location: ../login.php?account=user&error=nouser");
                exit();
            }
        }
    }
}else if (isset($_POST['login-agent'])) {
 
    if (empty($mailuid)||empty($pass)) {
    header("Location: ../login.php?account=agent&error=emptyfields");
    exit();
    }else{
    $sql = "SELECT * FROM `signup_as_agent` WHERE `agent_email` = ? OR `agent_phone` = ?;";
    $stmt = mysqli_stmt_init($db);
    if (!mysqli_stmt_prepare($stmt,$sql)) {
    header("Location: ../login.php?account=agent&error=sqlerror");
    exit();
    }else{
        mysqli_stmt_bind_param($stmt,"ss",$mailuid,$mailuid);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($pass,$row['agent_password']);
                    if ($pwdCheck == false) {
                        header("Location: ../login.php?account=agent&error=wrongpwd");
                        exit();
                    }elseif ($pwdCheck == true) {
                        session_start();
                        $_SESSION['agentid'] = $row['agent_id'];
                        $_SESSION['email'] = $row['agent_email'];
                        $_SESSION['name'] = $row['agent_name'];
                        $_SESSION['phone'] = $row['agent_phone'];
                        $_SESSION['address'] = $row['agent_address'];
                        $_SESSION['zipcode'] = $row['agent_zipcode'];
                        $_SESSION['image'] = $row['agent_image'];
                        $_SESSION['country'] = $row['agent_country'];
                        $_SESSION['citydeal'] = $row['agent_city_deal'];
                        $_SESSION['agencyname'] = $row['agent_agency_name'];
                        $_SESSION['services'] = $row['agent_services'];
                        $_SESSION['companyphone'] = $row['agent_company_phone'];
                        $_SESSION['companyaddress'] = $row['agent_company_address'];
                        $_SESSION['comapanylogo'] = $row['agent_company_logo'];
                        header("Location: ../index.php?login=success");
                        exit();
                    }else{
                        header("Location: ../login.php?account=agent&error=wrongpwd");
                        exit();
                    }
            }else{
                header("Location: ../login.php?account=agent&error=nouser");
                exit();
            }
        }
    }
}
?>