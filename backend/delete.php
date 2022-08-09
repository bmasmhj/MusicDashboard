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
else  if(isset($_GET['deleteuser'])){
    $id = $_GET['deleteuser'];

    $sql = "DELETE FROM `usertable` WHERE id= '$id' ";

    if($con->query($sql)){
       header('Location: ../users.php?success');
       exit;
   }

}

else  if(isset($_GET['deleterating'])){
    $id = $_GET['deleterating'];

    $sql = "DELETE FROM `ratings` WHERE id= '$id' ";

    if($con->query($sql)){
       header('Location: ../ratings.php?success');
       exit;
   }

}
else  if(isset($_GET['deletecomment'])){
    $id = $_GET['deletecomment'];

    $sql = "DELETE FROM `comments` WHERE id= '$id' ";

    if($con->query($sql)){
       header('Location: ../comment.php?success');
       exit;
   }

}

else  if(isset($_GET['deletemusic'])){
    $id = $_GET['deletemusic'];
    $sql = "DELETE FROM `ratings` WHERE musicid= '$id' ";
    if($con->query($sql)){
        echo 'yes';
        $sql = "DELETE FROM `comments` WHERE musicid= '$id' ";
        if($con->query($sql)){
            echo 'yes';
            $sql = "DELETE FROM `music` WHERE id= '$id' ";
            if($con->query($sql)){
                echo 'yes';
       header('Location: ../musics.php?success');

                
        }
       }
   }

}


?>