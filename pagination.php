<?php
   $conn = mysqli_connect('localhost', 'root', '');  
   if (! $conn) {  
die("Connection failed" . mysqli_connect_error());  
   }  
   else {  
mysqli_select_db($conn, 'music');  
   }  
//define total number of results you want per page  
    $results_per_page = 20;  
  
    //find the total number of results stored in the database  
    $query = "select *from ratings";  
    $result = mysqli_query($conn, $query);  
    $number_of_result = mysqli_num_rows($result);  
  
    //determine the total number of pages available  
    $number_of_page = ceil ($number_of_result / $results_per_page);  
  
    //determine which page number visitor is currently on  
    if (!isset ($_GET['page']) ) {  
        $page = 1;  
    } else {  
        $page = $_GET['page'];  
    }  
  
    //determine the sql LIMIT starting number for the results on the displaying page  
    $page_first_result = ($page-1) * $results_per_page;  
  


    $ratingsql = "SELECT * FROM ratings LIMIT " . $page_first_result . ',' . $results_per_page;  
    $ratingresult = $con->query($ratingsql);
    $ratingdata = [];
        if ($ratingresult->num_rows > 0) {
        while ($ratingrow = $ratingresult->fetch_assoc()) {
            array_push($ratingdata, $ratingrow);
        }
    } 
  


    //display the link of the pages in URL  

    ?>