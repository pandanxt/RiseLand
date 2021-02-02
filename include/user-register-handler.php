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

if (empty($name)||empty($email)||empty($password)||empty($passwordConfirm)||empty($cell)||empty($country)||empty($address)) {
	header("Location: ../user-register.php?error=emptyfields&name=".$name."&email=".$email."&cell=".$cell."&country=".$country."&address=".$address
);
	exit();
}elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$cell)) {
	header("Location: ../user-register.php?error=invalidemail&phone=");
	exit();
}
else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	header("Location: ../user-register.php?error=invalidemail&phone=".$cell);
	exit();
}
else if (!preg_match("/^[a-zA-Z0-9]*$/",$cell)) {
	header("Location: ../user-register.php?error=invaliduid&email=".$email);
	exit();
}else if ($password !== $passwordConfirm) {
	header("Location: ../user-register.php?error=passwordcheck&name=".$name."&email=".$email.
	"&mail=".$email."&uid=".$username);
	exit();
}else if(move_uploaded_file($tempname, $folder)){
    $sql = "INSERT INTO `signup`(`user_name`, `user_email`, `user_password`, `user_mobile`, `user_address`, `user_zipcode`, `user_image`, `user_country`) 
    VALUES 
      ('$name','$email','$password','$cell','$address','$zip','$filename','$country')";
$result = mysqli_query($db, $sql);
if(($result) == 1){
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Registered')
    window.location.href='../index.php';
    </SCRIPT>");
}else{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to Registere')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}
}else{
      $sql = "INSERT INTO `signup`(`user_name`, `user_email`, `user_password`, `user_mobile`, `user_address`, `user_zipcode`, `user_image`, `user_country`) 
      VALUES 
        ('$name','$email','$password','$cell','$address','$zip','img/no.jpg','$country')";
$result = mysqli_query($db, $sql);
if(($result) == 1){
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Registered')
    window.location.href='../index.php';
    </SCRIPT>");
}else{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to Registere')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}
}
}
?>