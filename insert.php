<?php

    if (isset($_POST['submit']))
    {
        $id     = $_POST['id'];
        $name   = $_POST['name'];
        $address= $_POST['address'];
        $nic    = $_POST['nic'];
        $sex    = $_POST['gender'];
        $dob    = $_POST['dob'];
        $phone  = $_POST['phone'];

        include('dbconnect.php');
        include('fun.php');

        $sql= "INSERT INTO student (ID, Name, Address, NIC_number, Gender, Dob, Phone_Number)
        VALUES('$id','$name','$address','$nic','$sex','$dob','$phone')";

        if ($con->Query($sql)==TRUE)
        {
            ?>

            <Script>
                alert("Record Succfull");
                window.location.href="View student.php";

                function inadd() {
                     document.getElementById('h1').innerHTML="View Students";
                }
            </Script>

            <?php
        }
       
    }

?>