<?php 
	require 'config.php';
		$id = $_GET['id'];
		$sql="DELETE FROM video_gellery WHERE id = '$id'";
		$result = mysqli_query($conn,$sql);

		if ($result) {
			mysqli_close($result);
			header("location:admin-panel-7.php");
			// exit;
		}else {
			echo"Error deleting records";
		}
 ?>