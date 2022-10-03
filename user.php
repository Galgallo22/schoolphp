<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Details</title>
    <link rel="stylesheet" href="../bs/css/bootsrap.css">
    <link rel="stylesheet" href="../css/styles.css">
    <script src="../bs/js/popper.min.js"></script>
    <script src="../bs/js/jquery-3.6.0.js"></script>
    <script src="../bs/js/bootsrap.js"></script>

</head>
<body>
    <div class="container">
        <h3><b>Users Details</b></h3>
        <hr>
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form action="newuser.php" method="post">
            <label for="">First Name</label>
            <input type="text" name="fname" class="form-control" required id="">
            <label for="">Middle Name</label>
            <input type="text" name="midname" class="form-control" required id="">
            <label for="">Last Name</label>
            <input type="text" name="lname" class="form-control" required id="">
            <label for="">Department</label>
            <select name="department" class="form-control" required id="">
            <option value="ICT">ICT</option>
            <option value="HR">HR</option>
            <option value="Marketing">Marketing</option>
            <option value="Finance">Finance</option>
            <option value="Training">Training</option>
            </select>
            <label for="">Username</label>
            <input type="text" name="username" class="form-control" required id="">
            <label for="">Password</label>
            <input type="password" name="password" class="form-control" required id="">
            <label for="">User Group</label>
            <select name="usergroup" class="form-control" required id="">
                <option value="Systems_adminsrator">System Administrator</option>
                <option value="front_office">Front Office</option>
                <option value="accounts">Accounts</option>
                <option value="adminisrator">Admistrator</option>
                <option value="management">Management</option>

            </select>
            <div class="buttons">
                        <button class="btn btn-primary" type="submit">Submit</button>
                        &nbsp;
                        <button class="btn btn-dark" type="reset">Reset</button>
                        &nbsp;
                        Already have an account? <a href="index.php">Login</a>
                    </div>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</body>
</html>