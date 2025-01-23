<!DOCTYPE html>
<html>
   <head>
      <meta charset ="utf-8"> 
       
      <title> Ethio Programming </title>
   </head>
	<body>

		    <?php
				$x = 5;
				$y = 10;

				function myTest() {
					$GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
				}

				myTest();
				echo $y;
			?>

	</body>
</html> 