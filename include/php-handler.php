<?php 

require 'conn.php';

$name = $_POST['name'];
$description = $_POST['description'];
$location =  $_POST['location'];
$status =  $_POST['status'];
$filename = $_FILES["file"]["name"]; 
$tempname = $_FILES["file"]["tmp_name"];     
$folder = "../img/".$filename; 
$postOn = date("Y-m-d H:i:s");
$postBy = $_POST['agent'];
if (isset($_POST['property-submit'])) {

	$propertytype =  $_POST['propertytype'];
	$price =  $_POST['price'];
	$society =  $_POST['society'];
	$plottype =  $_POST['plottype'];

	if (empty($name)||empty($location)||empty($description)) {
		header("Location: ../property-add.php?error=emptyfields&propertyname=".$name."&address=".$location."&description=".$description."&propertytype=".$propertytype."&society=".$society."&price=".$price);
		exit();
	}else{
		$sql = "SELECT * FROM `property` WHERE `property_name`= ?";
		$stmt = mysqli_stmt_init($db);
		if (!mysqli_stmt_prepare($stmt,$sql)) {
			header("Location: ../property-add.php?error=sqlerror");
			exit();
		}elseif(move_uploaded_file($tempname, $folder)){
				$sql = "INSERT INTO `property`(`property_name`, `property_description`, `property_type`, `property_plot`, `property_address`, `property_price`, `property_posted_on`, `property_status`, `property_image`, `agent_id`, `society_id`) VALUES (?,?,?)";
				mysqli_stmt_execute($stmt);
				if (!mysqli_stmt_prepare($stmt,$sql)) {
				header("Location: property-add.php?error=sqlerror");
				exit();
				}else{
				mysqli_stmt_bind_param($stmt,"sssssssssss",$name, $description, $location, $propertytype, $price, $society, $plottype, $status, $filename, $postOn, $postBy);
				mysqli_stmt_execute($stmt);
				
				echo '<script type="text/javascript">alert("New Property is Successfully Added");window.location = "index.php";</script>';								
				exit();
				}
			}else{
				$sql = "INSERT INTO `property`(`property_name`, `property_description`, `property_type`, `property_plot`, `property_address`, `property_price`, `property_posted_on`, `property_status`, `property_image`, `agent_id`, `society_id`) VALUES (?,?,?)";
				mysqli_stmt_execute($stmt);
				if (!mysqli_stmt_prepare($stmt,$sql)) {
				header("Location: property-add.php?error=sqlerror");
				exit();
				}else{
				$image = 'img/NewsImage_thumb.jpg';
				mysqli_stmt_bind_param($stmt,"sssssssssss",$name, $description, $location, $propertytype, $price, $society, $plottype, $status, $image, $postOn, $postBy);
				mysqli_stmt_execute($stmt);
				
				echo '<script type="text/javascript">alert("New Property is Successfully Added");window.location = "index.php";</script>';								
				exit();
				}			
		}
	}
	mysqli_stmt_close($stmt);
	mysqli_close($db);
}if (isset($_POST['society-submit'])) {

	$city =  $_POST['city'];

	if (empty($name)||empty($location)||empty($description)) {
		header("Location: ../society-add.php?error=emptyfields&propertyname=".$name."&address=".$location."&description=".$description."&propertytype=".$propertytype."&society=".$society."&price=".$price);
		exit();
	}else{
		$sql = "SELECT * FROM `society` WHERE `society_name`= ?";
		$stmt = mysqli_stmt_init($db);
		if (!mysqli_stmt_prepare($stmt,$sql)) {
			header("Location: ../society-add.php?error=sqlerror");
			exit();
		}elseif(move_uploaded_file($tempname, $folder)){
				$sql = "INSERT INTO `society`(`society_name`, `society_location`, `society_descrption`, `society_image`, `society_status`, `agent_id`, `city_id`) VALUES (?,?,?,?,?,?,?)";
				mysqli_stmt_execute($stmt);
				if (!mysqli_stmt_prepare($stmt,$sql)) {
				header("Location: ../society-add.php?error=sqlerror");
				exit();
				}else{
				mysqli_stmt_bind_param($stmt,"sssssss",$name, $description, $location, $status, $filename, $postBy,$city);
				mysqli_stmt_execute($stmt);
				
				 echo '<script type="text/javascript">alert("New Society is Successfully Added");window.location = "../index.php";</script>';								
				exit();
				}
			}else{
				$sql = "INSERT INTO `society`(`society_name`, `society_location`, `society_descrption`, `society_image`, `society_status`, `agent_id`, `city_id`) VALUES (?,?,?,?,?,?,?)";
				mysqli_stmt_execute($stmt);
				if (!mysqli_stmt_prepare($stmt,$sql)) {
				header("Location: society-add.php?error=sqlerror");
				exit();
				}else{
				$image = 'img/NewsImage_thumb.jpg';
				mysqli_stmt_bind_param($stmt,"sssssss",$name, $description, $location, $status, $image, $postBy, $city);
				mysqli_stmt_execute($stmt);
				
				 echo '<script type="text/javascript">alert("New Society is Successfully Added");window.location = "../index.php";</script>';								
				exit();
				}			
		}
	}
	mysqli_stmt_close($stmt);
	mysqli_close($db);
}
// else{
// 	header("Location: ../province-add.php");
// 	exit();
//}
?>