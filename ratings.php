<?php require 'header.php' ?>
<link rel="stylesheet" href="../Music/assets/css/star-rating-svg.css">   
<?php require 'pagination.php' ?>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h3>Ratings List</h3>
                    </div>
                </div>
            </div>
        </div>
         <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Email</th>
                                                <th scope="col">Music</th>
                                                <th scope="col">Ratings</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($ratingdata as $key => $ratingval ){ ?>
                                            <tr>
                                                <th id='ratingrow_<?php echo $ratingval["id"]?>'><?php echo $ratingval["email"]?></th>
                                                <td><?php echo $ratingval["musiccode"]?></td>
                                                <td> <span class='my-rating_<?php echo $ratingval["id"]?>'></span>  </td>
                                                <td><a href='backend/delete.php?deleterating=<?php echo $ratingval["id"]?>'>Delete</a></td>
                                            </tr>
                                       <?php } ?>   
                                        </tbody>
                                    </table>
                                </div>
                                <h3>Pagination</h3>
                                <?php
                                    for($page = 1; $page<= $number_of_page; $page++) {  
                                        echo '<a href = "ratings.php?page=' . $page . '">' . $page . ' </a>';  
                                    }  
                                        ?>                                
                    
                            </div>
                           
                        </div>
                    </div>
           
                </div>
            </div>
    
    </div>
</div>
  <?php require 'footer.php'; ?>
  <script src='../Music/assets/js/jquery.star-rating-svg.min.js'></script>
<script src='../Music/assets/js/jquery.star-rating-svg.js'></script>

  <script>
    
   <?php foreach($ratingdata as $key => $ratingval ){ ?>
    var inirate = <?php echo  $ratingval["ratenumber"] ?>;
    var id = <?php echo  $ratingval["id"]  ?>;
        $(".my-rating_"+id).starRating({
            starSize: 20,
            initialRating: inirate,
            readOnly: true
            });
    <?php } ?>   

  </script>


