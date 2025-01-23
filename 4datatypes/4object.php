<!DOCTYPE html>
<html>
   <head>
      <meta charset ="utf-8"> 
       
      <title> Ethio Programming </title>
   </head>
	<body>

		    <?php
				class Car {
					function Car() {
						$this->model = "VW";
					}
				}

				// create an object
				$herbie = new Car();

				// show object properties
				echo $herbie->model;
			?>

	</body>
</html> 

