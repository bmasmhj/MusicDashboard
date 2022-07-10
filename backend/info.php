<?php 
require 'connection.php';

$musicgenresql = "SELECT  * FROM musicgenre ORDER BY id desc ";
$musicgenreresult = $con->query($musicgenresql);
$musicgenredata = [];
    if ($musicgenreresult->num_rows > 0) {
    while ($musicgenrerow = $musicgenreresult->fetch_assoc()) {
        array_push($musicgenredata, $musicgenrerow);
    }
} 


$musicsql = "SELECT  * FROM music ORDER BY id desc ";
$musicresult = $con->query($musicsql);
$musicdata = [];
    if ($musicresult->num_rows > 0) {
    while ($musicrow = $musicresult->fetch_assoc()) {
        array_push($musicdata, $musicrow);
    }
} 

$artistsql = "SELECT  * FROM artist ORDER BY id desc ";
$artistresult = $con->query($artistsql);
$artistdata = [];
    if ($artistresult->num_rows > 0) {
    while ($artistrow = $artistresult->fetch_assoc()) {
        array_push($artistdata, $artistrow);
    }
} 

$usersql = "SELECT  * FROM usertable ORDER BY id desc ";
$userresult = $con->query($usersql);
$userdata = [];
    if ($userresult->num_rows > 0) {
    while ($userrow = $userresult->fetch_assoc()) {
        array_push($userdata, $userrow);
    }
} 

    

$commentsql = "SELECT  * FROM comments ORDER BY id desc ";
$commentresult = $con->query($commentsql);
$commentdata = [];
    if ($commentresult->num_rows > 0) {
    while ($commentrow = $commentresult->fetch_assoc()) {
        array_push($commentdata, $commentrow);
    }
} 



?>