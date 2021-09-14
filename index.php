<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boostrab Web Page</title>

    <script src="https://kit.fontawesome.com/2759fd8f76.js" crossorigin="anonymous"></script>
    <!--Boostrab Css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!--Css Link-->
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
include 'ajax.php';
?>

<div class="container-fulid">

        
        <div class="row text-center ">
            <div class="col-xl-2 bg bg-primary">
                <img src="img.png" alt="" widt="120px" height="120px">
            </div>
            <div class="col-xl-8 bg bg-primary text-white">
                <div><h1>Hardy College of Technology</h1></div>    
                <div><img src="Sri-Lanka_240-animated-flag-gifs.gif" alt="" width="60px" height="60px"></div>       
            </div>
            
            <div class="col-xl-2 bg bg-primary">
            <nav class="navbar navbar-expand-lg navbar-light ">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>
                 <img src="images 1.png" alt="" widt="120px" height="120px">   
            </div>
          
        </div>
        
        
</div>

<div class="container-fulid">
    <div class="row">
        <div class="col bg-secondary text-white">
            <marquee behavior="" direction="">Online registration System</marquee>
        </div>
    </div>
</div>

<div class="container-fulid">
    <div class="row">
        <div class="col-xl-2  bg-dark d-xl-block collapse" id="navbarSupportedContent">
            <div>
            <div>
                <button class="btn"></button>
            </div>

            <div>
                <a href="#" class="js-scroll-trigger"><button class="btn"><i class="fas fa-tachometer-alt"></i><span>Dashbord</span></button></a>
            </div>

            <div>
                <button class="btn js-scroll-trigger" onclick="loadfiles('Lectures','loadArea')"><i class="fas fa-graduation-cap"></i><span>Lectures</span></button>
            </div>

            <div>
                <button class="btn"><i class="fas fa-user-graduate "></i><span>View Students</span></button>
            </div>

            <div>
                <button class="btn"><i class="fas fa-user-edit"></i><span>New Student</span></button>
            </div>

            <div>
                <button class="btn"><i class="fas fa-book"></i><span>Notes</span></button>
            </div>

            <div>
                <button class="btn"><i class="fas fa-book-reader"></i><span>Pass Pepper</span></button>
            </div>
            </div>
        </div>

        <!-- Right Area-->

        <div class="col-xl-10 bg-light" id="loadArea">
       

            <!-- Row -->
            <div class="row">
                <!--student col-->
                <div class="col-xl-4 p10">
                    <!-- student cart-->
                    <div class="card m-auto">
                    <div class="card-header">
                        Featured
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    </div>
                    <!-- End student cart-->
                </div>
                <!--end col-->
            
                <!--Lacutre col-->
                <div class="col-xl-4 p10">
                    <!-- student cart-->
                    <div class="card m-auto">
                    <div class="card-header">
                        Featured
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    </div>
                    <!-- End luctre cart-->
                </div>
                <!--end luctre col-->

            </div>
            <!-- End Row -->
            <!-- Footer -->
    <div class="row text-center">
                <div class="col-xl bg-primary">
                    <h5>Am. Asky</h5>
                </div>
            </div>
        <!-- End Footer -->
        </div>
        <!-- End Right Area -->
        
    </div>

    
</div>

<script>
    $('.js-scroll-trigger').click(function(){

        $('.navbar-collapse').collapse('hide');
    });
</script>
    
    


    <!--Boostrab Js-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>