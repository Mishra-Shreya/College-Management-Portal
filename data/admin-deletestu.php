<?php

if (isset($_POST['deletesubmit'])) {
    //Add database connection
    require 'database.php';

    $id = $_POST['deletesubmit'];
    
        
        
        $sql = "DELETE FROM student WHERE Id=?";
        $stmt = mysqli_stmt_init($conn);
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../admin-student-crud.php?error=sqlerror");
            exit();
        } else {

            $dobsql = date('Y-m-d', strtotime($dob));
            //$hashedPass = password_hash($password, PASSWORD_DEFAULT);

            mysqli_stmt_bind_param($stmt, "s", $id);
            mysqli_stmt_execute($stmt);
                
                echo '<script> alert("Data Deleted"); </script>';
                header("Location: ../admin-student-crud.php?success=Student details has been deleted");
                exit();
        }
           
    //}
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
