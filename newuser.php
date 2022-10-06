<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bs/css/bootsrap.css">
    <link rel="stylesheet" href="../css/styles.css">
    <script src="../bs/js/popper-min.js"></script>
    <script src="../bs/js/jquery-3.6.0.js"></script>
    <script src="../bs/js/bootsrap.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <?php
            //Removing SQL strings
            include("dbcon.php");
                // Removing SQL Injections
               
                $firstname = mysqli_real_escape_string($conn,$_POST['fname']);
                $middlename = mysqli_real_escape_string($conn,$_POST['midname']);
                $lastname = mysqli_real_escape_string($conn,$_POST['lname']);
                $department = mysqli_real_escape_string($conn,$_POST['department']);
                $password = mysqli_real_escape_string($conn,$_POST['password']);
                $username = mysqli_real_escape_string($conn,$_POST['username']);
                $usergroup = mysqli_real_escape_string($conn,$_POST['usergroup']);
                // Query String for adding a new record in the database table
                $sql = "insert into users(first_name,middle_name,last_name,department,user_name,password,user_group)
                values('$firstname','$middlename','$lastname','$department','$username','$password','$usergroup')";
                // Executing the query string above
                if(mysqli_query($conn,$sql) == true){
                    print "<p class = 'text-white text-center'>New user added successfully</p>";
                    print "<a href = 'index.php' class = 'btn btn-outline-primary'>Login</a>";
                }
                else{
                    print "<p class = 'text-white text-center'>User not added</p>";
                    print "<a href = 'index.php' class = 'btn btn-outline-danger'>Login</a>";
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