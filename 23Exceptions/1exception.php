<!DOCTYPE html>
<html>
   <head>
      <meta charset ="utf-8"> 
       
      <title> Ethio Programming </title>
   </head>
	<body>

		     <?php
				//create function with an exception
				function checkNum($number) {
				  if($number>1) {
					throw new Exception("Value must be 1 or below");
				  }
				  return true;
				}

				//trigger exception
				checkNum(2);
			 ?>




	</body>
</html> 