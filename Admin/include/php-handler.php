<?php  
if (isset($_POST['province-submit'])) {

require 'conn.php';

$name = $_POST['name'];
$location =  $_POST['location'];
$description = $_POST['description'];

if (empty($name)||empty($location)||empty($description)) {
	header("Location: ../province-add.php?error=emptyfields&name=".$name."&location=".$location."&description=".$description);
	exit();
}
// else if (!preg_match("/^[a-zA-Z0-9]*$/",$name)) {
// 	header("Location: ../province-add.php?error=invalidname=".$name);
// 	exit();
// }
else{
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
			
			?>
			<script type="text/javascript">
				alert("New Province is Successfully Added");
				window.location = "../province.php";
			</script>
			<?php
			exit();
			}
		}
	}			
}
mysqli_stmt_close($stmt);
mysqli_close($db);

}
else{
	header("Location: ../province-add.php");
	exit();
}
?>