<?php
session_start();
require '../connection.php'; // ou include mais include affiche le reste de la page meme si la connexion n'est pas réalisé. Require bloque tout.
    
$userId= $_SESSION['id'];

if (isset($_POST['firstname']))
{
    $firstname=$_POST['firstname'];

    $sql= "UPDATE user SET firstname = '$firstname' WHERE user_id=$userId";
    if(mysqli_query($connection, $sql))
    {
        $_SESSION['firstname']= $firstname;

        echo json_encode(['success'=> true]);   
    }
    else{
    echo json_encode(['success'=> false]);
}
    // echo json_encode(['success'=> true , 'elem'=>$_POST['firstname'] ]);
}
else if (isset($_POST['lastname']))
{
    $lastname=$_POST['lastname'];

    $sql= "UPDATE user SET lastname = '$lastname' WHERE user_id=$userId";
    if(mysqli_query($connection, $sql))
    {
        $_SESSION['lastname'] = $lastname;

        echo json_encode(['success'=> true]);   
    }
    else{
    echo json_encode(['success'=> false]);
}
    // echo json_encode(['success'=> true, 'elem'=>$_POST['lastname'] ]);
}
else if (isset($_POST['username']))
{
    $username=$_POST['username'];

    $sql= "UPDATE user SET username = '$username' WHERE user_id=$userId";
    if(mysqli_query($connection, $sql))
    {
        $_SESSION['username'] = $username;
        echo json_encode(['success'=> true]);   
    }
    else{
    echo json_encode(['success'=> false]);
}
    // echo json_encode([ 'success'=> true, 'elem'=>$_POST['username'] ]);
}
else {
    echo json_encode(['success'=> false ]);
}


?>