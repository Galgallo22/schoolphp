<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enquiry Details</title>
    <link rel="stylesheet" href="../bs/css/bootstrap.css">
    <link rel="stylesheet" href="../css/styles.css">
    <script src="../bs/js/jquery-3.6.0.js"></script>
    <script src="../bs/js/popper.min.js"></script>
    <script src="../bs/js/bootstrap.js"></script>
</head>

<body>
    <div class="container">
        <h3 class="text-center">Enquiry Details</h3>
        <hr>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form action="newenquiry.php" method="post">
                <?php if (isset($_GET['error'])) { ?>
                        <p class="text-light"><?php echo $_GET['error']; ?></p>
                    <?php } ?>
                    <label for=""><b>First Name</b></label>
                    <input type="text" name="fname" class="form-control" required id="">
                    <label for=""><b>other Names</b></label>
                    <input type="text" name="onames" class="form-control" required id="">
                    <label for=""><b>Telephone Number</b></label>
                    <input type="number" name="tno" class="form-control" required id="">
                    <label for=""><b>Email</b></label>
                    <input type="text" name="email" class="form-control" required id="">
                    <label for=""><b>Course</b></label>
                    <select name="course" class="form-control" required id="">
                        <option value="Graphic Design">Graphic Design</option>
                        <option value="Web Design">Web Design</option>
                        <option value="Software">Software</option>
                        <option value="CCTV Installation">CCTV Installation</option>
                        <option value="Cyber Security">Cyber Security</option>
                      </select>
                    <label for=""><b>How Did You Know Us</b></label>
                    <input type="radio" name="hdyku" value="Newspaper" required id="">&nbsp;<label for="">Newspaper</label>
                    <input type="radio" name="hdyku" value="Television" required id="">&nbsp;<label for="">Television</label>
                    <input type="radio" name="hdyku" value="Student" required id="">&nbsp;<label for="">Student</label>
                    <input type="radio" name="hdyku" value="Others" required id="">&nbsp;<label for="">Others</label>
                    <input type="radio" name="hdyku" value="Alumni" required id="">&nbsp;<label for="">Alumni</label>
                    <input type="radio" name="hdyku" value="Staff Members" required id="">&nbsp;<label for="">Staff Members</label>
                    <input type="radio" name="hdyku" value="social Media" required id="">&nbsp;<label for="">Social Media</label>
                    <br>
                    
                <div class="container">
                <label for="">Comments</label>
                 <input type="text" class="text-center" name="comments" placeholder="Your COMMENT" required id="">
            
                </div>

                <div class="buttons">
                        <button type="submit" class="btn btn-primary text-centered">Add New</button>
                        &nbsp;
                        <a href="searchEnquiryU FORM.php" class="btn btn-info">Update</a>
                        &nbsp;
                        <a href="searchEnquiryD FORM.php" class="btn btn-danger">Delete</a>
                    </div>
                    
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>

</html>