<?php 

require 'connection.php';

echo '<pre>';
print_r($_POST);
print_r($_FILES);

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
            $imageofrecord = "http://localhost/Music/assets/image/".$url;
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
?>