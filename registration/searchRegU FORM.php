<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name']) && $_SESSION['access']>=3 ) {

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Receipt Number</title>
    <link rel="stylesheet" href="../bs/css/bootstrap.css">
    <link rel="stylesheet" href="../css/styles.css">
    <script src="../bs/js/jquery-3.6.0.js"></script>
    <script src="../bs/js/popper.min.js"></script>
    <script src="../bs/js/bootstrap.js"></script>
</head>

<body>
    <div class="container">
        <h3 class="text-center">Select Receipt Details</h3>
        <hr>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form action="displayRegU.php" method="post">
                    <select name="stud_admin" class="form-control" required id="">
                        <?php
                        include("dbcon.php");
                        $sql = "select stud_admin from registration";
                        $result = mysqli_query($conn,$sql);
                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                ?>
                        <option value="<?php echo $row['stud_admin'];?>"><?php echo $row['stud_admin'];?></option>
                                <?php
                            }
                        }
                        mysqli_close($conn);
                        ?>
                    </select>                                        
                    <div class="buttons">
                        <button type="submit" class="btn btn-info">Update</button>
                        &nbsp;
                        <a href="regisration.php" class="btn btn-dark">Cancel Update</a>
                    </div>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>

</html>
<?php
}else{

    header("Location:../index.php?error=UNAUTHORISED");

 exit();
}

?>