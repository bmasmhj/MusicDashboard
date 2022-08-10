<?php require 'header.php'; 
  $statsarr = array("active","featured");
  ?>
<link rel="stylesheet" href="../Music/assets/css/star-rating-svg.css">   

<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h3>Dashboard</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <div class="card">
                    <div class="card-body">
                        <h4>Artist</h4>
                        <?php echo $artistcont ?>

                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card">
                    <div class="card-body">
                        <h4>Genre</h4>
                        <?php echo $genrecont ?>

                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card">
                    <div class="card-body">
                        <h4>Music</h4>
                        <?php echo $musiccont ?>

                    </div>
                </div>
            </div>  
            <div class="col-md-2">
                <div class="card">
                    <div class="card-body">
                        <h4>Ratings</h4>
                        <?php echo $rating_count ?>

                    </div>
                </div>
            </div>  
            <div class="col-md-2">
                <div class="card">
                    <div class="card-body">
                        <h4>Comments</h4>
                        <?php echo $cmntcont ?>

                    </div>
                </div>
            </div>   
            <div class="col-md-2">
                <div class="card">
                    <div class="card-body">
                        <h4>Users</h4>
                        <?php echo $usercont ?>

                    </div>
                </div>
            </div>        

        </div>
        <div class="row">
        <h4>Featured Music</h4>

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive"  style='height:460px!important ; overflow:auto'>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Thumbnail</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Album</th>
                                        <th scope="col">Artist</th>
                                        <th scope="col">Contributor</th>
                                        <th scope="col">Release Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($femusicdata as $key => $musicval ){ ?>
                                    <tr id='musicrow_<?php echo $musicval["id"]?>'>
                                        <td > <img style="width:50px; height:50px"  src="<?php echo $musicval["img"]?>" alt=""></td>
                                        <th ><?php echo $musicval["title"]?></th>
                                        <td><?php echo $musicval["album"]?></td>
                                        <td><?php echo $musicval["artist"]?></td>
                                        <td><?php echo $musicval["contributor"]?></td>
                                        <td><?php echo $musicval["releasedate"]?></td>
                                        <td>
                                        <select name="" onchange="musicstatus(<?php echo $musicval['id']?>)" class="form-control" id="statchangedval_<?php echo $musicval['id']?>">
                                            <?php 
                                                foreach($statsarr as $key => $statval){
                                                    if( $musicval['status'] == $statval){
                                                        echo '<option selected>'.$statval.'</option>';

                                                    }else{
                                                        echo '<option>'.$statval.'</option>';

                                                    }
                                                }
                                            ?>

                                        </select>
                                        </td>
                                    </tr>
                                <?php } ?>   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <h4>Recent Comments</h4>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Email</th>
                                        <th scope="col">Music</th>
                                        <th scope="col">Comments</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($commentzdata as $key => $commentval ){ ?>
                                    <tr>
                                        <th id='commentrow_<?php echo $commentval["id"]?>'><?php echo $commentval["email"]?></th>
                                        <td><?php echo $commentval["musiccode"]?></td>
                                        <td><?php echo $commentval["comment"]?></td>
                                        <td><a href='backend/delete.php?deletecomment=<?php echo $commentval["id"]?>'>Delete</a></td>
                                    </tr>
                                <?php } ?>   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
        <h4>Recent Ratings</h4>
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
 
 