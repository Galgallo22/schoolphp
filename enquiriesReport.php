<?php
include 'dbcon.php';
// $_GLOBAL[]
$enquiry_date_from ='1970-01-01';
$enquiry_date_to ='2100-01-01';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $enquiry_date_from = mysqli_real_escape_string($conn,$_POST['enquiry_date_from']);
    $enquiry_date_to = mysqli_real_escape_string($conn,$_POST['enquiry_date_to']);
    // echo $enquiry_date;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enquiries Report</title>
    <link rel="stylesheet" href="bs/css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="bs/js/bootstrap.js"></script>
</head>

<body>
    <br><br><br>

    <div class="container">
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
    <label for="">date from</label>
        <input type="date" name="enquiry_date_from" id="" min=""required>
        <label for="">date to</label>
        <input type="date" name="enquiry_date_to" id="" min="" required>
        <input type="submit" value="filter">
    </form>
        <table class="table table-bordered table-striped table-responsive-md">
            <tr>
                <th class="top-heading" colspan="9">ENQUIRIES REPORTS</th>
            </tr>
            <tr>
                <th>Enquiry ID</th>
                <th>Enquiry Date</th>
                <th>First Name</th>
                <th>Other Name</th>
                <th>Telephone Number</th>
                <th>Email</th>
                <th>Course</th>
                <th>How DId You Know Us</th>
                <th>Comments</th>
            </tr>
            <?php
            // include("dbcon.php");
            $sql = "select * from enquiries where enquiry_date >= '$enquiry_date_from' AND enquiry_date <= '$enquiry_date_to'";
            // where enquiry_date >= '2022-09-30 16:52:00'
            $result = mysqli_query($conn,$sql);
            if($result->num_rows > 0){
                while($row=$result->fetch_assoc()){
                    ?>
            <tr>
                <td><?php print $row['enquiry_id'];?></td>
                <td><?php print $row['enquiry_date'];?></td>
                <td><?php print $row['first_name'];?></td>
                <td><?php print $row['other_names'];?></td>
                <td><?php print $row['tnumber'];?></td>
                <td><?php print $row['email'];?></td>
                <td><?php print $row['course'];?></td>
                <td><?php print $row['hdyku'];?></td>
                <td><?php print $row['comments'];?></td>
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