<?php
require 'connection.php';

if(isset($_POST['changepstatus'])){
    $id =  $_POST['changepstatus'];
    $status = $_POST['stat'];
    $update = "UPDATE music SET status = '$status' WHERE id = '$id' ";
    if ($con->query($update)) {
        echo 'ok';
    }
}
?>
