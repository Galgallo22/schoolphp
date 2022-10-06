<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name']) && $_SESSION['access'] ==1 or $_SESSION['access']==3 or $_SESSION['access'] ==5) {
 ?>
<?php
include 'dbcon.php';


$sort ='ASC';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $sort = mysqli_real_escape_string($conn,$_POST['sort']);
    // echo $invoice_date;
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
    <label for="">registration date</label>
        <select name="sort" id="">
            <option value="asc">ascending</option>
            <option value="desc">descending</option>
        </select>
        <input type="submit" value="filter">
    </form>
        <table class="table table-bordered table-striped table-responsive-md">
            <tr>
                <th class="top-heading" colspan="17">ENQUIRIES REPORTS</th>
            </tr>
            <tr>
                <th>STUDENT ADMISSION NUMBER</th>
                <th>REGISTRATION DATE</th>
                <th>FIRST NAME</th>
                <th>OTHER NAMES</th>
                <th>GENDER</th>
                <th>DATE OF BIRTH</th>
                <th>TELEPHONE NUMBER</th>
                <th>EMAIL</th>
                <th>NEXT OF KIN</th>
                <th>NEXT OF KIN NUMBER</th>
                <th>COURSE ATTENDED FOR</th>
                <th>KCSE MEAN GRADE</th>
                <th>EDUCATIONAL LEVEL</th>
                <th>HIGH SCHOOL ATTENDED</th>
                <th>YEAR TO</th>
                <th>YEAR FROM</th>
                
                <th>COLLEGE ATTENDED</th>
            </tr>
            <?php
            // include("dbcon.php");
            $sql = "select * from registration ORDER BY reg_date $sort";
        
            $result = mysqli_query($conn,$sql);
            if($result->num_rows > 0){
                while($row=$result->fetch_assoc()){
                    ?>
            <tr>
                <td><?php print $row['stud_admin'];?></td>
                <td><?php print $row['reg_date'];?></td>
                <td><?php print $row['first_name'];?></td>
                <td><?php print $row['other_names'];?></td>
                <td><?php print $row['gender'];?></td>
                <td><?php print $row['dob'];?></td>
                <td><?php print $row['postal_address'];?></td>
                <td><?php print $row['tnumber'];?></td>
                <td><?php print $row['email'];?></td>
                <td><?php print $row['nok'];?></td>
                <td><?php print $row['nk_number'];?></td>
                <td><?php print $row['cef'];?></td>
                <td><?php print $row['kmg'];?></td>
                <td><?php print $row['e_level'];?></td>
                <td><?php print $row['hschool_attended'];?></td>
                <td><?php print $row['year_to'];?></td>
                <td><?php print $row['year_from'];?></td>
                <td><?php print $row['college_attended'];?></td>
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