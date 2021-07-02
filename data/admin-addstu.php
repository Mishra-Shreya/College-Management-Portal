<?php

if (isset($_POST['submit'])) {
    //Add database connection
    require 'database.php';

    $fname = $_POST['stu-fname'];
    $lname = $_POST['stu-lname'];
    $username = $_POST['username'];
    $password = $_POST['pass'];
    //$confirmPass = $_POST['confirmpassword'];
   
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    if (empty($fname) || empty($lname) || empty($username) 
        || empty($password) 
        || empty($gender) || empty($dob) || empty($phone) || empty($email)) {
        header("Location: ../admin-student-crud.php?error=Fields cannot be empty!");
        exit();
    } elseif (!preg_match("/^[a-zA-Z0-9@]*/", $username)) {
        header("Location: ../admin-student-crud.php?error=Invalid Username. Username can include a-z, A-Z, '@', 0-9.");
        exit();
    }

    /*elseif($password !== $confirmPass) {
        header("Location: ../admin-student-crud.php?error=passwordsdonotmatch&username=".$username);
        exit();
    }*/

    else {
        $sql = "SELECT username FROM student WHERE username = ?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../admin-student-crud.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $rowCount = mysqli_stmt_num_rows($stmt);

            if ($rowCount > 0) {
                header("Location: ../admin-student-crud.php?error=Oops. Username is already taken!");
                exit();
            } else {
                $sql = "INSERT INTO student (fname, lname, username, password, gender, dob, phone, email) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../admin-student-crud.php?error=sqlerror");
                    exit();
                } else {

                    $dobsql = date('Y-m-d', strtotime($dob));
                    $hashedPass = password_hash($password, PASSWORD_DEFAULT);

                    mysqli_stmt_bind_param($stmt, "ssssssss", $fname, $lname, $username, $hashedPass, $gender, $dobsql, $phone, $email);
                    mysqli_stmt_execute($stmt);
                        header("Location: ../admin-student-crud.php?success=Student added successfully.");
                        exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>
