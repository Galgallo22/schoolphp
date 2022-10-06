<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" href="bs/css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="bs/js/bootstrap.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <br><br><br><br><br>
                <h3 class="text-center text-uppercase text-white">Login</h3>
                <hr>
                <form action="login.php" method="post">
                    <?php if (isset($_GET['error'])) { ?>
                        <p class="error text-light"><?php echo $_GET['error']; ?></p>
                    <?php } ?>
                    <input required placeholder="* Username" class="form-control" 
                    type="text" name="username" id="">
                    <input required placeholder="* Password" class="form-control" 
                    type="password" name="password" id="">
                    <div class="buttons">
                        <button class="btn btn-primary" type="submit">Login</button>
                        &nbsp;
                        Don't have an account? <a href="users FORM.php">Sign Up</a>
                    </div>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>
</html>