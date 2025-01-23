
<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>
   <head>
      <meta charset ="utf-8"> 
       
      <title> Ethio Programming </title>
	  <style>
	     .error {color: #FF0000;}
	  </style>
   </head>
	<body>

		    <?php
			// remove all session variables
			session_unset();

			// destroy the session
			session_destroy();

			echo "All session variables are now removed, and the session is destroyed."
			?>

	</body>
</html> 