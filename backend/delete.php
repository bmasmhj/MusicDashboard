<?php 

if(isset($_POST['deleteartist'])){
    $id = $_POST['deleteartist'];

    $sql = "DELETE FROM `artist` WHERE id= '$id' ";

    if($con->query($sql)){
       header('Location: ../artist.php?success');
   }

}


?>