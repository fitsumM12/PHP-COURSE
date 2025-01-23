<!DOCTYPE html>
<html>
   <head>
      <meta charset ="utf-8"> 
       
      <title> Ethio Programming </title>
   </head>
	<body>

		    <?php
				
				$x = 75;
				$y = 25;
				 
				function addition() {
					$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
				}
				 
				addition();
				echo $z;
        	?>

	</body>
</html> 

