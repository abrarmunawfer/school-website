<?php
session_start();
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: admin_login.php"); // Redirect to login page if not logged in
    exit();
}
?>

<?php 
	require 'config.php';
	$msg="";
	if (isset($_POST['submit'])) {
		$e_name=$_POST['EName'];
		$e_date=$_POST['EDate'];
		$e_time=$_POST['ETime'];
		$e_venue=$_POST['EVenue'];

		$target_dir="image/";
		$target_file=$target_dir.basename($_FILES['ELogo']["name"]);
		move_uploaded_file($_FILES['ELogo']["tmp_name"],$target_file);


		$sql ="INSERT INTO anualevents (event_name,event_date,event_time,event_venue,event_logo)VALUES(
		'$e_name','$e_date','$e_time','$e_venue','$target_file')";

		if (mysqli_query($conn,$sql)) {
			$msg="File Added to the Database Succesfully!";
		}
		else{
			$msg="Failed to add the file!";
		}
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Event</title>
	<link rel="stylesheet" type="text/css" href="style/style_for_add.css">
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h2 class="text-center">Add Events</h2>
				<form action="" method="post" class="p-2" enctype="multipart/form-data" id="form-box">
					<div class="form-group">
						<input type="text" name="EName" class="form-control" placeholder="File Name" required>
					</div>
					<div class="form-group">
						<input type="date" name="EDate" 
						class="form-control" placeholder="Date" required>
					</div>
					<div class="form-group">
						<input type="time" name="ETime" 
						class="form-control" placeholder="Time" required>
					</div>
					<div class="form-group">
						<input type="text" name="EVenue" 
						class="form-control" placeholder="Venue">
					</div>
					<div class="form-group">
						<div class="custom-file" style="margin-left: 8px;">
							<input type="file" name="ELogo" 
							class="custom-file-input" id="customFile" 
							accept="image/*">
							<label for="customFile" class="custom-file-label">Browse</label>
						</div>
						<div class="form-group">
							<input type="submit" name="submit" 
							class="btn-block" value="Add File" style="margin-left: 5px; margin-top: 8px">
						</div>
						<div class="form-group">
							<h4 class="text-center"><?= $msg; ?></h4>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="row2">
			<div class="col-md-6 mt-3 p-4 bg-light rounded">
				<a href="admin-panel-2.php" class="btn btn-block btn-lg" style="text-decoration: none; font-size: 20px; color:#000;">
				Go to Admin Panel</a>
			</div>
		</div>
	</div>

</body>
</html>