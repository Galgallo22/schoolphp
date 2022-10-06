<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name']) && $_SESSION['access'] >= 3) {

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <link rel="stylesheet" href="../bs/css/bootstrap.css">
    <link rel="stylesheet" href="../css/styles.css">
    <script src="../bs/js/jquery-3.6.0.js"></script>
    <script src="../bs/js/popper.min.js"></script>
    <script src="../bs/js/bootstrap.js"></script>
</head>

<body>
    <div class="container">
        <h3 class="text-center">Success</h3>
        <hr>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <?php
                include("dbcon.php");
                // Removing SQL Injections
                // $recdate = mysqli_real_escape_string($conn,$_POST['recdate']);
                $firstname = mysqli_real_escape_string($conn,$_POST['fname']);
                $othernames = mysqli_real_escape_string($conn,$_POST['onames']);
                $gender = mysqli_real_escape_string($conn,$_POST['gender']);
                $dob = mysqli_real_escape_string($conn,$_POST['dob']);
                $postaladdress = mysqli_real_escape_string($conn,$_POST['paddress']);
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
                // echo $firstname.'<br>'.$othernames.'<br>'.$gender.'<br>'.$dob.'<br>'.$postaladdress.'<br>'.$tnumber.'<br>'.$email.'<br>'.$nok.'<br>'.$nkno.'<br>'.$cef.'<br>'.$kmg.'<br>'.$elevel.'<br>'.$hsattended.'<br>'.$yearto.'<br>'.$yearfrom.'<br>'.$cattended;
                


                // // Query String for adding a new record in the database table
                // $sql = "INSERT INTO registration (first_name,other_names,gender,dob,postal_address,tnumber,email,nok,nk_number,
                // cef,kmg,e_level,hschool_attended,year_to,year_from,college_attended)values('$firstname','$othernames','$gender',
                // '$dob','$postaladdress','$tnumber','$email,'$nok','$nkno','$cef','$kmg','$elevel','$hsattended','$yearto',
                // '$yearfrom','$cattended')";

                $sql= "INSERT INTO registration (first_name,other_names,gender,
                dob,postal_address,tnumber,email,nok,nk_number,cef,kmg,e_level,hschool_attended,
                 year_to,year_from,college_attended) VALUES ('$firstname', '$othernames', '$gender', '$dob', 
                  '$postaladdress', '$tnumber', '$email', '$nok', '$nkno', '$cef', '$kmg', '$elevel', '$hsattended', '$yearto', '$yearfrom', '$cattended');";

                // Executing the query string above
                if(mysqli_query($conn,$sql) == true){
                    print "<p>New registration added successfully</p>";
                    print "<a href='registration.php' class='btn btn-outline-primary'>Add New</a>";
                }
                else{
                    print "<p>New registration not added</p>";
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
