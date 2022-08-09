<?php 

require 'connection.php';



if(isset($_POST['artistname'])){
    $artistname = $_POST['artistname'];

    if (isset($_FILES['artistimg'])) {
        $tmpFilePath = $_FILES['artistimg']['tmp_name'];
        if ($tmpFilePath != ""){
          $maxsize = 524288895959;
          $extsAllowed = array( 'jpg', 'jpeg', 'png' );
          $uploadedfile = $_FILES['artistimg']['name'];
          $extension = pathinfo($uploadedfile, PATHINFO_EXTENSION);
          if (in_array($extension, $extsAllowed) ) {
            $newpicture = uniqid();
            $url = $newpicture.$uploadedfile ;
            $imgname = "../../Music/assets/image/".$url;
            $result = move_uploaded_file($_FILES['artistimg']['tmp_name'], $imgname);
            $imageofrecord = "http://localhost/Music/assets/image/artist/".$url;
          }
      }
      else{
          echo "file unp";
      }
    }


    $sql = "INSERT INTO `artist`( `name`, `img_url`) VALUES ('$artistname','$imageofrecord')";

 if($con->query($sql)){
    header('Location: ../artist.php?success');
  }



}
else if(isset($_POST['addgenre'])){
  print_r($_POST);
  $genre = $_POST['genre'];
  $sql = "INSERT INTO `musicgenre`(`genre`, `count`) VALUES ('$genre','0')";
  if($con->query($sql)){
    header('Location: ../genres.php?success');
}
}
else if(isset($_POST['addnewmusic'])){
  echo '<pre>';
print_r($_POST);
print_r($_FILES);
  $tite = $_POST['tite'];
  $artist = $_POST['artist'];  
  $version = $_POST['version'];  
  $album = $_POST['album'];  
  $year = $_POST['year'];  
  $musicgenre = $_POST['musicgenre'];  

  $contributors = $_POST['contributors'];  
  $duration = $_POST['duration'];  

  $musiccode = str_replace(' ','_',$tite);

  list($artistname , $artistid) = explode("*", $artist);



  echo $musiccode;
  
  $newmusicgenre = '';
  for($i = 0 ; $i < count($musicgenre) ; $i++ ){
    if($i==0){
      $newmusicgenre = $musicgenre[$i];
    }
    $newmusicgenre = $newmusicgenre.', '.$musicgenre[$i];
  }
  echo $newmusicgenre;
  if (isset($_FILES['thumbnail'])) {
    $tmpFilePath = $_FILES['thumbnail']['tmp_name'];
    if ($tmpFilePath != ""){
      $maxsize = 524288895959;
      $extsAllowed = array( 'jpg', 'jpeg', 'png' );
      $uploadedfile = $_FILES['thumbnail']['name'];
      $extension = pathinfo($uploadedfile, PATHINFO_EXTENSION);
      if (in_array($extension, $extsAllowed) ) {
        $newpicture = uniqid();
        $url = $newpicture.$uploadedfile ;
        $imgname = "../../Music/assets/image/thumbnail/".$url;
        $result = move_uploaded_file($_FILES['thumbnail']['tmp_name'], $imgname);
        $thumblink = "http://localhost/Music/assets/image/thumbnail/".$url;
      }
  }
  else{
      echo "file unp err ";
  }
}

  if (isset($_FILES['previewmusic'])) {
    $tmpFilePath = $_FILES['previewmusic']['tmp_name'];
    if ($tmpFilePath != ""){
      $maxsize = 524288895959;
      $extsAllowed = array( 'mp3' );
      $uploadedfile = $_FILES['previewmusic']['name'];
      $extension = pathinfo($uploadedfile, PATHINFO_EXTENSION);
      if (in_array($extension, $extsAllowed) ) {
        $newpicture = uniqid();
        $url = $newpicture.$uploadedfile ;
        $imgname = "../../Music/assets/preview/".$url;
        $result = move_uploaded_file($_FILES['previewmusic']['tmp_name'], $imgname);
        $prevlink = "http://localhost/Music/assets/preview/".$url;
      }
  }
  else{
      echo "file unp";
  }
}

    $sql = "INSERT INTO `music`( `musiccode`, `title`, `version`, `album`, `img`, `duration`, `artist`, `artistid`, `preview`, `contributor`, `status`, `releasedate`, `genre`, `rating`, `ratingcount`, `comments`) VALUES 
                                ('$musiccode','$tite','$version','$album','$thumblink','$duration','$artistname','$artistid','$prevlink','$contributors','0','$year','$newmusicgenre','0','0','0')";
    if($con->query($sql)){
      header('Location: ../addmusic.php?success='.$musiccode);
      echo 'done';
  }


}

?>