<?php
session_start();
require 'connection.php';


if (isset($_POST['city']))
{
    $city =$_POST['city'];
    $sql="SELECT * FROM city WHERE city_name='$city';";
    $result=mysqli_query($connection, $sql);
    
    $userId= $_SESSION['id'];
    $row= $result->fetch_assoc();
    if (!$row)
    {
        $sql2="INSERT INTO city (city_name) VALUES ('$city');";
        if(mysqli_query($connection,$sql2))
            {
                $sql3="SELECT * FROM city WHERE city_name='$city';";
                $result3=mysqli_query($connection,$sql3);
                $row3=$result3->fetch_assoc();

                $cityId = $row3['city_id'];
    
                $sql4="INSERT INTO appartenir (city_id, user_id) VALUES ('$cityId','$userId');";
                if (mysqli_query($connection,$sql4))
                {
                echo json_encode(['success'=> true, 'msj' => 'City added to favorites !']);
                }
                else {
                    echo json_encode(['success'=> false, 'msj'=>'An error has appeared !']);
                }
            }
        
        else {
                echo json_encode(['success'=> false, 'msj'=>'An error has appeared !']);
            }    
    }
    else {
            // we already have this city in city table
            
            $cityId = $row['city_id'];        
            
            $sql2="SELECT * FROM appartenir WHERE city_id='$cityId' AND user_id = '$userId';";
            $result2=mysqli_query($connection,$sql2);
            if(!$row2=$result2->fetch_assoc())
            {
                $sql3="INSERT INTO appartenir (user_id, city_id) VALUES ('$userId', '$cityId');";
                if (mysqli_query($connection,$sql3))
                {
                        echo json_encode(['success'=> true, 'msj'=>'City favorite added !']);
                    }
                else {
                        echo json_encode(['success'=> false, 'msj'=>'An error has appeared !']);
                        }
                }
            else {
                echo json_encode(['success'=> false, 'msj'=> 'You already have this city in favorites.']);               
            }
        }
}
else {
    echo json_encode(['success'=> false, 'msj'=>'']);

}

?>