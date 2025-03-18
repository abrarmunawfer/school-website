<?php 
	require 'config.php';
		$id = $_GET['id'];
		$sql="DELETE FROM files WHERE id = '$id'";
		$result = mysqli_query($conn,$sql);

		if ($result) {
			mysqli_close($result);
			header("location:abr-admin-panel.php");
			
			// exit;
		}else {
			echo"Error deleting records";
		}
 ?>