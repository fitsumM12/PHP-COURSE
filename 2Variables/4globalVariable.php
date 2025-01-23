<!DOCTYPE html>
<html>
   <head>
      <meta charset ="utf-8"> 
       
      <title> Ethio Programming </title>
   </head>
	<body>

		 <?php
			$x = 5; // global scope

			function myTest() {
				// using x inside this function will generate a logical error
				echo "<p>Variable x inside function is: $x</p>";
			}
			myTest();

			echo "<p>Variable x outside function is: $x</p>";
		?> 

	</body>
</html> 