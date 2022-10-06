
<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name']) && $_SESSION['access']>=3 ) {

 ?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Success</title>
    <link rel="stylesheet" href="../bs/css/bootstrap.css">
    <link rel="stylesheet" href="../css/styles.css">
    <script src="../bs/js/jquery-3.6.0.js"></script>
    <script src="../bs/js/popper.min.js"></script>
    <script src="../bs/js/bootstrap.js"></script>
</head>

<body>
    <div class="container">
        <h3 class="text-center">Update Success</h3>
        <hr>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <?php
                include("dbcon.php");
                // Removing SQL Injections
                $studadmin = mysqli_real_escape_string($conn,$_POST['studadmin']);
                $regdate = mysqli_real_escape_string($conn,$_POST['regdate']);
                $firstname = mysqli_real_escape_string($conn,$_POST['fname']);
                $othernames = mysqli_real_escape_string($conn,$_POST['onames']);
                $gender = mysqli_real_escape_string($conn,$_POST['gender']);
                $dob = mysqli_real_escape_string($conn,$_POST['dob']);
                $postaladdress = mysqli_real_escape_string($conn,$_POST['postaladdress']);
                $tnumber = mysqli_real_escape_string($conn,$_POST['tno']);
                $email = mysqli_real_escape_string($conn,$_POST['email']);
                $nok = mysqli_real_escape_string($conn,$_POST['nok']);
                $nkno = mysqli_real_escape_string($conn,$_POST['nkno']);
                $cef = mysqli_real_escape_string($conn,$_POST['cef']);
                $kmg = mysqli_real_escape_string($conn,$_POST['kmg']);
                $elevel = mysqli_real_escape_string($conn,$_POST['elevel']);
                $hsattended = mysqli_real_escape_string($conn,$_POST['hsattended']);
                $yearto = mysqli_real_escape_string($conn,$_POST['yearto']);
                $yearfrom = mysqli_real_escape_string($conn,$_POST['yearfrom']);
                $cattended = mysqli_real_escape_string($conn,$_POST['cattended']);
                
                // Query String for updating a record in the database table
                $sql = "update enquiries set reg_date='$regdate',first_name='$firstname',other_names='$othernames',gender='$gender',dob='$dob',postal_address='$postaladdress,
                tnumber='$tnumber',email='$email',nok='$nok',nk_number=$nkno',cef=$cef',kmg='$kmg',elevel='$elevel,
                hschool_attended='$hsattended','year_to='$yearto',year_from='$yearfrom',college_attended='$cattended'
                where studadmin='$studadmin'";
                // Executing the query string above
                if(mysqli_query($conn,$sql) == true){
                    print "<p>Staff details updated successfully</p>";
                    print "<a href='registration.php' class='btn btn-outline-info'>Update</a>";
                }
                else{
                    print "<p>Staff details not updated</p>";
                    print "<a href='registration.php' class='btn btn-outline-danger'>Try Again</a>";
                }
                // Close the database connection after execution of the query above
                mysqli_close($conn);
                ?>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>

</html>
<?php
}else{

    header("Location:../index.php?error=UNAUTHORISED");

 exit();
}

?>