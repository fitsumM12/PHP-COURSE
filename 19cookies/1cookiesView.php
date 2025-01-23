<!DOCTYPE html>
<html>
   <head>
      <meta charset ="utf-8"> 
       
      <title> Ethio Programming </title>
	  <style>
	     .error {color: #FF0000;}
	  </style>
   </head>
	<body>

		    <?php
			if(!isset($_COOKIE[$cookie_name])) {
				 echo "Cookie named '" . $cookie_name . "' is not set!";
			} else {
				 echo "Cookie '" . $cookie_name . "' is set!<br>";
				 echo "Value is: " . $_COOKIE[$cookie_name];
			}
			?>

	</body>
</html> 