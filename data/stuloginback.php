<?php

if (isset($_POST['stusub'])) {

    require 'database.php';

    $username = $_POST['stuuser'];
    $password = $_POST['stupass'];

    if (empty($username) || empty($password)) {
        header("Location: ../student.php?error=User name or password cannot be empty!");
        exit();
    } else {
        $sql = "SELECT * FROM student WHERE username = ?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../student.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if ($row = mysqli_fetch_assoc($result)) {
                $passCheck = password_verify($password, $row['password']);
                //$passCheck = ($password == $row['password']);
                if ($passCheck == false) {
                    header("Location: ../student.php?error=Oops, You have entered a wrong password.");
                    exit();
                } elseif ($passCheck == true) {
                    session_start();
                    $_SESSION['sessionId'] = $row['id'];
                    $_SESSION['sessionUser'] = $row['username'];

                    date_default_timezone_set('Asia/Kolkata');
                    $_SESSION['loginTime'] = date( 'h:i:s A', time () );
                    $_SESSION['logindate'] = getdate(date("U"));
                    $_SESSION['loginday'] = date("l");

                    header("Location: ../studentdash.php?success=Logged In Successfully");
                    exit();
                } else {
                    header("Location: ../student.php?error=Oops, You have entered a wrong password");
                    exit();
                }
            } else {
                header("Location: ../student.php?error=The user name cannot be found! Maybe, you have entered a wrong username.");
                exit();
            }
        }
    } 
}
else {
        header("Location: ../student.php?error=Access is forbidden! Login with credentials to access this page");
        exit();
    }
