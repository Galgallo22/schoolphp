<?php 

session_start(); 
$_SESSION['access'] = 0;

include "dbcon.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['username']);

    $password = validate($_POST['password']);

    if (empty($uname)) {

        header("Location: index.php?error=Username is required");

        exit();

    }else if(empty($password)){

        header("Location: index.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$password'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['user_name'] === $uname && $row['password'] === $password) {

                echo "Logged in!";

                $_SESSION['user_name'] = $row['user_name'];
                
                // $_SESSION['access'] = 0;

                if($row['user_group']=='systems_administrator'){
                    $_SESSION['access'] = 5;
                    header("Location: home.php");
                }else if($row['user_group']=='administrator'){
                    $_SESSION['access'] = 4;
                    header("Location: home.php");
                }else if($row['user_group']=='front_office'){
                    $_SESSION['access'] = 3;
                    header("Location: home.php");
                }else if($row['user_group']=='accounts'){
                    $_SESSION['access'] = 2;
                    header("Location: home.php");
                }else if($row['user_group']=='management'){
                    $_SESSION['access'] = 1;
                    header("Location: home.php");
                }

                $_SESSION['user_group'] = $row['user_group'];
                // 'systems_administrator','administrator','front_office','accounts','management'
                //5,4,3,2,1,0
                $_SESSION['id'] = $row['id'];

                // sleep(20);
                header("Location: home.php");

                exit();

            }else{

                header("Location: index.php?error=Incorrect Username or password");

                exit();

            }

        }else{

            header("Location: index.php?error=Incorrect Username or password");

            exit();

        }

    }

}else{

    header("Location: index.php");

    exit();

}