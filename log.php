<?php
session_start();
require 'connection.php'; // ou include mais include affiche le reste de la page meme si la connexion n'est pas réalisé. Require bloque tout.


if (isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password'])  && !empty($_POST['password']))
{
	$username= strtolower($_POST['username']);
	$password=$_POST['password'];

	$sql="SELECT * FROM user WHERE username='$username';";
	$result=mysqli_query($connection, $sql);


    if (!$row=$result->fetch_assoc())
    {
    	header("Location: login.php?info=userdoesntexist");
	    die();
    } else
    {
			$hash=$row['password'];

			$check=password_verify($password, $hash);

			if($check)
			{
				$_SESSION['id']=$row['user_id'];
				$_SESSION['firstname']=$row['firstname'];
				$_SESSION['lastname']=$row['lastname'];
				$_SESSION['username']=$row['username'];

				header("Location: weather_user.php");
			}	

			else 
			{
			header("Location: login.php?info=wrong");
			die();
			}	
		
	}
}

else {
	header("Location: login.php?info=empty");
	die();
}


/* cod inutil
		<!--	if(!isset($_SESSION['id']))
				{		echo 'Numele meu este: '.$_SESSION['prenume'];
					}
				?>	 in locul paragrafului de mai sus, am putea sa punem in caz de autentificare altceva; -->*/
?>
