<!DOCTYPE html>
<html>
   <head>
      <meta charset ="utf-8"> 
       
      <title> Ethio Programming </title>
   </head>
	<body>

		    <?php
				
				$x = 400;  
				$y = "400";
                var_dump($x == $y); // returns true because values are equal
                var_dump($x === $y); // returns false because types are not equal
				var_dump($x != $y); // returns false because values are equal
				var_dump($x <> $y); // returns false because values are equal
				var_dump($x !== $y); // returns true because types are not equal
				var_dump($x > $y); // returns true because $x is greater than $y
				var_dump($x < $y); // returns true because $x is less than $y
				var_dump($x >= $y); // returns true because $x is greater than or equal to $y
				var_dump($x <= $y); // returns true because $x is less than or equal to $y
			?>

	</body>
</html> 

