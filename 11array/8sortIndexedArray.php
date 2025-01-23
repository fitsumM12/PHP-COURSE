<!DOCTYPE html>
<html>
   <head>
      <meta charset ="utf-8"> 
       
      <title> Ethio Programming </title>
   </head>
	<body>

		    <?php
				
				$cars = array("Volvo", "BMW", "Toyota");
				sort($cars);  //sort string in ascending order

				$clength = count($cars);
				for($x = 0; $x < $clength; $x++) {
					echo $cars[$x];
					echo "<br>";
				}
				
				
				$numbers = array(4, 6, 2, 22, 11);
				sort($numbers);  //sort numbers in ascending order

				$arrlength = count($numbers);
				for($x = 0; $x < $arrlength; $x++) {
					echo $numbers[$x];
					echo "<br>";
				}
				
				rsort($cars);   //sort string in descending order
				$clength = count($cars);
				for($x = 0; $x < $clength; $x++) {
					echo $cars[$x];
					echo "<br>";
				}
				
				rsort($numbers);  //sort numbers in descending order
                $arrlength = count($numbers);
				for($x = 0; $x < $arrlength; $x++) {
					echo $numbers[$x];
					echo "<br>";
				}
				
				
        	?>

	</body>
</html> 

