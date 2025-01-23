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
			$d1=mktime(11, 14, 54, 8, 12, 2014);
			echo "Created date is " . date("Y-m-d h:i:sa", $d1);
			
			$d2=strtotime("10:30pm April 15 2014");
			echo "Created date is " . date("Y-m-d h:i:sa", $d2);
			
			$d3=strtotime("tomorrow");
			echo date("Y-m-d h:i:sa", $d3) . "<br>";

			$d4=strtotime("next Saturday");
			echo date("Y-m-d h:i:sa", $d4) . "<br>";

			$d5=strtotime("+3 Months");
			echo date("Y-m-d h:i:sa", $d5) . "<br>";
			
			$startdate = strtotime("Saturday");
			$enddate = strtotime("+6 weeks", $startdate);

			while ($startdate < $enddate) {
			  echo date("M d", $startdate) . "<br>";
			  $startdate = strtotime("+1 week", $startdate);
			}
			?>
	</body>
</html> 

