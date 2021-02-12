<?php 

require 'include/conn.php';

$name = $_POST['name'];
$description = $_POST['description'];
$type = $_POST['type'];
$filename = $_FILES["file"]["name"]; 
$tempname = $_FILES["file"]["tmp_name"];     
$folder = "../img/".$filename; 
$postOn = date("Y-m-d H:i:s");
$postBy = $_POST['admin'];

if (isset($_POST['news-submit'])) {
	
	if (empty($name)||empty($description)||empty($type)) {
		header("Location: news-add.php?error=emptyfields&name=".$name."&description=".$description."&newstype=".$type);
		exit();
	}else{
		$sql = "SELECT * FROM `news` WHERE `news_name`= ?";
		$stmt = mysqli_stmt_init($db);
		if (!mysqli_stmt_prepare($stmt,$sql)) {
			header("Location: news-add.php?error=sqlerror");
			exit();
		}else{
			mysqli_stmt_bind_param($stmt,"s",$name);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$resultCheck = mysqli_stmt_num_rows($stmt);
			if ($resultCheck > 0) {
				header("Location: news-add.php?error=newsNameAlreadyPost");
				exit();
			}elseif(move_uploaded_file($tempname, $folder)){
				$sql = "INSERT INTO `news`(`news_name`, `news_description`, `news_type`, `news_image`, `news_post_on`, `news_post_by`) VALUES (?,?,?,?,?,?)";
				mysqli_stmt_execute($stmt);
				if (!mysqli_stmt_prepare($stmt,$sql)) {
				header("Location: news-add.php?error=sqlerror");
				exit();
				}else{
				mysqli_stmt_bind_param($stmt,"ssssss",$name,$description,$type,$filename,$postOn,$postBy);
				mysqli_stmt_execute($stmt);
				
				echo '<script type="text/javascript">alert("New City is Successfully Added");window.location = "news.php";</script>';								
				exit();
				}
			}else{
				$sql = "INSERT INTO `news`(`news_name`, `news_description`, `news_type`, `news_image`, `news_post_on`, `news_post_by`) VALUES (?,?,?,?,?,?)";
				mysqli_stmt_execute($stmt);
				if (!mysqli_stmt_prepare($stmt,$sql)) {
				header("Location: news-add.php?error=sqlerror");
				exit();
				}else{
				$image = 'img/no.jpg';
				mysqli_stmt_bind_param($stmt,"ssssss",$name,$description,$type,$image,$postOn,$postBy);
				mysqli_stmt_execute($stmt);
				
				echo '<script type="text/javascript">alert("New City is Successfully Added");window.location = "../news.php";</script>';								
				exit();
				}
			}
		}			
	}
mysqli_stmt_close($stmt);
mysqli_close($db);
}elseif (isset($_POST['news-type-submit'])) {
	
	if (empty($name)) {
		header("Location: news-type-add.php?error=emptyfields&name=".$name);
		exit();
	}else{
		$sql = "SELECT * FROM `news_type` WHERE `news_type_name` = ?";
		$stmt = mysqli_stmt_init($db);
		if (!mysqli_stmt_prepare($stmt,$sql)) {
			header("Location: news-type-add.php?error=sqlerror");
			exit();
		}else{
			mysqli_stmt_bind_param($stmt,"s",$name);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$resultCheck = mysqli_stmt_num_rows($stmt);
			if ($resultCheck > 0) {
				header("Location: news-type-add.php?error=newsTypeNameAlreadyPost");
				exit();
			}else{
				$sql = "INSERT INTO `news_type`(`news_type_name`) VALUES (?)";
				mysqli_stmt_execute($stmt);
				if (!mysqli_stmt_prepare($stmt,$sql)) {
				header("Location: news-type-add.php?error=sqlerror");
				exit();
				}else{
				mysqli_stmt_bind_param($stmt,"s",$name);
				mysqli_stmt_execute($stmt);
				
				echo '<script type="text/javascript">alert("New City Type is Successfully Added");window.location = "news-type.php";</script>';								
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