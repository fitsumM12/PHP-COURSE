<!DOCTYPE html>
<html>
   <head>
      <meta charset ="utf-8"> 
       
      <title> Ethio Programming </title>
   </head>
	<body>

		    <?php
				
				function setHeight($minheight = 50) {
					echo "The height is : $minheight <br>";
				}

				setHeight(350);
				setHeight(); // will use the default value of 50
				setHeight(135);
				setHeight(80);
        	?>

	</body>
</html> 

