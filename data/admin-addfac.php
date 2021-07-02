<?php

if (isset($_POST['submit'])) {
    //Add database connection
    require 'database.php';

    $fname = $_POST['fac-fname'];
    $lname = $_POST['fac-lname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    //$confirmPass = $_POST['confirmpassword'];
    $qualification = $_POST['qualification'];
    
    //$dept = $_POST['dept'];
    
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    if (empty($fname) || empty($lname) || empty($username) 
        || empty($password) || empty($qualification)
        || empty($gender) || empty($dob) || empty($phone) || empty($email)) {
        header("Location: ../admin-faculty-crud.php?error=Fields cannot be empty!");
        exit();
    } elseif (!preg_match("/^[a-zA-Z0-9@]*/", $username)) {
        header("Location: ../admin-faculty-crud.php?error=Invalid Username. Username can include a-z, A-Z, '@', 0-9.");
        exit();
    }

    /*elseif($password !== $confirmPass) {
        header("Location: ../admin-faculty-crud.php?error=passwordsdonotmatch&username=".$username);
        exit();
    }*/

    else {
        $sql = "SELECT username FROM faculty WHERE username = ?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../admin-faculty-crud.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $rowCount = mysqli_stmt_num_rows($stmt);

            if ($rowCount > 0) {
                header("Location: ../admin-faculty-crud.php?error=Oops. Username is already taken!");
                exit();
            } else {
                $sql = "INSERT INTO faculty (fname, lname, username, password, qualification, gender, dob, phone, email) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../admin-faculty-crud.php?error=sqlerror");
                    exit();
                } else {

                    $dobsql = date('Y-m-d', strtotime($dob));
                    $hashedPass = password_hash($password, PASSWORD_DEFAULT);

                    mysqli_stmt_bind_param($stmt, "sssssssss", $fname, $lname, $username, $hashedPass, $qualification, $gender, $dobsql, $phone, $email);
                    mysqli_stmt_execute($stmt);
                        header("Location: ../admin-faculty-crud.php?success=Faculty added successfully.");
                        exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>
