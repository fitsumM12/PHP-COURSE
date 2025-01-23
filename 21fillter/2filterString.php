<!DOCTYPE html>
<html>
   <head>
      <meta charset ="utf-8"> 
       
      <title> Ethio Programming </title>
   </head>
	<body>

		    <?php
			$str = "<h1>Hello World!</h1>";
			$newstr = filter_var($str, FILTER_SANITIZE_STRING);
			echo $newstr;
			?>

	</body>
</html> 