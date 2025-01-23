<!DOCTYPE html>
<html>
   <head>
      <meta charset ="utf-8"> 
       
      <title> Ethio Programming </title>
   </head>
	<body>

		     <?php
			//error handler function
			function customError($errno, $errstr) {
			  echo "<b>Error:</b> [$errno] $errstr";
			}

			//set error handler
			set_error_handler("customError");

			//trigger error
			echo($test);
			?>



	</body>
</html> 