<?php

if (isset($_POST['updatesubmit'])) {

    require 'database.php';

    $id = $_POST['updatesubmit'];

    $fname = $_POST['editstu-fname'];
    $lname = $_POST['editstu-lname'];
   
    $gender = $_POST['editgender'];
    $dob = $_POST['edob'];
    $phone = $_POST['ephone'];
    $email = $_POST['editemail'];

    if (empty($fname) || empty($lname)
         || empty($gender) 
        || empty($dob) || empty($phone) || empty($email)) {
        header("Location: ../admin-student-crud.php?error=Any Field cannot be empty.");
        exit();
    } 

    else {
        
        $sql = "UPDATE student SET fname=?, lname=?, gender=?, dob=?, phone=?, email=? WHERE Id=?";
        $stmt = mysqli_stmt_init($conn);
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../admin-student-crud.php?error=sqlerror");
            exit();
        } else {

            $dobsql = date('Y-m-d', strtotime($dob));
            //$hashedPass = password_hash($password, PASSWORD_DEFAULT);

            mysqli_stmt_bind_param($stmt, "sssssss", $fname, $lname, $gender, $dobsql, $phone, $email, $id);
            mysqli_stmt_execute($stmt);
                header("Location: ../admin-student-crud.php?success=Student details have been updated.");
                exit();
        }
           
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
