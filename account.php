<?php
$server_name="localhost";
$username="root";
$password="";

$database_name="register";

$conn=mysqli_connect($server_name,$username,$password,$database_name);

if(!$conn)
{ 
die("Connection Failed:" .mysqli_connect_error());
}

if(isset($_POST['save']))
{
$username= $_POST['username'];
$age= $_POST['age'];
$date= $_POST['date'];
$phone= $_POST['phone'];
$email= $_POST['email'];
$password= $_POST['password'];
$confirm password= $_POST['confirm password'];

$sql_query1="CREATE TABLE create_account5(username varchar(50),age int, date date,phone varchar(24), email(24),password varchar(24),Confirm password int)";
 if ($conn->query($sql_query1)===true) 
	 {
     	echo "table created successfully";
     }
	 else
	 {
     	echo "error".$conn->error;
	 }
	 
$sql_query="INSERT INTO create_account5 (username,age,date,phone,email,password,confirm password)
VALUES('$username','$age','$date','$phone','$email','$password','$confirm password')";

if(mysqli_query($conn, $sql_query))
{
	echo "Registerd successfully! now you can login your account";
}
else
{
	echo "Error:" .$sql. "".mysqli_error($conn);
}
mysqli_close($conn);
}
?>