<?php require 'loginbackend.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="dist/css/style.min.css" rel="stylesheet">

</head>
<body class='bg-dark    '>
    <div class="comtainer mt-5">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="card bg-transparent shadow-lg ">
                    <div class="card-body">
                        <h2 class='text-center text-white '>Admin Login</h2>
                        <p class='text-danger text-center'><?php if(isset($err)){ echo $err ;} ?></p>
                        <form action="#" method='post' >
                            <input type="text" name='username' required class='form-control text-white border-0 outline-light bg-transparent mt-3 ' value='<?php echo $username?>' style='    border-bottom: 1px solid #878080!important;' placeholder='Enter Username'>
                            <input type="password" name='password' required class='form-control text-white border-0 outline-light bg-transparent mt-3 ' style='    border-bottom: 1px solid #878080!important;' placeholder='Enter Password'>
                            <button type='submit' name='loginbtn' class='form-control border-success text-white bg-transparent mt-3  '>LOGIN</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>