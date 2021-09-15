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
                <div><h3>HARDY COLLGE OF TECHNOLOGY<span class="element"></span></h3></div>    
                <div><img src="Sri-Lanka_240-animated-flag-gifs.gif" alt="" width="60px" height="60px"></div>       
            </div>
            
            <div class="col-xl-2 bg bg-primary">
            <nav class="navbar navbar-expand-xl navbar-light fla">
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
            <marquee behavior="" direction="">HARDY COLLEGE OF TECHNOLOGY MANAGEMENT SYSTEM - DEPARTMENT OF ICT</marquee>
        </div>
    </div>
</div>

<div class="container-fulid">
    <div class="row">
        <div class="col-xl-2  bg-dark d-xl-block collapse" id="navbarSupportedContent">
            
            <div class="btn">
                
            </div>

            <div>
                <button class="btn" onclick="loadfiles('Dashbord','loadArea')"><i class="fas fa-tachometer-alt"></i><span>Dashbord</span></button>
            </div>

            <div>
                <button class="btn" onclick="loadfiles('Lectures','loadArea')"><i class="fas fa-graduation-cap"></i><span>Lectures</span></button>
            </div>

            <div>
                <button class="btn" onclick="loadfiles('View Students','loadArea')"><i class="fas fa-user-graduate "></i><span>View Students</span></button>
            </div>

            <div>
                <button class="btn" onclick="loadfiles('new_student','loadArea')"><i class="fas fa-user-edit"></i><span>New Student</span></button>
            </div>

            <div>
                <button class="btn" onclick="loadfiles('notes','loadArea')"><i class="fas fa-book"></i><span>Notes</span></button>
            </div>

            <div>
                <button class="btn disabled" onclick="loadfiles('pass_pepper','loadArea') "><i class="fas fa-book-reader"></i><span>Pass Pepper</span></button>
            </div>

            <div>
                <button class="btn disabled" onclick="loadfiles('model_pepper','loadArea') "><i class="fas fa-book-open"></i><span>Model Pepper</span></button>
            </div>
            
        </div>

        <!-- Right Area-->

        <div class="col-xl-10 bg-light" id="loadArea">
       

            <!-- Row -->
            <div class="row">
                <div class="col pa10">
                <div class="card">
                <div class="card">
                <h3 class="card-header mb-5 text-uppercase bg-info">Dashbord</h3>
                <div class="card-body">
                                
                <div class="row">
                <!--student col-->
                <div class="col-lg-6 pa10">
                    <!-- student cart--> 
                    <div class="card m-auto">
                    <div class="card-header fw-bold bg-secondary text-white">
                        Lectures
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">03</h5>
                        <p class="card-text">All lectures</p>
                    </div>
                    </div>
                    <!-- End student cart-->
                </div>
                <!--end col-->
            
                <!--Lacutre col-->
                <div class="col-lg-6 pa10">
                    <!-- student cart-->
                    <div class="card m-auto">
                    <div class="card-header fw-bold bg-secondary text-white">
                        Student
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">0</h5>
                        <p class="card-text">All student</p>
                    </div>
                    </div>
                    <!-- End luctre cart-->
                </div>
                <!--end luctre col-->

                 <!--1st semi-->
                    <div class="col-lg-6 pa10">
                    <!-- student cart-->
                    <div class="card m-auto">
                    <div class="card-header fw-bold bg-secondary text-white">
                        1<sup>st</sup> semester subject
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">7</h5>
                        <p class="card-text">All subject</p>
                    </div>
                    </div>
                    <!-- 1st semi cart-->
                </div>
                <!--1st semi col-->

                 <!--1st semi-->
                 <div class="col-lg-6 pa10">
                    <!-- student cart-->
                    <div class="card m-auto" >
                    <div class="card-header fw-bold bg-secondary text-white">
                        2<sup>nd</sup> semester subject
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">5</h5>
                        <p class="card-text">All subject</p>
                    </div>
                    </div>
                    <!-- 2nd semi cart-->
                </div>
                <!--2nd semi col-->
                    

            </div>
            <!-- End Row -->
            
        </div>
        <!-- End Right Area -->
        
    </div>






                </div>
                </div>
                </div>
            </div>
    
        
    
</div>
<!-- Footer -->
<div class="row text-center">
                <div class="col-xl bg-primary text-white text-uppercase pa10">
                    <h6>&#169 Copyright 2021 HARDY. All right reserved. |</h6> 
                    <p>Designed By: Hardy College Of Technology Student (Founder : A.M. Asky)</p>
                </div>
            </div>
        <!-- End Footer -->




    <!--Boostrab Js-->
    <script src="https://cdn.tutorialjinni.com/typed.js/2.0.12/typed.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>