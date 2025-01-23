
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
			// to change a session variable, just overwrite it
			$_SESSION["favcolor"] = "yellow";
			print_r($_SESSION);
			?>

	</body>
</html> 