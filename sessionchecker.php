<?php 
session_start();
require 'backend/connection.php';
if(isset($_SESSION['musicadmmin']) & isset($_SESSION['adminpassword'])){
    $username = $_SESSION['musicadmmin'];
    $password = $_SESSION['adminpassword'];

    $chewckuser = "SELECT * FROM admin WHERE username = '$username'";
        $res = mysqli_query($con, $chewckuser);
        if(mysqli_num_rows($res) > 0){
            $fetch = mysqli_fetch_assoc($res);
            $fetch_pass = $fetch['password'];
            $adminname = $fetch['name'];
            
        }else{
            $err = 'User not found !';
        }
}
   else{
    header('Location: login.php');
} 

?>