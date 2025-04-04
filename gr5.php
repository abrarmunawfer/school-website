<!DOCTYPE html>
<?php include('includes/header.php'); ?>
<html>
<head>
	
	<style>
		aside {
	      width: 100%;
	      height: 100%;
	    }

	    .card {
	      border: 1px solid #000;
	      margin: 8px;
	      width: 70%;
	      vertical-align: middle;
	      border-radius: 25px;
	    }
	    .left {
	      float: left;
	      width: 30%;
	    }
	    .left img{
	      width: 200px;
	      border-radius: 10px;
	      vertical-align: middle;
	    }

	    .right {
	      float: right;
	      width: 70%;
	    }
	    .right p {
	      vertical-align: middle;
	    }
	    .card-title {
	      text-align: center;
	    }
	    @media screen and (max-width: 800px) {
			.left {
		      width: 100%;
		    }
		    .left img{
		      border-radius: 10px;
		      vertical-align: middle;
		    }

		    .right {
		      width: 100%;
		    }
		    .right p {
		      vertical-align: middle;
		    }
		    .card-title {
		      text-align: center;
		    }
			}

			/* Style the tab */
			.tab {
			  overflow: hidden;
			  width: 100%;

			  border-bottom: 1px solid #0077cc;
			}

			/* Style the buttons inside the tab */
			.tab button {
			  background-color: inherit;
			  float: left;
			  border: none;
			  width: 50%;
			  outline: none;
			  border-top-left-radius: 25px;
			  border-top-right-radius: 25px;
			  cursor: pointer;
			  padding: 14px 16px;
			  transition: 0.3s;
			  font-size: 17px;
			}

			/* Change background color of buttons on hover */
			.tab button:hover {
			  background-color: #0077cc;
			}

			/* Create an active/current tablink class */
			.tab button.active {
			  background-color: #0077cc;
			}

			/* Style the tab content */
			.tabcontent {
			  display: none;
			  padding: 6px 12px;
			  border-top: none;
			}
	</style>
	
</head>

<body>
	
	<br>

	<div class="tab">
		  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Image Gallery</button>
		  <button class="tablinks" onclick="openCity(event, 'Paris')">Video Gallery</button>
		</div>

		<div id="London" class="tabcontent">
		  <aside>
		    <?php 
		      require 'config.php';
		      $sql="SELECT * FROM `achievements` WHERE `achievements`.`achievements_grade` = 'Grade 05' ORDER BY `id` DESC";
		      $result = mysqli_query($conn,$sql);
		       ?>

		       <div class="container">
		        <div class="row">
		          <?php
		          while ($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) {
		          ?>
		          <div class="col-lg">
		            <center>
		              <div class="card">
		              <div class="border">
		                <h3 class="card-title"><?= $row['achievements_name'];?></h3><hr width="100%">
		                <div class="divider">
		                  <div class="left">
		                    <center>
		                      <img src="<?= $row['achievements_logo'];?>" width="200px">
		                      
		                    </center>
		                    
		                  </div>
		                  <div class="right">
		                    <p class="card-title" style="font-size: 12px;">
		                    <?= $row['achievements_description'];?></p>
		                  </div>
		                </div>
		              </div><hr width="100%" 
		              style="border: none;">
		            </div>
		            </center>
		            
		          <?php } ?>
		          </div><br>
		        </div>
		       </div><br>

	    </aside>
	</div>

	<div id="Paris" class="tabcontent">
	<aside>
	    <?php 
	      require 'config.php';
	      $sql="SELECT * FROM `video_gellery` WHERE `video_gellery`.`video_grade` = 'Grade 05' ORDER BY `id` DESC";
	      $result = mysqli_query($conn,$sql);
	       ?>

	       <div class="container">
	        <div class="row">
	          <?php
	          while ($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) {
	          ?>
	          <div class="col-lg">
	            <center>
	              <div class="card">
	              <div class="border">
	                <h3 class="card-title"><?= $row['video_title'];?></h3><hr width="100%">
	                <div class="divider">
	                  <div class="left">
	                    <center>
	                    	<video style="width: 200px;" src="<?= $row['video_file'];?>" controls></video>                      
	                    </center>
	                    
	                  </div>
	                  <div class="right">
	                    <p class="card-title" style="font-size: 12px;">
	                    <?= $row['video_description'];?></p>
	                  </div>
	                </div>
	              </div><hr width="100%" 
	              style="border: none;">
	            </div>
	            </center>
	            
	          <?php } ?>
	          </div><br>
	        </div>
	       </div><br>

	    </aside>
	</div>
	<script>

		function myFunction() {
		  var x = document.getElementById("myTopnav");
		  if (x.className === "topnav") {
		    x.className += " responsive";
		  } else {
		    x.className = "topnav";
		  }
		}

		function openCity(evt, cityName) {
		  var i, tabcontent, tablinks;
		  tabcontent = document.getElementsByClassName("tabcontent");
		  for (i = 0; i < tabcontent.length; i++) {
		    tabcontent[i].style.display = "none";
		  }
		  tablinks = document.getElementsByClassName("tablinks");
		  for (i = 0; i < tablinks.length; i++) {
		    tablinks[i].className = tablinks[i].className.replace(" active", "");
		  }
		  document.getElementById(cityName).style.display = "block";
		  evt.currentTarget.className += " active";
		}

		// Get the element with id="defaultOpen" and click on it
		document.getElementById("defaultOpen").click();
	</script>

</body>

<?php include('includes/footer.php'); ?>
</html>