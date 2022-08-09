<?php require 'sessionchecker.php' ?>
<?php require 'backend/info.php' ?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Music Dashboard">
    <meta name="robots" content="noindex,nofollow">
    <title>Music Dashboard</title>
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <link href="dist/css/style.min.css" rel="stylesheet">

    <link href="assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">


</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
      
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                 
                    <a class="navbar-brand" href="index.php">
                      
                        <span class="p-2 logo-text">
                            <h3>MUSIC</h3>
                        </span>
                    </a>
                 
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                </div>
               
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                
                    <ul class="navbar-nav float-start me-auto">
                     
                    </ul>
                    
                </div>
            </nav>
        </header>
        <?php require 'sidebar.php' ?>