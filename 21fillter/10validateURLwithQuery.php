<!DOCTYPE html>
<html>
   <head>
      <meta charset ="utf-8"> 
       
      <title> Ethio Programming </title>
   </head>
	<body>

		     <?php
				$url = "https://www.w3schools.com";

				if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
					echo("$url is a valid URL");
				} else {
					echo("$url is not a valid URL");
				}
			?> 



	</body>
</html> 