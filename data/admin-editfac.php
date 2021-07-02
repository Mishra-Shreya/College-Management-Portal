<?php

if (isset($_POST['updatesubmit'])) {
    //Add database connection
    require 'database.php';

    $id = $_POST['updatesubmit'];
    //echo $id;
    $fname = $_POST['efac-fname'];
    $lname = $_POST['efac-lname'];
    $qualification = $_POST['equalification'];
   //$year = $_POST['eyear'];
    //$dept = $_POST['edept'];
    //$division = $_POST['ediv'];
    $gender = $_POST['egender'];
    $dob = $_POST['edob'];
    $phone = $_POST['ephone'];
    $email = $_POST['eemail'];

    if (empty($fname) || empty($lname)
        || empty($qualification) || empty($gender) 
        || empty($dob) || empty($phone) || empty($email)) {
        header("Location: ../admin-faculty-crud.php?error=Fields cannot be empty.");
        exit();
    } 
    
    else {
        //$sql = "SELECT username FROM faculty WHERE Id == ?)";
        
        
        $sql = "UPDATE faculty SET fname=?, lname=?, qualification=?, gender=?, dob=?, phone=?, email=? WHERE Id=?";
        $stmt = mysqli_stmt_init($conn);
        //$stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../admin-faculty-crud.php?error=sqlerror");
            exit();
        } else {

            $dobsql = date('Y-m-d', strtotime($dob));
            //$hashedPass = password_hash($password, PASSWORD_DEFAULT);

            mysqli_stmt_bind_param($stmt, "ssssssss", $fname, $lname, $qualification, $gender, $dobsql, $phone, $email, $id);
            mysqli_stmt_execute($stmt);
                header("Location: ../admin-faculty-crud.php?success=Faculty details have been updated.");
                exit();
        }
           
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
