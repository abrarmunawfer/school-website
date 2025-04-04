<!DOCTYPE html>
<html>
<?php include('includes/header.php'); ?>
<head>


	<style>
		form {
	      margin: 12px 20px;
	    }

	    fieldset{
	      width: 70%;
	      margin-left: 15%;
	      border-color: #0077cc;
	    }
	    legend {
	      font-size: 35px;
	    }
	    .txt {
	      width: 100%;
	      padding: 12px 20px;
	      outline: none;
	      display: inline-block;
	      border-radius: 4px;
	      border: 2px solid #ccc;
	      box-sizing: border-box;
	      
	    }
	    .txt:hover {
	      width: 100%;
	      padding: 12px 20px;
	      display: inline-block;
	      outline: none;
	      border-radius: 4px;
	      border: 3px solid #0077cc;
	      box-sizing: border-box;
	    }
	    input[type=text], select{
	      width: 100%;
	      padding: 12px 20px;
	      display: inline-block;
	      border-radius: 4px;
	      border: 2px solid #ccc;
	      box-sizing: border-box;
	      
	  }
	    input[type=text]:hover{
	      width: 100%;
	      padding: 12px 20px;
	      display: inline-block;
	      outline: none;
	      border-radius: 4px;
	      border: 3px solid #0077cc;
	      box-sizing: border-box;
	  }
	  input[type=email], select{
	      width: 100%;
	      padding: 12px 20px;
	      display: inline-block;
	      border-radius: 4px;
	      border: 2px solid #ccc;
	      box-sizing: border-box;
	      
	  }
	    input[type=email]:hover{
	      width: 100%;
	      padding: 12px 20px;
	      display: inline-block;
	      outline: none;
	      border-radius: 4px;
	      border: 3px solid #0077cc;
	      box-sizing: border-box;
	  }
	  .btn {
	    width: 100%;
	    padding: 12px 20px;
	    outline: none;
	    border-radius: 4px;
	    background-color: #0077cc;
	    border: none;
	  }
	</style>
	
</head>

<body>
	
	<aside>
		<div class="container">
			<div class="row">
				<form action="mailto:info@abrtechnology.lk"
				method="POST" enctype="multipart/form-data">
					<fieldset>
						<legend>Contact Us here...</legend>
						Name:<br>
						<input type="text" placeholder="Contact Name" size="19"
						class="txtin"><br><br>
						E-mail:<br>
						<input type="email" placeholder="Contact Email" size="19"
						class="txtin"><br><br>
						Message:<br>
						<textarea placeholder="Leave your message here" rows="10" cols="20" class="txt"></textarea><br><br>
						<input type="submit" value="Send" class="btn">
					</fieldset>
				</form>
			</div>
		</div>
	</aside>

	<script>

		function myFunction() {
		  var x = document.getElementById("myTopnav");
		  if (x.className === "topnav") {
		    x.className += " responsive";
		  } else {
		    x.className = "topnav";
		  }
		}
	</script>

</body>
<?php include('includes/footer.php'); ?>
</html>