<!DOCTYPE html>
<html>
   <head>
      <meta charset ="utf-8"> 
       
      <title> Ethio Programming </title>
   </head>
	<body>

		    <?php
				$ip = "127.0.0.1";

				if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
					echo("$ip is a valid IP address");
				} else {
					echo("$ip is not a valid IP address");
				}
			?>

	</body>
</html> 