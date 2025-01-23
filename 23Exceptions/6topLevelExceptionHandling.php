<!DOCTYPE html>
<html>
   <head>
      <meta charset ="utf-8"> 
       
      <title> Ethio Programming </title>
   </head>
	<body>

		    <?php
				function myException($exception) {
				  echo "<b>Exception:</b> " . $exception->getMessage();
				}

				set_exception_handler('myException');

				throw new Exception('Uncaught Exception occurred');
			?>




	</body>
</html> 