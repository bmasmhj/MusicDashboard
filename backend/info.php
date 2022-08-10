<?php 
require 'connection.php';

$musicgenresql = "SELECT  * FROM musicgenre ORDER BY id desc ";
$musicgenreresult = $con->query($musicgenresql);
$musicgenredata = [];
$genrecont = 0;

    if ($musicgenreresult->num_rows > 0) {
    while ($musicgenrerow = $musicgenreresult->fetch_assoc()) {
        $genrecont++;
        array_push($musicgenredata, $musicgenrerow);
    }
} 


$musicsql = "SELECT  * FROM music ORDER BY id desc ";
$musicresult = $con->query($musicsql);
$musicdata = [];
$musiccont = 0;
    if ($musicresult->num_rows > 0) {
    while ($musicrow = $musicresult->fetch_assoc()) {
        $musiccont++;
        array_push($musicdata, $musicrow);
    }
} 
$femusicsql = "SELECT  * FROM music WHERE status = 'featured' ";
$femusicresult = $con->query($femusicsql);
$femusicdata = [];
    if ($femusicresult->num_rows > 0) {
    while ($femusicrow = $femusicresult->fetch_assoc()) {
        array_push($femusicdata, $femusicrow);
    }
} 

$artistsql = "SELECT  * FROM artist ORDER BY id desc ";
$artistresult = $con->query($artistsql);
$artistdata = [];
$artistcont = 0;

    if ($artistresult->num_rows > 0) {
    while ($artistrow = $artistresult->fetch_assoc()) {
        $artistcont++;
        array_push($artistdata, $artistrow);
    }
} 

$usersql = "SELECT  * FROM usertable ORDER BY id desc ";
$userresult = $con->query($usersql);
$userdata = [];
$usercont = 0;

    if ($userresult->num_rows > 0) {
    while ($userrow = $userresult->fetch_assoc()) {
        $usercont++;
        array_push($userdata, $userrow);
    }
} 

    

$commentsql = "SELECT  * FROM comments ORDER BY id desc ";
$commentresult = $con->query($commentsql);
$commentdata = [];
$cmntcont = 0;

    if ($commentresult->num_rows > 0) {
    while ($commentrow = $commentresult->fetch_assoc()) {
        $cmntcont++;
        array_push($commentdata, $commentrow);
    }
} 

$commentzsql = "SELECT  * FROM comments ORDER BY id desc LIMIT 5 ";
$commentzresult = $con->query($commentzsql);
$commentzdata = [];
$cmntcont = 0;

    if ($commentzresult->num_rows > 0) {
    while ($commentzrow = $commentzresult->fetch_assoc()) {
        $cmntcont++;
        array_push($commentzdata, $commentzrow);
    }
} 


$rating_sql = "SELECT COUNT(id) FROM ratings ";
$rating_result = mysqli_query($con,$rating_sql);
$rating_row = mysqli_fetch_array($rating_result);
$rating_count = $rating_row[0];



$ratingsql = "SELECT  * FROM ratings ORDER BY id desc LIMIT 5";
$ratingresult = $con->query($ratingsql);
$ratingdata = [];
$cmntcont = 0;

    if ($ratingresult->num_rows > 0) {
    while ($ratingrow = $ratingresult->fetch_assoc()) {
        $cmntcont++;
        array_push($ratingdata, $ratingrow);
    }
} 


?>