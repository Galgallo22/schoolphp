<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Details</title>
    <link rel="stylesheet" href="../bs/css/bootstrap.css">
    <link rel="stylesheet" href="../css/styles.css">
    <script src="../bs/js/jquery-3.6.0.js"></script>
    <script src="../bs/js/popper.min.js"></script>
    <script src="../bs/js/bootstrap.js"></script>
</head>

<body>
    <div class="container">
        <h3 class="text-center">Staff Details</h3>
        <hr>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form action="newstaff.php" method="post">
                    <label for=""><b>First Name</b></label>
                    <input type="text" name="fname" class="form-control" required id="">
                    <label for=""><b>Middle Name</b></label>
                    <input type="text" name="midname" class="form-control" required id="">
                    <label for=""><b>Last Name</b></label>
                    <input type="text" name="lname" class="form-control" required id="">
                    <label for=""><b>Gender</b></label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="gender" value="Male" required id="">&nbsp;<label for="">Male</label>
                    <input type="radio" name="gender" value="Female" required id="">&nbsp;<label for="">Female</label>
                    <input type="radio" name="gender" value="Other" required id="">&nbsp;<label for="">Other</label>
                    <br>
                    <label for=""><b>Position</b></label>
                    <select name="position" class="form-control" required id="">
                        <option value="Accountant">Accountant</option>
                        <option value="Manager">Manager</option>
                        <option value="Receptionist">Receptionist</option>
                        <option value="Trainer">Trainer</option>
                    </select>
                    <label for=""><b>Department</b></label>
                    <select name="department" class="form-control" required id="">
                        <option value="ICT">ICT</option>
                        <option value="HR">HR</option>
                        <option value="Marketing">Marketing</option>
                        <option value="Finance">Finance</option>
                        <option value="Training">Training</option>
                    </select>
                    <div class="buttons">
                        <button type="submit" class="btn btn-primary">Add New</button>
                        &nbsp;
                        <a href="searchStaffU.php" class="btn btn-info">Update</a>
                        &nbsp;
                        <a href="searchStaffD.php" class="btn btn-danger">Delete</a>
                    </div>
                    
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>

</html>