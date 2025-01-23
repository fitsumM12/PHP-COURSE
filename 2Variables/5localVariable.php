<!DOCTYPE html>
<html>
   <head>
      <meta charset ="utf-8"> 
       
      <title> Ethio Programming </title>
   </head>
	<body>

		    <?php
				function myTest() {
					$x = 5; // local scope
					echo "<p>Variable x inside function is: $x</p>";
				}
				myTest();

				// using x outside the function will generate a logical error
				echo "<p>Variable x outside function is: $x</p>";
			?> 

	</body>
</html> 