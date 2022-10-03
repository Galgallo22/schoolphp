<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billing Details</title>
    <link rel="stylesheet" href="../bs/css/bootstrap.css">
    <link rel="stylesheet" href="../css/styles.css">
    <script src="../bs/js/jquery-3.6.0.js"></script>
    <script src="../bs/js/popper.min.js"></script>
    <script src="../bs/js/bootstrap.js"></script>
</head>

<body>
    <div class="container">
        <h3 class="text-center">Billing Details</h3>
        <hr>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form action="newbill.php" method="post">
                    <label for=""><b>First Name</b></label>
                    <input type="text" name="fname" class="form-control" required id="">
                    <label for=""><b>other Names</b></label>
                    <input type="text" name="onames" class="form-control" required id="">
                    
                    <label for=""><b>Course</b></label>
                    <select name="course" class="form-control" required id="">
                        <option value="Graphic Design">Graphic Design</option>
                        <option value="Web Design">Web Design</option>
                        <option value="Software">Software</option>
                        <option value="CCTV Installation">CCTV Installation</option>
                        <option value="Networking">Networking</option>
                        <option value="Cyber Security">Cyber Security</option>
                    </select>
                    <label for=""><b>Tuition Fees</b></label>
                    <input type="number" name="tfees" class="form-control" required id="">
                    <label for=""><b>Registration Fees</b></label>
                    <input type="number" name="regfees" class="form-control" required id="">
                    <label for=""><b>Hostels Fees</b></label>
                    <input type="number" name="hfees" class="form-control" required id="">
                    <label for=""><b>Library Fees</b></label>
                    <input type="number" name="lfees" class="form-control" required id="">
                    
                    <div class="buttons">
                        <button type="submit" class="btn btn-primary">Add New</button>
                        &nbsp;
                        <a href="searchBillU.php" class="btn btn-info">Update</a>
                        &nbsp;
                        <a href="searchBillD.php" class="btn btn-danger">Delete</a>
                    </div>
                    
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>

</html>