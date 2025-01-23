<!DOCTYPE html>
<html>
   <head>
      <meta charset ="utf-8"> 
       
      <title> Ethio Programming </title>
   </head>
	<body>

		     <?php
				if(!file_exists("welcome.txt")) {
				  die("File not found");
				} else {
				  $file=fopen("welcome.txt","r");
				}
			 ?>



	</body>
</html> 