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
			$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
			$txt = "Mickey Mouse\n";
			fwrite($myfile, $txt);
			$txt = "Minnie Mouse\n";
			fwrite($myfile, $txt);
			fclose($myfile);
			?>

	</body>
</html> 

