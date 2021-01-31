<?php 
if (isset($_POST['user-signup'])) {
require 'conn.php';

$email = $_POST['email'];
$name = $_POST['name'];
$password = $_POST['password'];
$passwordConfirm = $_POST['passwordcon'];
$phone = $_POST['phone'];
$cell = $_POST['cell'];
$fax = $_POST['fax'];
$country = $_POST['country'];
$address = $_POST['address'];
$zip = $_POST['zip'];
$files = $_FILES['file'];
$filename = $files['name'];
$filrerror = $files['error'];
$filetemp = $files['tmp_name'];
$fileext = explode('.', $filename);
$filecheck = strtolower(end($fileext));
$fileextstored = array('png' , 'jpg' , 'jpeg');

if(in_array($filecheck, $fileextstored)){

    $destinationfile = $_SERVER['DOCUMENT_ROOT'].'img/'.$filename;
    move_uploaded_file($filetemp, $destinationfile);

    $sql = "INSERT INTO `signup`(`Name`, `Email`, `PASSWORD`, `Phone_No`,`mobile`, `Fax`, `Address`, `ZipCode`, `User_Image`, `Country`)
     VALUES
      ('$name','$email','$password','$phone','$cell','$fax','$address','$zip','$destinationfile','$country')";

$result = mysqli_query($db, $sql);

if(($result) == 1){
    
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Registered')
    
    </SCRIPT>");
    // window.location.href='..//index.php';
    //header("Location: ..//aloginwel.php");
}

else{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to Registere')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}

}

else{

      $sql = "INSERT INTO `signup`(`Name`, `Email`, `PASSWORD`, `Phone_No`,`mobile`, `Fax`, `Address`, `ZipCode`, `User_Image`, `Country`)
      VALUES
       ('$name','$email','$password','$phone','$cell','$fax','$address','$zip','img/no.jpg','$country')";

$result = mysqli_query($db, $sql);

if(($result) == 1){
    
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Registered')
    </SCRIPT>");
    //header("Location: ..//aloginwel.php");
    // window.location.href='..//index.php';

}

else{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to Registere')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}
}

}
?>