<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name']) && $_SESSION['access']>0) {

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" href="bs/css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="bs/js/bootstrap.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <br><br><br><br><br>
                <h5 class="text-white">Hello, <?php echo $_SESSION['user_name']; ?></h5>
                &nbsp;<a href="logout.php" class="text-white">Logout</a>
                <hr>
                <h3 class="text-center text-uppercase text-white"><a href="enquirydetails/enquiries FORM.php" target="_blank">inquiries</a></h3>
                <h3 class="text-center text-uppercase text-white"><a href="invoice/bill FORM.php" target="_blank">invoices</a></h3>
                <h3 class="text-center text-uppercase text-white"><a href="receipt/receipt FORM.php" target="_blank">receipt</a></h3>
                <h3 class="text-center text-uppercase text-white"><a href="registration/registration FORM.php" target="_blank">registration</a></h3>
                <h3 class="text-center text-uppercase text-white"><a href="staff/staffdetails FORM.php" target="_blank">staff</a></h3>
                <hr>
                <h3 class="text-center text-uppercase text-white"><a href="enquiriesReport.php" target="_blank">inquiries report</a></h3>
                <h3 class="text-center text-uppercase text-white"><a href="regReport.php" target="_blank">registration report</a></h3>
                <h3 class="text-center text-uppercase text-white"><a href="invoiceReport.php" target="_blank">invoice report</a></h3>
                <h3 class="text-center text-uppercase text-white"><a href="receiptBalance.php" target="_blank">outstanding fee report</a></h3>
                <h3 class="text-center text-uppercase text-white"><a href="receiptReport.php" target="_blank">payment report</a></h3>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>
</html>
<?php 

}else{

    header("Location:index.php?error=UNAUTHORISED");

     exit();

}

 ?>