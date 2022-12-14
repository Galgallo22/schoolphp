<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name']) && $_SESSION['access']==2 or $_SESSION['access']==5 ) {

 ?>
<!DOCTYPE html>
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
                $inno = mysqli_real_escape_string($conn,$_POST['inno']);
                $indate = mysqli_real_escape_string($conn,$_POST['indate']);
                $firstname = mysqli_real_escape_string($conn,$_POST['fname']);
                $othernames = mysqli_real_escape_string($conn,$_POST['onames']);
                $course = mysqli_real_escape_string($conn,$_POST['course']);
                $tuitionfees = mysqli_real_escape_string($conn,$_POST['tfees']);
                $regfees = mysqli_real_escape_string($conn,$_POST['regfees']);
                $hfees = mysqli_real_escape_string($conn,$_POST['lfees']);
                $lfees = mysqli_real_escape_string($conn,$_POST['hfees']);
                $totalamount = mysqli_real_escape_string($conn,$_POST['tamount']);
                
                
                // Query String for updating a record in the database table
                $sql = "update bill set invoice_number='$inno','indate=$indate',first_name='$firstname',other_names='$othernames',course='$course',
                tfees='$tuitionfees',reg_fees='$regfees',hfees='$hfees','lfees='$lfees',total_amount=$totalamount',
                where invoice_number='$inno'";
                // Executing the query string above
                if(mysqli_query($conn,$sql) == true){
                    print "<p>Staff details updated successfully</p>";
                    print "<a href='bill FORM.php' class='btn btn-outline-info'>Update</a>";
                }
                else{
                    print "<p>Staff details not updated</p>";
                    print "<a href='bill FORM.php' class='btn btn-outline-danger'>Try Again</a>";
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