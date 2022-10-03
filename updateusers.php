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
                $userid = mysqli_real_escape_string($conn,$_POST['userid']);
                $firstname = mysqli_real_escape_string($conn,$_POST['fname']);
                $middlename = mysqli_real_escape_string($conn,$_POST['midname']);
                $lastname = mysqli_real_escape_string($conn,$_POST['lname']);
                $department = mysqli_real_escape_string($conn,$_POST['department']);
                $username = mysqli_real_escape_string($conn,$_POST['username']);
                $password = mysqli_real_escape_string($conn,$_POST['password']);
                $usergroup = mysqli_real_escape_string($conn,$_POST['usergroup']);
                
                
                
                // Query String for updating a record in the database table
                $sql = "update users set firts_name='$firstname',first_name='$firstname',middle_name='$middlename'last_name='$lastname',
                department='$department',user_name='$username',password='$password',usergroup='$usergroup',
                where user_id='$userid'";
                // Executing the query string above
                if(mysqli_query($conn,$sql) == true){
                    print "<p>Users details updated successfully</p>";
                    print "<a href='users.php' class='btn btn-outline-info'>Update</a>";
                }
                else{
                    print "<p>Users details not updated</p>";
                    print "<a href='users.php' class='btn btn-outline-danger'>Try Again</a>";
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