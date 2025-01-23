<!DOCTYPE html>
<html>
   <head>
      <meta charset ="utf-8"> 
       
      <title> Ethio Programming </title>
   </head>
	<body>

		    <?php
				
				$cars = array("Volvo", "BMW", "Toyota");
				$arrlength = count($cars);

				for($x = 0; $x < $arrlength; $x++) {
					echo $cars[$x];
					echo "<br>";
				}
        	?>

	</body>
</html> 

