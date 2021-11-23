<?php
require 'connection.php';


$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$username=strtolower($_POST['username']);
$password=$_POST['password'];
$password2=$_POST['password2'];



if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['username']) && !empty($_POST['password'])&& isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['username']) && isset($_POST['password']))
{		
	if($password==$password2)
	{
		$options = [
			'cost' => 12,
		];
        $password_hashed = password_hash($password, PASSWORD_BCRYPT, $options);

		$sql="SELECT username FROM user WHERE username='$username';";


		$result=mysqli_query($connection,$sql);


		$check=mysqli_num_rows($result);
		if ($check>0) {
					header ("Location: register.php?info=exists");
					die();
		} else{

				$sql1="INSERT INTO user (firstname, lastname, username, password) VALUES ('$firstname', '$lastname','$username','$password_hashed');";
				$result1=mysqli_query($connection,$sql1);


				header("Location: login.php");


				}
	}
	else
{
	header("Location: register.php?info=errorPassword");
}			
}

else
{
	header("Location: register.php?info=error");
}
?>

