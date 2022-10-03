<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Details</title>
    <link rel="stylesheet" href="../bs/css/bootstrap.css">
    <link rel="stylesheet" href="../css/styles.css">
    <script src="../bs/js/jquery-3.6.0.js"></script>
    <script src="../bs/js/popper.min.js"></script>
    <script src="../bs/js/bootstrap.js"></script>
</head>

<body>
    <div class="container">
        <h3 class="text-center">Registration Details</h3>
        <hr>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form action="newreg.php" method="post">
                    <label for=""><b>First Name</b></label>
                    <input type="text" name="fname" class="form-control" required id="">
                    <label for=""><b>Other Names</b></label>
                    <input type="text" name="onames" class="form-control" required id="">
                    <label for=""><b>Gender</b></label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="gender" value="Male" required id="">&nbsp;<label for="">Male</label>
                    <input type="radio" name="gender" value="Female" required id="">&nbsp;<label for="">Female</label>
                    <input type="radio" name="gender" value="Other" required id="">&nbsp;<label for="">Other</label>
                    <br>
                    <label for=""><b>Date Of Birth</b></label>
                    <input type="date" name="dob" class="form-control" required id="">
                    <label for=""><b>Postal Address</b></label>
                    <input type="text" name="paddress" class="form-control" required id="">
                    <label for=""><b>Telephone Number</b></label>
                    <input type="number" name="tno" class="form-control" required id="">
                    <label for=""><b>Email</b></label>
                    <input type="text" name="email"class="form-control" required id="">
                    <label for=""><b>Next Of Kin</b></label>
                    <input type="text" name="nok" class="form-control" required id="">
                    <label for=""><b>Next Of Kin Number</b></label>
                    <input type="number" name="nkno" class="form-control" required id="">
                    <label for=""><b>Course Enrolled For</b></label>
                    <input type="text" name="cef" class="form-control" required id="">
                    <label for=""><b>KCSE Mean Grade</b></label>
                    <input type="text" name="kmg" class="form-control" required id="">
                    <label for=""><b>Education Level</b></label>
                    <select name="elevel" class="form-control" required id="">
                        <option value="High School">High School</option>
                        <option value="College/University">College/University</option>
                    </select>
                    <label for=""><b>High School Attended</b></label>
                    <input type="text" name="hsattended" class="form-control" required id="">
                    
                    <label for=""><b>Year To</b></label>
                    <input type="number"  min="2001" name="yearto" class="form-control" required id="">

                    <label for=""><b>Year From</b></label>
                    <input type="number" min="2001" name="yearfrom" class="form-control" required id="">
                    <label for=""><b>College Attended</b></label>
                    <input type="text" name="cattended" class="form-control" required id="">
                    <div class="buttons">
                        <button type="submit" class="btn btn-primary">Add New</button>
                        &nbsp;
                        <a href="searchRegU.php" class="btn btn-info">Update</a>
                        &nbsp;
                        <a href="searchRegD.php" class="btn btn-danger">Delete</a>
                    </div>
                    
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>

</html>