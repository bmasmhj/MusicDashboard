<?php 
require 'connection.php';

if(isset($_GET['deleteartist'])){
    $id = $_GET['deleteartist'];

    $sql = "DELETE FROM `artist` WHERE id= '$id' ";

    if($con->query($sql)){
       header('Location: ../artist.php?success');
       exit;
   }

}

else  if(isset($_GET['deletegenre'])){
    $id = $_GET['deletegenre'];

    $sql = "DELETE FROM `musicgenre` WHERE id= '$id' ";

    if($con->query($sql)){
       header('Location: ../genres.php?success');
       exit;
   }

}


?>