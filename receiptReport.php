<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name']) && $_SESSION['access']==1 or $_SESSION['access'] ==2 or $_SESSION['access'] ==5) {

 ?>
<?php
include 'dbcon.php';

$sort ='ASC';


if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $sort = mysqli_real_escape_string($conn,$_POST['sort']);
    
    // echo $receipt_date;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt Report</title>
    <link rel="stylesheet" href="bs/css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="bs/js/bootstrap.js"></script>
</head>

<body>
    <br><br><br>

    <div class="container">
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
    <label for="">receipt date</label>
        <select name="sort" id="">
            <option value="asc">ascending</option>
            <option value="desc">descending</option>
        </select>
        <input type="submit" value="filter">
        
    </form>
        <table class="table table-bordered table-striped table-responsive-md">
            <tr>
                <th class="top-heading" colspan="11"> REPORTS</th>
            </tr>
            <tr>
                <th>RECEIPT NUMBER</th>
                <th>RECEIPT DATE</th>
                <th>FIRST NAME</th>
                <th>OTHER NAME</th>
                <th>COURSE</th>
                <th>TUITION FEES</th>
                <th>REGISTRATION FEES</th>
                <th>HOSTELS FEES</th>
                <th>LIBRARY FEES</th>
                <th>TOTAL AMOUNT</th>
                <th>AMOUNT PAID</th>
            </tr>
            <?php
            // include("dbcon.php");
            $sql = "select * from receipt ORDER BY receipt_date $sort;";
            
            $result = mysqli_query($conn,$sql);
            if($result->num_rows > 0){
                while($row=$result->fetch_assoc()){
                    ?>
            <tr>
                <td><?php print $row['receipt_number'];?></td>
                <td><?php print $row['receipt_date'];?></td>
                <td><?php print $row['first_name'];?></td>
                <td><?php print $row['other_names'];?></td>
                <td><?php print $row['course'];?></td>
                <td><?php print $row['tfees'];?></td>
                <td><?php print $row['reg_fees'];?></td>
                <td><?php print $row['hfees'];?></td>
                <td><?php print $row['lfees'];?></td>
                <td><?php print $row['total_amount'];?></td>
                <td><?php print $row['amount_paid'];?></td>
            
            </tr>
                    <?php
                }
            }
            mysqli_close($conn);
            ?>
        </table>
    </div>
</body>

</html>
<?php
}else{

    header("Location:index.php?error=UNAUTHORISED");

 exit();
}

?>