<html>
<head>
	<title>MySQL connection with php</title>
</head>
<body>
	<?php
      $server_name='localhost';
      $user_name='root';
      $password="";
      $database="webb1";

      $connection=new mysqli($server_name,$user_name,$password,$database);
      if ($connection->connect_error) {
      	die("Unableto connect"	);
      }
      
     	echo "connected successfully";
		
			
		 $table="CREATE TABLE Student9(firstname VARCHAR(20), lastname VARCHAR(20), email VARCHAR(40))";
     if ($connection->query($table)===true) 
	 {
     	echo "table created successfully";
     }
	 else
	 {
     	echo "error".$connection->error;
	 }
	 
	
	 
		?>
</body>
</html>
