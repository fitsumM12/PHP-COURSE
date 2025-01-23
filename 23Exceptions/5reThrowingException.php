<!DOCTYPE html>
<html>
   <head>
      <meta charset ="utf-8"> 
       
      <title> Ethio Programming </title>
   </head>
	<body>

		    <?php
				class customException extends Exception {
				  public function errorMessage() {
					//error message
					$errorMsg = $this->getMessage().' is not a valid E-Mail address.';
					return $errorMsg;
				  }
				}

				$email = "someone@example.com";

				try {
				  try {
					//check for "example" in mail address
					if(strpos($email, "example") !== FALSE) {
					  //throw exception if email is not valid
					  throw new Exception($email);
					}
				  }
				  catch(Exception $e) {
					//re-throw exception
					throw new customException($email);
				  }
				}

				catch (customException $e) {
				  //display custom message
				  echo $e->errorMessage();
				}
			?>




	</body>
</html> 