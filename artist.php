<?php require 'header.php' ?>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h3>Artist List</h3>
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
                                                <th scope="col">Image</th>
                                                <th scope="col">Name</th>
                                             
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($artistdata as $key => $artistval ){ ?>
                                            <tr>
                                                <th id='artistrow_<?php echo $artistval["id"]?>'><img src='<?php echo $artistval["img_url"]?>' style="width:50px; height:50px"></th>
                                                <td><?php echo $artistval["name"]?></td>
                                           
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