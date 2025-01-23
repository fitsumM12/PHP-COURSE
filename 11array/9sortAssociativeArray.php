<!DOCTYPE html>
<html>
   <head>
      <meta charset ="utf-8"> 
       
      <title> Ethio Programming </title>
   </head>
	<body>

		    <?php
				
				$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
				asort($age);  //sort in ascending order according to the value

				foreach($age as $x => $x_value) {
					echo "Key=" . $x . ", Value=" . $x_value;
					echo "<br>";
				}
				
				ksort($age);  //sort in ascending order according to the key
				foreach($age as $x => $x_value) {
					echo "Key=" . $x . ", Value=" . $x_value;
					echo "<br>";
				}
				
				arsort($age);   //sort in descending order according to the value
				foreach($age as $x => $x_value) {
					echo "Key=" . $x . ", Value=" . $x_value;
					echo "<br>";
				}
				
				krsort($age);   //sort in descending order according to the key
				foreach($age as $x => $x_value) {
					echo "Key=" . $x . ", Value=" . $x_value;
					echo "<br>";
				}
        	?>

	</body>
</html> 

