<?php 

require 'conn.php';

$name = $_POST['name'];
$description = $_POST['description'];
$status =  $_POST['status'];
$postOn = date("Y-m-d H:i:s");
$postBy = $_POST['agent'];

if (isset($_POST['property-submit'])) {

	$filename = $_FILES["file"]["name"]; 
	$tempname = $_FILES["file"]["tmp_name"];     
	$folder = "../img/".$filename; 
	$location =  $_POST['location'];
	$propertytype =  $_POST['type'];
	$price =  $_POST['price'];
	$society =  $_POST['society'];
	$plottype =  $_POST['plottype'];

	if (empty($name)||empty($location)||empty($description)||empty($propertytype)||empty($society)||empty($plottype)||empty($price)) {
		header("Location: ../property-add.php?error=emptyfields&propertyname=".$name."&address=".$location."&description=".$description."&propertytype=".$propertytype."&society=".$society."&price=".$price);
		exit();
	}else{
		$sql = "SELECT * FROM `property` WHERE `property_name`= ?";
		$stmt = mysqli_stmt_init($db);
		if (!mysqli_stmt_prepare($stmt,$sql)) {
			header("Location: ../property-add.php?error=sqlerror");
			exit();
		}else{
			mysqli_stmt_bind_param($stmt,"s",$name);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$resultCheck = mysqli_stmt_num_rows($stmt);
				
				if ($resultCheck > 0) {
					header("Location: ../property-add.php?error=propertyNameAlreadyTaken");
					exit();
				}elseif(move_uploaded_file($tempname, $folder)){
					  $sql = "INSERT INTO `property`(`property_name`, `property_description`, `property_type`, `property_plot`, `property_location`, `property_price`, `property_posted_on`, `property_status`, `property_image`, `agent_id`, `society_id`) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
					mysqli_stmt_execute($stmt);
					
					if (!mysqli_stmt_prepare($stmt,$sql)) {
						header("Location: ../property-add.php?error=sqlerror");
						exit();
					}else{
						mysqli_stmt_bind_param($stmt,"sssssssssss",$name, $description, $propertytype, $plottype, $location, $price, $postOn, $status, $filename, $postBy, $society);
						mysqli_stmt_execute($stmt);
				
						echo '<script type="text/javascript">alert("New Property is Successfully Added");window.location = "../index.php";</script>';								
						exit();
					}
				}else{
					$sql = "INSERT INTO `property`(`property_name`, `property_description`, `property_type`, `property_plot`, `property_location`, `property_price`, `property_posted_on`, `property_status`, `property_image`, `agent_id`, `society_id`) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
					mysqli_stmt_execute($stmt);
				
					if (!mysqli_stmt_prepare($stmt,$sql)) {
						header("Location: property-add.php?error=sqlerror");
						exit();
					}else{
						$image = 'NewsImage_thumb.jpg';
						mysqli_stmt_bind_param($stmt,"sssssssssss",$name, $description, $propertytype, $plottype, $location, $price, $postOn, $status, $image, $postBy, $society);
						mysqli_stmt_execute($stmt);
				
						echo '<script type="text/javascript">alert("New Property is Successfully Added");window.location = "../index.php";</script>';								
						exit();
					}			
				}
		}
	}
	mysqli_stmt_close($stmt);
	mysqli_close($db);
}elseif (isset($_POST['society-submit'])) {
	
	$filename = $_FILES["file"]["name"]; 
	$tempname = $_FILES["file"]["tmp_name"];     
	$folder = "../img/".$filename;
	$location =  $_POST['location']; 
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
		}else{
			mysqli_stmt_bind_param($stmt,"s",$name);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$resultCheck = mysqli_stmt_num_rows($stmt);
				
				if ($resultCheck > 0) {
					header("Location: ../society-add.php?error=societyNameAlreadyTaken");
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
							$image = 'NewsImage_thumb.jpg';
							mysqli_stmt_bind_param($stmt,"sssssss",$name, $description, $location, $status, $image, $postBy, $city);
							mysqli_stmt_execute($stmt);
						
							echo '<script type="text/javascript">alert("New Society is Successfully Added");window.location = "../index.php";</script>';								
							exit();
						}			
					}
			}
		}
	mysqli_stmt_close($stmt);
	mysqli_close($db);
}elseif (isset($_POST['forum-submit'])) {

	$forumtype =  $_POST['type'];
	
	//echo '<script> console.log('.$forumtype.' '.$name.' '.$description.' '.$status.' '.$postOn.' '.$postBy.');</script>';

	if (empty($name)||empty($description)) {
		header("Location: ../forum-add.php?error=emptyfields&forumtitle=".$name."&description=".$description);
		exit();
	}else{
		$sql = "SELECT * FROM `forum` WHERE `forum_title`= ?";
		$stmt = mysqli_stmt_init($db);
		
		if (!mysqli_stmt_prepare($stmt,$sql)) {
			header("Location: ../forum-add.php?error=sqlerror");
			exit();
		}else{
			mysqli_stmt_bind_param($stmt,"s",$name);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$resultCheck = mysqli_stmt_num_rows($stmt);
				
				if ($resultCheck > 0) {
					header("Location: ../forum-add.php?error=forumTitleAlreadyTaken");
					exit();
				}else{
						$sql = "INSERT INTO `forum`(`forum_title`, `forum_type_id`, `forum_status`, `forum_description`, `posted_on`, `agent_id`) VALUES (?,?,?,?,?,?)";
						mysqli_stmt_execute($stmt);
					
						if (!mysqli_stmt_prepare($stmt,$sql)) {
							header("Location: forum-add.php?error=sqlerror");
							exit();
						}else{
							mysqli_stmt_bind_param($stmt,"ssssss",$name, $forumtype, $status, $description, $postOn, $postBy);
							mysqli_stmt_execute($stmt);
						
							echo '<script type="text/javascript">alert("New Forum is Successfully Added");window.location = "../index.php";</script>';								
							exit();
						}			
					}
			}
		}
	mysqli_stmt_close($stmt);
	mysqli_close($db);
}
?>