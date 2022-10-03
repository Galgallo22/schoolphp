<?php
include("dbcon.php");
$recno = mysqli_real_escape_string($conn,$_POST['receipt_number']);
$sql = "select * from receipt where receipt_number='$recno'";
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
    <title>Update Enquiry Details</title>
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
                <form action="deleteenquiry.php" method="post">
                <label for="" hidden><b>Enquiry Id</b></label>
                <input value="<?php print $row['enquiry_id'];?>" type="number" name="enqid" hidden class="form-control" required id="">
                    <label for="" hidden><b>Enquiry Date</b></label>
                    <input value="<?php print $row['enquiry_date'];?>" type="datetime-local" name="enqdate" hidden class="form-control" required id="">
                    <label for=""><b>First Name</b></label>
                    <input value="<?php print $row['first_name'];?>" type="text" name="fname" class="form-control" required id="">
                    <label for=""><b>Other Names</b></label>
                    <input value="<?php print $row['other_names'];?>" type="text" name="onames" class="form-control" required id="">
                    <label for=""><b>Other </b></label>
                    <input value="<?php print $row['tnumber'];?>" type="number" name="tno" class="form-control" required id="">
                    <label for="" hidden><b>Email</b></label>

                    <input value="<?php print $row['email'];?>" type="text" name="email" hidden class="form-control" required id="">
                    <label for=""><b>Course</b></label>
                    <input value="<?php print $row['course'];?>" type="text" name="course" class="form-control" required id="">
                    
                    <label for=""><b>How Did You Know Us</b></label>
                    <input value="<?php print $row['hdyku'];?>" type="text" name="hdyku" class="form-control" required id="">
                    <label for="" hidden><b>Comments</b></label>
                     <input value="<?php print $row['comments'];?>" type="text" name="comments" hidden class="form-control" required id="">
                    <div class="buttons">
                        <button type="submit" class="btn btn-danger">Update</button>
                        &nbsp;
                        <a href="searchEnquiryD.php" class="btn btn-dark">Cancel Update</a>
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
