<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name']) && $_SESSION['access']>=4 ) {

 ?>
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
                <form action="deletereceipt.php" method="post">
                <label for="" hidden><b>Receipt Number</b></label>
                <input value="<?php print $row['receipt_number'];?>" type="number" name="recno" hidden class="form-control" required id="">
                    <label for="" hidden><b>Receipt Date</b></label>
                    <input value="<?php print $row['receipt_date'];?>" type="datetime-local" name="recdate" hidden class="form-control" required id="">
                    <label for=""><b>First Name</b></label>
                    <input value="<?php print $row['first_name'];?>" type="text" name="fname" class="form-control" required id="">
                    <label for=""><b>Other Names</b></label>
                    <input value="<?php print $row['other_names'];?>" type="text" name="onames" class="form-control" required id="">
                    <label for=""><b>Course</b></label>
                    <input value="<?php print $row['course'];?>" type="text" name="course" class="form-control" required id="">
                    <label for="" hidden><b>Tuition Fees</b></label>
                    <input value="<?php print $row['tfees'];?>" type="number" name="tfees" hidden class="form-control" required id="">
                    <label for=""><b>Registration Fees</b></label>
                    <input value="<?php print $row['reg_fees'];?>" type="number" name="regfees" class="form-control" required id="">
                    <label for="" hidden><b>Hostels Fees</b></label>
                    <input value="<?php print $row['hfees'];?>" type="number" name="hfees" hidden class="form-control" required id="">
                    <label for="" hidden><b>LLibrary Fees</b></label>
                    <input value="<?php print $row['lfees'];?>" type="number" name="lfees" hidden class="form-control" required id="">
                    <label for="" hidden><b>Total Amount</b></label>
                    <input value="<?php print $row['total_amount'];?>" type="number" name="tamount" hidden class="form-control" required id="">
                    <label for="" hidden><b>Total Amount</b></label>
                    <input value="<?php print $row['amount_paid'];?>" type="number" name="apaid" hidden class="form-control" required id="">
                    <div class="buttons">
                        <button type="submit" class="btn btn-danger">Delete</button>
                        &nbsp;
                        <a href="searchReceiptD FORM.php" class="btn btn-dark">Cancel Delete</a>
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
<?php
}else{

    header("Location:../index.php?error=UNAUTHORISED");

 exit();
}
?>