<?php require 'header.php' ?>
<div class="page-wrapper">
    <div class="container-fluid">
    <h2>Add Music</h2>
        <div class="row mt-3">
        
            <div class="col-12">
                <?php  if(isset($_GET['success'])){
                    echo '<div class="alert alert-success" role="alert">
                       Music added Sucessfully, <a target="blank" href="../Music/Mus?c='.$_GET["success"].'" class="alert-link">click here </a>. to redirect to music.
                  </div>';        
                }
                    ?>
            
                <div class="card">
                    <div class="card-body">
                        <form action="backend/add.php" method='post' enctype="multipart/form-data" >


                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label for="">Title</label>
                                    <input  type="text" class='form-control ' placeholder='Enter  Title' name='tite' >
                                </div>
                                <div class="col-md-6">
                                    <label for="">Artist</label>
                                    <select name="artist" id="" class='form-control'>
                                        <option value="" selected disabled>-- SELECT ARTIST --</option>
                                    <?php foreach($artistdata as $key => $artistval ){ ?>
                                        <option value="<?php echo $artistval["name"]?>*<?php echo $artistval["id"]?>"><?php echo $artistval["name"]?></option>
                                    <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label for="">Version</label>
                                    <input  type="text" name='version' class='form-control  ' placeholder='( Radio )'>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Album</label>
                                    <input  type="text" name='album' class='form-control' placholder='  ' >
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
                                    <textarea  type="text" name='contributors' id="contributors" rows=1 cols=5 class="form-control" ></textarea>
                                </div>
                                
                            </div>
                            <div class="row mt-3">
                                <div class="col-6">
                                    <label for="">Thumbnail</label> <br>
                                    <input  type="file" name='thumbnail'>
                                </div>     
                                <div class="col-3">
                                    <label for="">Preview song</label> <br>
                                    <input  type="file" name='previewmusic'>
                                </div> 
                                <div class="col-3">
                                    <label for="">Duration (sec)</label>
                                    <div class="row">
                                        <div class="col-6">
                                            <input  type="number" min='0' value='10' class='form-control' name='duration'>
                                        </div>
                                        <div class="col-6">
                                            <h3>sec</h3>
                                        </div>
                                    </div>
                                </div>    
                            </div>
                            <div class="row mt-3">
                                <label for="">Genre</label>
                                <?php foreach($musicgenredata as $key => $musicgenreval ){ ?>
                                    <div class="col-3">
                                        <input  type="checkbox" name="musicgenre[]" id="<?php echo $musicgenreval["genre"]?>" value='<?php echo $musicgenreval["genre"]?>'> <?php echo $musicgenreval["genre"]?>
                                    </div>
                                    <?php } ?>
                            </div>
                       
                            <input  type="submit" value='ADD MUSIC' name='addnewmusic' class='btn btn-success text-white mt-3'>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
</div>
  <?php require 'footer.php'; ?> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/css/bootstrap-tokenfield.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/bootstrap-tokenfield.js"></script>
  <script>
$(document).ready(function(){

$('#contributors').tokenfield({ autocomplete:{  source: [
    
    <?php 
        foreach($artistdata as $key => $val ){
            echo "'".$val['name']."',";
        }
    
    ?>
    'Tiktok','Instagram','Facebook','Follow','Share','Like'

], delay:100},showAutocompleteOnFocus: true });});
</script>

<script>
        function fileValidation() {
            var fileInput =
                document.getElementById('file');
             
            var filePath = fileInput.value;
         
            // Allowing file type
            var allowedExtensions =
                    /(\.jpg|\.jpeg|\.png|\.gif)$/i;
             
            if (!allowedExtensions.exec(filePath)) {
                alert('Invalid file type');
                fileInput.value = '';
                return false;
            }
        }
    </script>