<?php require 'header.php' ?>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h3>Comments</h3>
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
                                                <th scope="col">Comments</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($commentdata as $key => $commentval ){ ?>
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
            </div>
    
    </div>
</div>
  <?php require 'footer.php'; ?>