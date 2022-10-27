<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#btn").click(function() {
                var name = $("#name").val();
                var address = $("address").val();

                if (name == '' || address == '') {
                    alert("al filed are reqired");
                }
            });
        });
    </script>


    <?php


    include 'conn.php';
    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $address = $_POST['address'];

        $nic = $_POST['nic'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];



        $sql = "INSERT INTO student(ID, Name,Address, Gender, NIC_number, Dob, email	,Phone_number)
    VALUES ('$id', '$name','$address', '$gender', '$nic', '$dob', '$email', '$phone')";
    }
    ?>
</body>

</html>