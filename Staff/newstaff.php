<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <link rel="stylesheet" href="../bs/css/bootstrap.css">
    <link rel="stylesheet" href="../css/styles.css">
    <script src="../bs/js/jquery-3.6.0.js"></script>
    <script src="../bs/js/popper.min.js"></script>
    <script src="../bs/js/bootstrap.js"></script>
</head>

<body>
    <div class="container">
        <h3 class="text-center">Success</h3>
        <hr>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <?php
                include("dbcon.php");
                // Removing SQL Injections
                $firstname = mysqli_real_escape_string($conn,$_POST['fname']);
                $middlename = mysqli_real_escape_string($conn,$_POST['midname']);
                $lastname = mysqli_real_escape_string($conn,$_POST['lname']);
                $gender = mysqli_real_escape_string($conn,$_POST['gender']);
                $position = mysqli_real_escape_string($conn,$_POST['position']);
                $department = mysqli_real_escape_string($conn,$_POST['department']);
                // Query String for adding a new record in the database table
                $sql = "insert into staffdetails(first_name,middle_name,last_name,gender,position,department)
                values('$firstname','$middlename','$lastname','$gender','$position','$department')";
                // Executing the query string above
                if(mysqli_query($conn,$sql) == true){
                    print "<p>New staff added successfully</p>";
                    print "<a href='staffdetails.php' class='btn btn-outline-primary'>Add New</a>";
                }
                else{
                    print "<p>New staff not added</p>";
                    print "<a href='staffdetails.php' class='btn btn-outline-danger'>Try Again</a>";
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