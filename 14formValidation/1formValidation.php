<!DOCTYPE html>
<html>
   <head>
      <meta charset ="utf-8"> 
       
      <title> Ethio Programming </title>
   </head>
	<body>

		    <?php
				// define variables and set to empty values
				$name = $email = $gender = $comment = $website = "";

				if ($_SERVER["REQUEST_METHOD"] == "POST") {
				  $name = test_input($_POST["name"]);
				  $age = test_input($_POST["age"]);
				  $email = test_input($_POST["email"]);
				  $website = test_input($_POST["website"]);
				  $comment = test_input($_POST["comment"]);
				  $gender = test_input($_POST["gender"]);
				}

				function test_input($data) {
				  $data = trim($data);
				  $data = stripslashes($data);
				  $data = htmlspecialchars($data);
				  return $data;
				}
				
				function check_number($data)
				{
					
				   $x = gettype($x);
	              if($x=='integer'||$x=='float')
		            return $x;	
				}
				?>

				<h2>PHP Form Validation Example</h2>
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
				  Name: <input type="text" name="name">
				  <br><br>
				  age: <input type="text" name="age">
				  <br><br>
				  E-mail: <input type="text" name="email">
				  <br><br>
				  Website: <input type="text" name="website">
				  <br><br>
				  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
				  <br><br>
				  Gender:
				  <input type="radio" name="gender" value="female">Female
				  <input type="radio" name="gender" value="male">Male
				  <br><br>
				  <input type="submit" name="submit" value="Submit">  
				</form>

				<?php
				echo "<h2>Your Input:</h2>";
				echo $name;
				echo "<br>";
				echo $age;
				echo "<br>";
				echo $email;
				echo "<br>";
				echo $website;
				echo "<br>";
				echo $comment;
				echo "<br>";
				echo $gender;
			?>

	</body>
</html> 

