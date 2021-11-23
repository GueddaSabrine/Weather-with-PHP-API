<?php 
session_start();
require '../connection.php';
if (isset($_POST['city']))
{
    $city =$_POST['city'];
    $sql="SELECT * FROM city WHERE city_name='$city';";
    $result=mysqli_query($connection, $sql);
    
    $userId= $_SESSION['id'];
    $row= $result->fetch_assoc();
  
        $cityId=$row['city_id'];
        $sql2="DELETE FROM appartenir WHERE city_id='$cityId' AND user_id = '$userId';";
        if(mysqli_query($connection, $sql2))
        {

            echo json_encode(['success'=> true]);   
        }
        else
        {
        echo json_encode(['success'=> false]);  
        } 
    
        
        
}
else
    {
    echo json_encode(['success'=> false]);  
    } 



?>