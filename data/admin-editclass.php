<?php

if (isset($_POST['editclass'])) {
    
    require 'database.php';

    $id = $_POST['editclass'];
    //echo $id;
    $username = $_POST['classfac1'];
    $year = $_POST['classyear'];
    $dept = $_POST['classdept'];
    $division = $_POST['classdivision'];
    
    if (empty($id) || empty($username)
        || empty($year) || empty($dept) 
        || empty($division)) {
        header("Location: ../adminclassview.php?error=Fields cannot be empty!");
        exit();
    } 
    
    else {
        //$sql = "SELECT username FROM faculty WHERE Id == ?)";

        include 'database.php';
            $selectfac1 = "SELECT Id,fname,lname,username FROM faculty WHERE username = ?";
           

            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $username)) {
                header("Location: ../admin.php?error=sqlerrorfac1");
                exit();
            } else {
                mysqli_stmt_bind_param($stmt, "s", $fac1);
                mysqli_stmt_execute($stmt);
                $result1 = mysqli_stmt_get_result($stmt);

                $res1 = mysqli_fetch_assoc($result1);

                    $fac1uid = $res1['username'];
                    $fac1fn = $res1['fname'];
                    $fac1ln = $res1['lname'];
        
        
                $sql = "UPDATE class SET fac1=?, fac1ln=?, fac1username=?, year=?, dept=?, division=? WHERE Id=?";
                $stmt = mysqli_stmt_init($conn);
              
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../adminclassview.php?error=sqlerror");
                    exit();
                } else {

                    //$dobsql = date('Y-m-d', strtotime($dob));
                    //$hashedPass = password_hash($password, PASSWORD_DEFAULT);

                    mysqli_stmt_bind_param($stmt, "sssssss", $fac1ln, $fac1fn, $fac1uid, $year, $dept, $division, $email, $id);
                    $check = mysqli_stmt_execute($stmt);

                    if ($check) {
                        $sql = "UPDATE facultyclassdetails SET FacFirstname=?, FacLastname=?, FacUsername=?, year=?, dept=?, division=? WHERE Id=?";
                        $stmt = mysqli_stmt_init($conn);
                        //$stmt = mysqli_stmt_init($conn);
                        if (!mysqli_stmt_prepare($stmt, $sql)) {
                            header("Location: ../adminclassview.php?error=sqlerror");
                            exit();
                        } else {
    
                            //$dobsql = date('Y-m-d', strtotime($dob));
                            //$hashedPass = password_hash($password, PASSWORD_DEFAULT);
    
                            mysqli_stmt_bind_param($stmt, "sssssss", $fac1ln, $fac1fn, $fac1uid, $year, $dept, $division, $email, $id);
                            mysqli_stmt_execute($stmt);
    
    
                            header("Location: ../adminclassview.php?success=Class details have been updated.");
                            exit();
                        }

                    } else {

                        //admin-class-updated-facultydetnotupdated
                        header("Location: ../adminclassview.php?error=Error in updating class details. Maybe, you assigned a faculty who is already in another class to this class ");
                        exit();
                    }
                    
                }
        } 
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
