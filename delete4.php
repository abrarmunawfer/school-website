<?php 
	require 'config.php';
		$id = $_GET['id'];
		$sql="DELETE FROM coactivity WHERE id = '$id'";
		$result = mysqli_query($conn,$sql);

		if ($result) {
			mysqli_close($result);
			header("location:admin-panel-4.php");
			// exit;
		}else {
			echo"Error deleting records";
		}
 ?>