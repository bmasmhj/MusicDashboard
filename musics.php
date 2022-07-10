<?php require 'header.php' ?>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-12">
                <div class="card">
                    <div class="card-body ">
                        <h3 class='d-inline'>Music List</h3>
                        <a href='addmusic.php' class='btn btn-success float-end text-white'>Add Music</a>
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
                                                <th scope="col">Thumbnail</th>
                                                <th scope="col">Title</th>
                                                <th scope="col">Album</th>
                                                <th scope="col">Artist</th>
                                                <th scope="col">Contributor</th>
                                                <th scope="col">Release Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($musicdata as $key => $musicval ){ ?>
                                            <tr id='musicrow_<?php echo $musicval["id"]?>'>
                                                <td > <img style="width:50px; height:50px"  src="<?php echo $musicval["img"]?>" alt=""></td>
                                                <th ><?php echo $musicval["title"]?></th>
                                                <td><?php echo $musicval["album"]?></td>
                                                <td><?php echo $musicval["artist"]?></td>
                                                <td><?php echo $musicval["contributor"]?></td>
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