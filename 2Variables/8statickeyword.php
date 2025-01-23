<!DOCTYPE html>
<html>
   <head>
      <meta charset ="utf-8"> 
       
      <title> Ethio Programming </title>
   </head>
	<body>

		    <?php
				function myTest() {
				static $x = 0;
				echo $x;
				$x++;
				}

				myTest();
				echo "<br>";
				myTest();
				echo "<br>";
				myTest();
			?>

	</body>
</html> 