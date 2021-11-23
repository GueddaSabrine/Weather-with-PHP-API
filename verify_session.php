<?php 
session_start();
if(isset($_SESSION['username']))
{
    echo json_encode(['success'=> true, 'userId'=> $_SESSION['id']]);
}
else {
    echo json_encode(['success'=> false]);
}

?>