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
			$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
			// Output one line until end-of-file
			while(!feof($myfile)) {
			  echo fgets($myfile) . "<br>";
			}
			fclose($myfile);
			?>

	</body>
</html> 
