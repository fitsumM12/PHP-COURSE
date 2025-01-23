<!DOCTYPE html>
<?php
setcookie("test_cookie", "test", time() + 3600, '/');
?>
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
			if(count($_COOKIE) > 0) {
				echo "Cookies are enabled.";
			} else {
				echo "Cookies are disabled.";
			}
			?>

	</body>
</html> 