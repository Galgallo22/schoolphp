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
        <h3 class="text-center">Select Receipt Number</h3>
        <hr>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form action="displayReceiptU.php" method="post">
                    <select name="receipt_number" class="form-control" required id="">
                        <?php
                        include("dbcon.php");
                        $sql = "select receipt_number from receipt";
                        $result = mysqli_query($conn,$sql);
                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                ?>
                        <option value="<?php echo $row['receipt_number'];?>"><?php echo $row['receipt_number'];?></option>
                                <?php
                            }
                        }
                        mysqli_close($conn);
                        ?>
                    </select>                                        
                    <div class="buttons">
                        <button type="submit" class="btn btn-info">Update</button>
                        &nbsp;
                        <a href="receipt.php" class="btn btn-dark">Cancel Update</a>
                    </div>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>

</html>