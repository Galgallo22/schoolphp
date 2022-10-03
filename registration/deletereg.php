<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Success</title>
    <link rel="stylesheet" href="../bs/css/bootstrap.css">
    <link rel="stylesheet" href="../css/styles.css">
    <script src="../bs/js/jquery-3.6.0.js"></script>
    <script src="../bs/js/popper.min.js"></script>
    <script src="../bs/js/bootstrap.js"></script>
</head>

<body>
    <div class="container">
        <h3 class="text-center">Delete Success</h3>
        <hr>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <?php
                include("dbcon.php");
                // Removing SQL Injections                
                $studadmin = mysqli_real_escape_string($conn,$_POST['stud_admin']);
                // Query String for deleting a record in the database table
                $sql = "delete from registration where stud_admin='$studadmin'";
                // Executing the query string above
                if(mysqli_query($conn,$sql) == true){
                    print "<p>registration details deleted successfully</p>";
                    print "<a href='registration.php' class='btn btn-danger'>Delete</a>";
                }
                else{
                    print "<p>Bill details not deleted</p>";
                    print "<a href='registration.php' class='btn btn-outline-danger'>Try Again</a>";
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