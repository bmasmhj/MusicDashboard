<?php require 'header.php' ?>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h3>Users List</h3>
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
                                                <th scope="col">Name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Status</th>
                                             
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($userdata as $key => $userval ){ ?>
                                            <tr>
                                                <th id='userrow_<?php echo $userval["id"]?>'><?php echo $userval["name"]?></th>
                                                <td><?php echo $userval["email"]?></td>
                                                <td><?php echo $userval["status"]?></td>
                                               
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