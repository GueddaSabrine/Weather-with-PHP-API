<?php
session_start();
require '../connection.php'; // ou include mais include affiche le reste de la page meme si la connexion n'est pas réalisé. Require bloque tout.

if (isset($_SESSION['id'])) {
    $userId=$_SESSION['id'];
    $firstname= $_SESSION['firstname'];
    $lastname= $_SESSION['lastname'];
    $username =$_SESSION['username'];
	// $sql="SELECT * FROM user WHERE user_id='$userId';";
	// $result=mysqli_query($connection, $sql);


    // if (!$row=$result->fetch_assoc())
    // {
        
    //     echo json_encode(['success'=> false]);
        
    // }
    // else{
        echo json_encode(['success'=> true, 'id' => $userId, 'firstname'=> $firstname, 'lastname'=> $lastname, 'username'=>$username]);
    // }
}
else{
    echo json_encode(['success'=> false]);
}

?>