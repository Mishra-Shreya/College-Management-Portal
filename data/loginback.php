<?php

if (isset($_POST['submit'])) {

    require 'database.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        header("Location: ../admin.php?error=User name or password cannot be empty!");
        exit();
    } else {
        $sql = "SELECT * FROM admin WHERE userid = ?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../admin.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if ($row = mysqli_fetch_assoc($result)) {
                //$passCheck = password_verify($password, $row['pwd']);
                $passCheck = ($password == $row['pwd']);
                if ($passCheck == false) {
                    header("Location: ../admin.php?error=You have entered a wrong password");
                    exit();
                } elseif ($passCheck == true) {
                    session_start();
                    $_SESSION['sessionId'] = $row['Id'];
                    $_SESSION['sessionUser'] = $row['userid'];

                    date_default_timezone_set('Asia/Kolkata');
                    $_SESSION['loginTime'] = date( 'h:i:s A', time () );
                    $_SESSION['logindate'] = getdate(date("U"));
                    $_SESSION['loginday'] = date("l");

                    header("Location: ../admindash.php?success=Logged In Successfully");
                    exit();
                } else {
                    header("Location: ../admin.php?error=Oops, You have entered a wrong password");
                    exit();
                }
            } else {
                //echo "<script>alert('Username does not exist!');</script>";
                header("Location: ../admin.php?error=The user name cannot be found! Maybe, you have entered a wrong username.");
                exit();
            }
        }
    } 
}
else {
        header("Location: ../admin.php?error=Access is forbidden! Login with credentials to access this page");
        exit();
    }



?>
