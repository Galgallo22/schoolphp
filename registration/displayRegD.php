<?php
include("dbcon.php");
$studadmin = mysqli_real_escape_string($conn,$_POST['stud_admin']);
$sql = "select * from registration where stud_admin='$studadmin'";
$result = mysqli_query($conn,$sql);
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Staff Details</title>
    <link rel="stylesheet" href="../bs/css/bootstrap.css">
    <link rel="stylesheet" href="../css/styles.css">
    <script src="../bs/js/jquery-3.6.0.js"></script>
    <script src="../bs/js/popper.min.js"></script>
    <script src="../bs/js/bootstrap.js"></script>
</head>

<body>
    <div class="container">
        <h3 class="text-center">Receipt</h3>
        <hr>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form action="deletereg.php" method="post">
                <label for="" hidden><b>Student Admission Number</b></label>
                <input value="<?php print $row['stud_admin'];?>" type="number" name="studadmin" hidden class="form-control" required id="">
                    <label for="" hidden><b>Registration Date</b></label>
                    <input value="<?php print $row['reg_date'];?>" type="datetime-local" name="regdate" hidden class="form-control" required id="">
                    <label for=""><b>First Name</b></label>
                    <input value="<?php print $row['first_name'];?>" type="text" name="fname" class="form-control" required id="">
                    <label for=""><b>Other Names</b></label>
                    <input value="<?php print $row['other_names'];?>" type="text" name="onames" class="form-control" required id="">
                    <label for=""><b>Gender</b></label>
                    <input value="<?php print $row['gender'];?>" type="text" name="gender" class="form-control" required id="">
                    <label for="" hidden><b>Date Of Birth</b></label>
                    <input value="<?php print $row['dob'];?>" type="number" name="dob" hidden class="form-control" required id="">
                    <label for=""><b>Postal Address</b></label>
                    <input value="<?php print $row['postal_address'];?>" type="text" name="regfees" class="form-control" required id="">
                    <label for="" hidden><b>Teephone Number</b></label>
                    <input value="<?php print $row['tnumber'];?>" type="number" name="tno" hidden class="form-control" required id="">
                    <label for="" hidden><b>Email</b></label>
                    <input value="<?php print $row['email'];?>" type="text" name="email" hidden class="form-control" required id="">
                    <label for="" hidden><b>Next Of Kin</b></label>
                    <input value="<?php print $row['nok'];?>" type="number" name="nok" hidden class="form-control" required id="">
                    <label for="" hidden><b>Next Of Kin Number</b></label>
                    <input value="<?php print $row['nk_number'];?>" type="number" name="nkno" hidden class="form-control" required id="">
                    <label for="" hidden><b>Course Enrolled For</b></label>
                    <input value="<?php print $row['cef'];?>" type="text" name="cef" hidden class="form-control" required id="">
                    <label for="" hidden><b>KCSE Mean Grade</b></label>
                    <input value="<?php print $row['kmg'];?>" type="text" name="kmg" hidden class="form-control" required id="">
                    <label for="" hidden><b>High School Attended</b></label>
                    <input value="<?php print $row['hschool_attended'];?>" type="text" name="hschool_attended" hidden class="form-control" required id="">
                    <label for="" hidden><b>Year to</b></label>
                    <input value="<?php print $row['year_to'];?>" type="number" name="yearto" hidden class="form-control" required id="">
                    <label for="" hidden><b>Year form</b></label>
                    <input value="<?php print $row['year_from'];?>" type="text" name="yearfrom" hidden class="form-control" required id="">
                    <label for="" hidden><b>College Attended</b></label>
                    <input value="<?php print $row['college_attended'];?>" type="text" name="cattended" hidden class="form-control" required id="">
                    <div class="buttons">
                        <button type="submit" class="btn btn-danger">Delete</button>
                        &nbsp;
                        <a href="searchRegD.php" class="btn btn-dark">Delete</a>
                    </div>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>

</html>
        <?php
    }
}
mysqli_close($conn);
?>
