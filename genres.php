<?php require 'header.php' ?>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h3>Genres List</h3>
                    </div>
                    <div class="card-body">
                        <form action="backend/add.php" method='post' enctype="multipart/form-data" >
                            <div class="row">
                                <div class="col-md-8">
                                    <input type="text" class='form-control' name='genre' required>
                                </div>
                                <div class="col-md-4">
                                        <button type='submit' class='btn btn-success text-white' name='addgenre'>Add</button>
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
                                                <th scope="col">Name</th>
                                                <th scope="col">Total</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($musicgenredata as $key => $musicgenreval ){ ?>
                                            <tr>
                                                <th id='musicgenrerow_<?php echo $musicgenreval["id"]?>'><?php echo $musicgenreval["genre"]?></th>
                                                <td><?php echo $musicgenreval["count"]?></td>
                                            
                                                <td><a href='backend/delete.php?deletegenre=<?php echo $musicgenreval["id"]?>'>Delete</a></td>
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