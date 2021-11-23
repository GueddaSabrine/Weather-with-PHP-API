<?php 
session_start();
require '../connection.php';

$userId= $_SESSION['id'];

$sql="select city_name from city INNER JOIN appartenir ON city.city_id = appartenir.city_id
INNER JOIN user on user.user_id = appartenir.user_id where user.user_id = '$userId' ;";
$result=mysqli_query($connection,$sql);
$nombre=mysqli_num_rows($result);
if($nombre>0)
 {  
    $x=0;
    while ($ligne=mysqli_fetch_assoc($result)) {
     $city[$x]= $ligne['city_name'];
     $x =$x +1;
     }

    echo json_encode(['success'=> true, 'msj' => $city, 'nombre'=> $nombre ]);
 }
 else{
    echo json_encode(['success'=> false]);
 }

?>