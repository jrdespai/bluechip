<!DOCTYPE html>

<!--	confirmleave.php
		Purpose:	Have the user confirm that they want to leave the team prior to removing them from that team in the database-->

<?php

	//Set location variable for navbar use
	$location = __FILE__;
	
	//Verify session, get DB info, add HTML page header, and add navbar
	include('../validate_session_sub.php');
	include('../connect.php');
	include('../navbar.php');
	include_once('../functions/functions.php');
	
?>

  <body>
		
		<div class="container-fluid bg-warning">
				<p>Do you really want to leave team: <?php echo $_GET['tid']; ?>?</p>
				<a href="removeuserteam.php"><button class="btn">Yes</button></a>
				<a href="myteams.php"><button class="btn">No</button></a>
		</div>
		
  </body>
  
  <?php
	//Close DB connection
	mysqli_close($conn);
  ?>
  
</html>