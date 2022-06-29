<?php 

if(isset($_POST['deleteartist'])){
    $id = $_POST['deleteartist'];

    $sql = "DELETE FROM `artist` WHERE id= '$id' ";

    if($con->query($sql)){
       header('Location: ../artist.php?success');
       exit;
   }

}

else  if(isset($_POST['deletegenre'])){
    $id = $_POST['deletegenre'];

    $sql = "DELETE FROM `musicgenre` WHERE id= '$id' ";

    if($con->query($sql)){
       header('Location: ../genres.php?success');
       exit;
   }

}


?>