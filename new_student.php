<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <!-- ajax -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">

  <style>
    .error {
      color: red !important;
    }
  </style>
</head>

<body>
  <div class="row">
    <div class="col p10">
      <div class="card">
        <h3 class="card-header mb-5 text-uppercase bg-info">Registration form</h3>
        <div class="card-body">

          <form id="loginForm">

            <div class="card card-registration my-4">
              <div class="row g-0">
                <div class="col-xl-6 d-none d-xl-block">
                  <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-registration/img4.jpg" alt="Sample photo" class="img-fluid" style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                </div>
                <div class="col-xl-6">
                  <div class="card-body p-md-5 text-black">

                    <div class="form-outline mb-4">
                      <label class="form-label" for="form3Example8">Registration no</label><span style="color: red;"> *</span>
                      <input type="text" name="reg" id="reg" class="form-control form-control-lg" />
                    </div>

                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <label class="form-label" for="form3Example1m">First name</label><span style="color: red;"> *</span>
                          <input type="text" name="fName" id="fName" class="form-control form-control-lg" />
                        </div>
                      </div>
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <label class="form-label" for="form3Example1n">Last name</label><span style="color: red;"> *</span>
                          <input type="text" name="lname" id="lname" class="form-control form-control-lg" />
                        </div>
                      </div>
                    </div>

                    <div class="form-outline mb-4">
                      <label class="form-label" for="form3Example8">Address</label><span style="color: red;"> *</span>
                      <input type="text" name="address" id="address" class="form-control form-control-lg" />
                    </div>

                    <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                      <h6 class="mb-0 me-4" id="gen"><span>Gender :</span> <span style="color: red;"> *</span></h6>

                      <div class="cont">
                        <div class="form-check form-check-inline mb-0 me-4">
                          <input class="form-check-input" type="radio" name="gender" id="femaleGender" value="Female" />
                          <label class="form-check-label" for="femaleGender">Female</label>
                        </div>

                        <div class="form-check form-check-inline mb-0 me-4">
                          <input class="form-check-input" type="radio" name="gender" id="maleGender" value="Male" />
                          <label class="form-check-label" for="maleGender">Male</label>
                        </div>
                      </div>

                    </div>


                    <div class="form-outline mb-4">
                      <label class="form-label" for="form3Example9">NIC Number</label><span style="color: red;"> *</span>
                      <input type="text" name="nic" id="nic" class="form-control form-control-lg" />
                    </div>

                    <div class="form-outline mb-4">
                      <label class="form-label" for="form3Example9">DOB</label><span style="color: red;"> *</span>
                      <input type="date" name="dob" id="dob" class="form-control form-control-lg" />
                    </div>

                    <div class="form-outline mb-4">
                      <label class="form-label" for="form3Example97">Email ID</label><span style="color: red;"> *</span>
                      <input type="text" name="email" id="email" class="form-control form-control-lg" />
                    </div>

                    <div class="form-outline mb-4">
                      <label class="form-label" for="form3Example97">Phone no</label><span style="color: red;"> *</span>
                      <input type="text" name="phone" id="phone" class="form-control form-control-lg" />
                    </div>

                    <div class="row ">
                      <div class="col-md-6 p10">
                        <button type="submit" id="btn" class="btn btn-success text-center login" name="submit"><i class="fa fa-check-circle" aria-hidden="true"></i><span>Submit</span></button>
                      </div>

                      <div class="col-md-6 p10">
                        <button type="reset" class="btn btn-danger text-center"><i class="fa fa-ban" aria-hidden="true"></i><span>Reset all</span></button>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
    </form>

  </div>


  <?php
  include 'add.php';
  ?>

  <script src="my_script.js"></script>
  <script src="js/validation/jquery.validate.js"></script>


  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>