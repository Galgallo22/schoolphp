<?php
include("dbcon.php");
$staffid = mysqli_real_escape_string($conn,$_POST['staff_id']);
$sql = "select * from staffdetails where staff_id='$staffid'";
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
        <h3 class="text-center">Update Staff Details</h3>
        <hr>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form action="updatestaff.php" method="post">
                <label for="" hidden><b>Join Date</b></label>
                <input value="<?php print $row['join_date'];?>" type="datetime-local" name="jdate" hidden class="form-control" required id="">
                    <label for="" hidden><b>Staff ID</b></label>
                    <input value="<?php print $row['staff_id'];?>" type="number" name="stfid" hidden class="form-control" required id="">
                    <label for=""><b>First Name</b></label>
                    <input value="<?php print $row['first_name'];?>" type="text" name="fname" class="form-control" required id="">
                    <label for=""><b>Middle Name</b></label>
                    <input value="<?php print $row['middle_name'];?>" type="text" name="midname" class="form-control" required id="">
                    <label for=""><b>Last Name</b></label>
                    <input value="<?php print $row['last_name'];?>" type="text" name="lname" class="form-control" required id="">
                    <label for="" hidden><b>Gender</b></label>
                    <input value="<?php print $row['gender'];?>" type="text" name="gender" hidden class="form-control" required id="">
                    <label for=""><b>Position</b></label>
                    <input value="<?php print $row['position'];?>" type="text" name="position" class="form-control" required id="">
                    <label for="" hidden><b>Department</b></label>
                    <input value="<?php print $row['department'];?>" type="text" name="department" hidden class="form-control" required id="">
                    
                    <div class="buttons">
                        <button type="submit" class="btn btn-danger">Update</button>
                        &nbsp;
                        <a href="searchStaffU FORM.php" class="btn btn-dark">Cancel Update</a>
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
