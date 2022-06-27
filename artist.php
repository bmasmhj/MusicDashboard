<?php require 'header.php' ?>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h3>Artist List</h3>
                    </div>
                    <div class="card-body">
                        <form action="backend/add.php" method='post' enctype="multipart/form-data" >
                            <div class="row">
                                <div class="col-3">
                                <input type="file" class='form-control' name='artistimg' required>
                                </div>
                                <div class="col-6">
                                <input type="text" name='artistname'required placeholder='Artist Name' required class='form-control'>
                                </div>
                                <div class="col-3">
                                <button type='submit' name='addartist' class='btn btn-success text-white'>Add </button>

                                </div>

                            </div>
                        </form>
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