<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<div class="row">
    <div class="col p10">
    <div class="card">
    <h3 class="card-header mb-5 text-uppercase bg-info">Lectures information</h3>
    <div class="card-body">
       
    <div class="table-responsive">
    <table class="table table-bordered col-xl">
    <thead>
    <tr class="text-center bg-success text-white">
      <th scope="col">#</th>
      <th scope="col">Name of the lacture</th>
      <th scope="col">Subject</th>
      <th scope="col">Contact No</th>
      <th scope="col">Photo</th>
    </tr>
  </thead>
  <tbody class="table-dark">
    <tr>
      <th scope="row" rowspan=2>1</th>
      <td rowspan=2>Mr. A.J.M. Hasmy</td>
      <td>Web Programming (SW)</td>
      <td rowspan=2>000-0000000</td>
      <td  rowspan=2 class="text-center"><img src="user.png" alt="" width="80px" height="80px"></td>
    </tr>
    <tr>
      <td>Local Area Network (LAN)</td>
    </tr>
   
    <tr>
      <th scope="row">1</th>
      <td>Mr. S. Risath</td>
      <td>Software Testing (ST)</td>
      <td id="con">000-0000000</td>
      <td class="text-center"><img src="user.png" alt="" width="80px" height="80px"></td>
    </tr>
   
    <tr>
      <th scope="row" rowspan=2>1</th>
      <td rowspan=2>Mr. M.I. Imran Ifham</td>
      <td >Database System- II (DBS II)</td>
      <td rowspan=2 id="con">000-0000000</td>
      <td  rowspan=2 class="text-center "><img src="user.png" alt="" width="80px" height="80px"></td>
    </tr>
    <tr>
      <td>Planning and Scheduling working Place (PSW)</td>
    </tr>
  </tbody>
</table>
</div>

    </div>
    </div>
    </div>
</div>

    
</body>
</html>