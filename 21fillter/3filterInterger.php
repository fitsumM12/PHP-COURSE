<!DOCTYPE html>
<html>
   <head>
      <meta charset ="utf-8"> 
       
      <title> Ethio Programming </title>
   </head>
	<body>

		    <?php
				$int = 100;

				if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
					echo("Integer is valid");
				} else {
					echo("Integer is not valid");
				}
			?>

	</body>
</html> 