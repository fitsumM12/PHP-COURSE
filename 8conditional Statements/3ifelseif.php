<!DOCTYPE html>
<html>
   <head>
      <meta charset ="utf-8"> 
       
      <title> Ethio Programming </title>
   </head>
	<body>

		    <?php
				
				$t = date("H");

				if ($t < "10") {
					echo "Have a good morning!";
				} elseif ($t < "20") {
					echo "Have a good day!";
				} else {
					echo "Have a good night!";
				}
        	?>

	</body>
</html> 

