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
    $ratingsql = "SELECT * FROM ratings WHERE userid = '$id' ";
    $ratingresult = $con->query($ratingsql);
        if ($ratingresult->num_rows > 0) {
        while ($ratingrow = $ratingresult->fetch_assoc()) {
            $rtid = $ratingrow['id'];
            $ratenum = $ratingrow['ratenumber'];
            $musicid = $ratingrow['musicid'];

            $sql1 = "DELETE FROM `ratings` WHERE id= '$rtid' ";
            if($con->query($sql1)){
                $sql = "UPDATE `music` SET  rating = rating-$ratenum , ratingcount = ratingcount-1 WHERE `id`='$musicid' ";
                if($con->query($sql)){
                    echo 'done';
                }
            }
        }
    } 

    $commentsql = "SELECT * FROM comments WHERE userid = '$id' ";
    $commentresult = $con->query($commentsql);
        if ($commentresult->num_rows > 0) {
        while ($commentrow = $commentresult->fetch_assoc()) {
            $cmntid = $commentrow['id'];
            $musicid = $commentrow['musicid'];
            $sql1 = "DELETE FROM `comments` WHERE id= '$cmntid' ";
            if($con->query($sql1)){
                $sql2 = "UPDATE `music` SET comments = comments-1  WHERE `id`='$musicid' ";
                if($con->query($sql2)){
                    echo 'deleted';
                }
            }
        }
    } 


    $sql = "DELETE FROM `usertable` WHERE id= '$id' ";

    if($con->query($sql)){
       header('Location: ../users.php?success');
       exit;
   }
   

}

else  if(isset($_GET['deleterating'])){
    $id = $_GET['deleterating'];


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