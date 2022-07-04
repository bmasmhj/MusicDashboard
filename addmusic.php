<?php require 'header.php' ?>
<div class="page-wrapper">
    <div class="container-fluid">
    <h2>Add Music</h2>
        <div class="row mt-3">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="backend/add.php" method='post' enctype="multipart/form-data" >


                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label for="">Title</label>
                                    <input type="text" class='form-control ' placeholder='Enter  Title' name='tite' >
                                </div>
                                <div class="col-md-6">
                                    <label for="">Artist</label>
                                    <select name="artist" id="" class='form-control'>
                                        <option value="" selected disabled>-- SELECT ARTIST --</option>
                                    <?php foreach($artistdata as $key => $artistval ){ ?>
                                        <option value="<?php echo $artistval["name"]?>"><?php echo $artistval["name"]?></option>
                                    <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label for="">Version</label>
                                    <input type="text" name='version' class='form-control  ' placeholder='( Radio )'>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Album</label>
                                    <input type="text" name='album' class='form-control' placholder='  ' >
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-6">
                                    <label for="">Released years ( A.D )</label>
                                    <select name="year" id="" class='form-control'>
                                    <?php 
                                    $year = date("Y");
                                    for($i = 0 ; $i<=2022 ; $i++ ) { ?>

                                       <option value="<?php echo $i; ?> " <?php if($year == $i ){ echo 'selected'; }?>><?php echo $i; ?></option>';
                                     <?php } ?>
                                </select>   
                                </div>
                                <div class="col-md-6">
                                    <label for="">Contributors</label>
                                    <input type="text" name='contributors' class='form-control  ' >
                                </div>
                                
                            </div>
                            <div class="row mt-3">
                                <div class="col-6">
                                    <label for="">Thumbnail</label> <br>
                                    <input type="file" name='thumbnail'>
                                </div>     
                                <div class="col-3">
                                    <label for="">Preview song</label> <br>
                                    <input type="file" name='music'>
                                </div> 
                                <div class="col-3">
                                    <label for="">Duration (sec)</label>
                                    <input type="number" class='form-control' name='duration'>
                                </div>    
                            </div>
                            <div class="row mt-3">
                                <label for="">Genre</label>
                                <?php foreach($musicgenredata as $key => $musicgenreval ){ ?>
                                    <div class="col-3">
                                        <input type="checkbox" name="apple[]" id="<?php echo $musicgenreval["genre"]?>" value='<?php echo $musicgenreval["genre"]?>'> <?php echo $musicgenreval["genre"]?>
                                    </div>
                                    <?php } ?>
                            </div>
                       
                            <input type="submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
</div>
  <?php require 'footer.php'; ?> 