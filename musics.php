<?php require 'header.php' ?>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h3>Music List</h3>
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
                                                <th scope="col">Title</th>
                                                <th scope="col">Album</th>
                                                <th scope="col">Artist</th>
                                                <th scope="col">Release Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($musicdata as $key => $musicval ){ ?>
                                            <tr>
                                                <th id='musicrow_<?php echo $musicval["id"]?>'><?php echo $musicval["title"]?></th>
                                                <td><?php echo $musicval["album"]?></td>
                                                <td><?php echo $musicval["artist"]?></td>
                                                <td><?php echo $musicval["releasedate"]?></td>
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