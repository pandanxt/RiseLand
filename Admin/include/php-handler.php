<?php 

require 'conn.php';

$name = $_POST['name'];
$description = $_POST['description'];
$location =  $_POST['location'];

if (isset($_POST['province-submit'])) {

	if (empty($name)||empty($location)||empty($description)) {
		header("Location: ../province-add.php?error=emptyfields&name=".$name."&location=".$location."&description=".$description);
		exit();
	}else{
		$sql = "SELECT * FROM `province` WHERE `province_name`= ?";
		$stmt = mysqli_stmt_init($db);
		if (!mysqli_stmt_prepare($stmt,$sql)) {
			header("Location: ../province-add.php?error=sqlerror");
			exit();
		}else{
				mysqli_stmt_bind_param($stmt,"s",$name);
				mysqli_stmt_execute($stmt);
				mysqli_stmt_store_result($stmt);
				$resultCheck = mysqli_stmt_num_rows($stmt);
				if ($resultCheck > 0) {
					header("Location: ../province-add.php?error=namealreadytaken");
					exit();
				}else{
					$sql = "INSERT INTO `province` (`province_name`,`location`,`description`) VALUES (?,?,?)";
					mysqli_stmt_execute($stmt);
					if (!mysqli_stmt_prepare($stmt,$sql)) {
						header("Location: ../province-add.php?error=sqlerror");
						exit();
					}else{
						mysqli_stmt_bind_param($stmt,"sss",$name,$location,$description);
						mysqli_stmt_execute($stmt);
					
						echo '<script type="text/javascript">alert("New Province is Successfully Added");window.location = "../province.php";</script>';
						exit();
					}
				}
		}			
	}
	mysqli_stmt_close($stmt);
	mysqli_close($db);
}else if (isset($_POST['city-submit'])) {
	$cityprovince = $_POST['cityprovince'];

	if (empty($name)||empty($location)||empty($description)||empty($cityprovince)) {
		header("Location: ../city-add.php?error=emptyfields&name=".$name."&location=".$location."&description=".$description."&cityprovince=".$cityprovince);
		exit();
	}else{
		$sql = "SELECT * FROM `city` WHERE `city_name`= ?";
		$stmt = mysqli_stmt_init($db);
		if (!mysqli_stmt_prepare($stmt,$sql)) {
			header("Location: ../city-add.php?error=sqlerror");
			exit();
		}else{
			mysqli_stmt_bind_param($stmt,"s",$name);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$resultCheck = mysqli_stmt_num_rows($stmt);
				if ($resultCheck > 0) {
					header("Location: ../city-add.php?error=cityNameAlreadyTaken");
					exit();
				}else{
					$sql = "INSERT INTO `city`(`city_name`, `city_location`, `city_description`, `province_id`) VALUES (?,?,?,?)";
					mysqli_stmt_execute($stmt);
					if (!mysqli_stmt_prepare($stmt,$sql)) {
					header("Location: ../city-add.php?error=sqlerror");
					exit();
				}else{
					mysqli_stmt_bind_param($stmt,"ssss",$name,$location,$description,$cityprovince);
					mysqli_stmt_execute($stmt);
					
					echo '<script type="text/javascript">alert("New City is Successfully Added");window.location = "../city.php";</script>';								
					exit();
				}
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