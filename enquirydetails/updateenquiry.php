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
                $enqid = mysqli_real_escape_string($conn,$_POST['enqid']);
                $enqdate = mysqli_real_escape_string($conn,$_POST['enqdate']);
                $firstname = mysqli_real_escape_string($conn,$_POST['fname']);
                $othernames = mysqli_real_escape_string($conn,$_POST['onames']);
                $tnumber = mysqli_real_escape_string($conn,$_POST['tno']);
                $email = mysqli_real_escape_string($conn,$_POST['email']);
                $course = mysqli_real_escape_string($conn,$_POST['course']);
                $hdyku = mysqli_real_escape_string($conn,$_POST['hdyku']);
                $comments = mysqli_real_escape_string($conn,$_POST['comments']);
                
                
                // Query String for updating a record in the database table
                $sql = "update enquiries set enquiry_date='$enqdate',first_name='$firstname',other_names='$othernames',
                tnumber='$tnumber',email='$email',course='$course',hdyku='$hdyku',comments='$comments',
                where enquiry_id='$enqid'";
                // Executing the query string above
                if(mysqli_query($conn,$sql) == true){
                    print "<p>Enquiry details updated successfully</p>";
                    print "<a href='enquiries FORM.php' class='btn btn-outline-info'>Update</a>";
                }
                else{
                    print "<p>Enquiry details not updated</p>";
                    print "<a href='enquiries FORM.php' class='btn btn-outline-danger'>Try Again</a>";
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