
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
			// Echo session variables that were set on previous page
			echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
			echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
			?>
			
			<?php
			print_r($_SESSION);
			?>

	</body>
</html> 