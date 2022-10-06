<?php 

session_start(); 

include "dbcon.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['username']);

    $pass = validate($_POST['password']);

    $uGroup = validate($_POST['ugroup']);

    if (empty($uname)) {

        header("Location: index.php?error=Username is required");

        exit();

    }else if(empty($pass)){

        header("Location: index.php?error=Password is required");

        exit();

    }else if(empty($uGroup)){

        header("Location: index.php?error=User Group is required");

        exit();

    }else{

        $sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass' AND user_group='$uGroup'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['user_name'] === $uname && $row['password'] === $pass && $row['user_group'] === "Systems Administrator") {

                echo "Logged in!";

                $_SESSION['user_name'] = $row['user_name'];

                $_SESSION['staff_name'] = $row['staff_name'];

                $_SESSION['id'] = $row['id'];

                header("Location: sysadmin_dashboard.php");

                exit();

            }else if ($row['user_name'] === $uname && $row['password'] === $pass && $row['user_group'] === "Administrator") {

                echo "Logged in!";

                $_SESSION['user_name'] = $row['user_name'];

                $_SESSION['staff_name'] = $row['staff_name'];

                $_SESSION['id'] = $row['id'];

                header("Location: admin_dashboard.php");

                exit();

            }else if ($row['user_name'] === $uname && $row['password'] === $pass && $row['user_group'] === "Accounts") {

                echo "Logged in!";

                $_SESSION['user_name'] = $row['user_name'];

                $_SESSION['staff_name'] = $row['staff_name'];

                $_SESSION['id'] = $row['id'];

                header("Location: accounts_dashboard.php");

                exit();

            }else if ($row['user_name'] === $uname && $row['password'] === $pass && $row['user_group'] === "Front Office") {

                echo "Logged in!";

                $_SESSION['user_name'] = $row['user_name'];

                $_SESSION['staff_name'] = $row['staff_name'];

                $_SESSION['id'] = $row['id'];

                header("Location: frontoffice_dashboard.php");

                exit();

            }else if ($row['user_name'] === $uname && $row['password'] === $pass && $row['user_group'] === "Management") {

                echo "Logged in!";

                $_SESSION['user_name'] = $row['user_name'];

                $_SESSION['staff_name'] = $row['staff_name'];

                $_SESSION['id'] = $row['id'];

                header("Location: management_dashboard.php");

                exit();

            }else{

                header("Location: index.php?error=Incorrect Username, password or user group");

                exit();

            }

        }else{

            header("Location: index.php?error=Incorrect Username, password or user group");

            exit();

        }

    }

}else{

    header("Location: index.php");

    exit();

}