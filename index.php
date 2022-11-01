<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>HARDY COLLEGE OF TECHNOLOGY - DEPARTMENT OF ICT</title>

    <script src="https://kit.fontawesome.com/2759fd8f76.js" crossorigin="anonymous"></script>

    <!--Boostrab Css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!--Css Link-->
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
</head>

<body>

    <?php
    include 'ajax.php';
    ?>

    <div class="container-fulid ">


        <div class="row text-center ">
            <div class="col-lg-2 bg bg-primary d-none d-md-block">
                <img src="img.png" alt="" widt="120px" height="120px">
            </div>
            <div class="col-lg-2 bg bg-primary d-block d-md-none">
                <img src="images 1.png" alt="" widt="120px" height="120px">
            </div>
            <div class="col-lg-8 bg bg-primary text-white ">
                <div>
                    <h3>HARDY COLLEGE OF TECHNOLOGY - DEPARTMENT OF ICT</h3>
                </div>
                <div class="d-none d-md-block"><img src="Sri-Lanka_240-animated-flag-gifs.gif" alt="" width="60px" height="60px"></div>
            </div>

            <div class="col-lg-2 bg bg-primary ">
                <nav class="navbar navbar-expand-xl navbar-light fla ">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </nav>
                <div class="d-none d-md-block">
                    <img src="images 1.png" alt="" widt="120px" height="120px">
                </div>

            </div>

        </div>


    </div>

    <div class="container-fulid">
        <div class="row">
            <div class="col bg-secondary text-white">
                <marquee behavior="" direction="" scrollamount="5">HARDY COLLEGE OF TECHNOLOGY STUDENT MANAGEMENT SYSTEM - DEPARTMENT OF ICT</marquee>
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
                    <button class="btn" id="view" onclick="loadfiles('View Students','loadArea')"><i class="fas fa-user-graduate "></i><span>View Students</span></button>
                </div>

                <div>
                    <button class="btn" onclick="loadfiles('new_student','loadArea')"><i class="fas fa-user-edit"></i><span>New Student</span></button>
                </div>

                <div>
                    <button class="btn" onclick="loadfiles('notes','loadArea')"><i class="fas fa-book"></i><span>Notes</span></button>
                </div>

                <div>
                    <button class="btn" onclick="loadfiles('time_table','loadArea')"><i class="fas fa-table"></i><span>Time Table-2021</span></button>
                </div>

                <div>
                    <button class="btn disabled" onclick="loadfiles('pass_pepper','loadArea') "><i class="fas fa-book-reader"></i><span>Pass Pepper</span></button>
                </div>

                <div>
                    <button class="btn disabled" onclick="loadfiles('model_pepper','loadArea') "><i class="fas fa-book-open"></i><span>Model Pepper</span></button>
                </div>

                <!--<div>
                <button class="btn"><i class="fas fa-book-open"></i><a href="new_s.php">New</a></button>
            </div>-->

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
                                                    <h5 class="card-title counter">03</h5>
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
                                                    <h5 class="card-title counter">30</h5>
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
                                                    <h5 class="card-title counter">7</h5>
                                                    <p class="card-text">All subject</p>
                                                </div>
                                            </div>
                                            <!-- 1st semi cart-->
                                        </div>
                                        <!--1st semi col-->

                                        <!--1st semi-->
                                        <div class="col-lg-6 pa10">
                                            <!-- student cart-->
                                            <div class="card m-auto">
                                                <div class="card-header fw-bold bg-secondary text-white">
                                                    2<sup>nd</sup> semester subject
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title counter">6</h5>
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
            <div class="col-xl bg-black text-white p-4">
                <h6>&#169 Copyright 2021 Hardy. All Rights Reserved | Designed By :<a href="http://am-asky97.herokuapp.com/" class="a"> Asky AM</a></h6>
            </div>
        </div>
        <!-- End Footer -->



        <script>
            $(document).ready(function() {
                $("#view").click(function() {
                    Swal.fire({
                        title: 'This can not be viewed because it is a personal information !',
                        showClass: {
                            popup: 'animate__animated animate__fadeInDown'
                        },
                        hideClass: {
                            popup: 'animate__animated animate__fadeOutUp'
                        }
                    })
                });
            });
        </script>

        <script>
            var i = 0;

            function divchange()

            {
                var divtag = document.getElementById("dep");
                var txtcolor = ["red", "green", "white", "black"];
                divtag.style.color = txtcolor[i];
                i = (i + 1) % txtcolor.length;
            }

            setInterval(divchange, 300);
        </script>


        <script>
            $(document).ready(function() {
                $(".counter").counterUp({
                    delay: 10,
                    time: 200
                });
            });
        </script>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>

        <script>
            var type = new Typed('.element', {
                strings: ['DEPARTMENT OF ICT'],
                typeSpeed: 120,
                loop: true
            });
        </script>

        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>