<?php 
session_start();
require 'backend/connection.php';
$username = '';
if(isset($_SESSION['musicadmmin']) & isset($_SESSION['adminpassword'])){
    $username = $_SESSION['musicadmmin'];
    $password = $_SESSION['adminpassword'];
    header("Location: index.php"); 
exit;
}
if(isset($_POST['username']) &  isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $chewckuser = "SELECT * FROM admin WHERE username = '$username'";
        $res = mysqli_query($con, $chewckuser);
        if(mysqli_num_rows($res) > 0){
            $fetch = mysqli_fetch_assoc($res);
            $fetch_pass = $fetch['password'];
            if($fetch_pass == $password ){
                // $err = 'login succes';
                $_SESSION['musicadmmin'] = $username;
                $_SESSION['adminpassword'] = $password;
                header("Location: index.php"); 
                exit;

            }else {
                $_SESSION['musicadmmin'] = $username;
                $err = 'Password Incorrect';
            }
        }else{
            $err = 'User not found !';
        }
}



?>