<?php require 'header.php';
 ?>
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
                                                <td><button class='btn btn-sm btn-danger text-white' onclick='deletemusic(<?php echo $musicval["id"]?>)'>Delete</button></td>
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

  <script>
    function deletemusic(id){
        if(confirm("Are you sure ? This music may contain ratings/comment")==true){
            window.location.href = 'backend/delete.php?deletemusic='+id;
        }
    }
    

    function musicstatus(id){
    var val =  $('#statchangedval_'+id).val();
    $.ajax({
    url : 'backend/update.php',
    data: {'changepstatus' : id, 'stat' : val},
    method : 'post',
    dataType : 'text',
    success :function (response){
            // $('#changestat_'+id).html(response);

            // alert(response);


        }
    });
    
    }
  </script>