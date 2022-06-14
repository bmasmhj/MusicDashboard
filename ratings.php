<?php require 'header.php' ?>
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
                                                <td><?php echo $ratingval["ratenumber"]?></td>
                                                <td>Delete/Edit</td>
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
</div>
  <?php require 'footer.php'; ?>