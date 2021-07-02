<?php

if (isset($_POST['deleteclass'])) {
    //Add database connection
    require 'database.php';

    $id = $_POST['deleteclass'];
    
        
    include 'database.php';

    $selectclass = mysqli_query($conn, "SELECT * FROM class WHERE Id=$id");

    while($ressc = mysqli_fetch_assoc($selectclass))
    {
        
        $dept = $ressc['dept'];
        $year = $ressc['year'];
        $div = $ressc['division'];
        $facuname = $ressc['fac1username'];
        
    }

    $classn = "Class ".$dept." ".$year." ".$div;
    $classname = strtolower($classn);
        
        $sql = "DELETE FROM class WHERE Id=?";
        $stmt = mysqli_stmt_init($conn);
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../adminclassview.php?error=sqlerror");
            exit();
        } else {

            //$dobsql = date('Y-m-d', strtotime($dob));
            //$hashedPass = password_hash($password, PASSWORD_DEFAULT);

            mysqli_stmt_bind_param($stmt, "s", $id);
            $check = mysqli_stmt_execute($stmt);

            if ($check) {

                $sql = "DROP TABLE `".$classname."`";
               
                $retval = mysqli_query($conn, $sql);

                if($retval) {

                    $sqlll = "DELETE FROM facultyclassdetails WHERE FacUsername=?";
                    $stmt = mysqli_stmt_init($conn);
                    //$stmt = mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($stmt, $sqlll)) {
                        header("Location: ../adminclassview.php?error=sqlerror");
                        exit();
                    } else {

                        //$dobsql = date('Y-m-d', strtotime($dob));
                        //$hashedPass = password_hash($password, PASSWORD_DEFAULT);

                        mysqli_stmt_bind_param($stmt, "s", $facuname);
                        $checking = mysqli_stmt_execute($stmt);

                        if ($checking) {

                            $sqlll = "DELETE FROM studentclassdetails WHERE dept=? AND year=? AND division=?";
                            $stmt = mysqli_stmt_init($conn);
                            //$stmt = mysqli_stmt_init($conn);
                            if (!mysqli_stmt_prepare($stmt, $sqlll)) {
                                header("Location: ../adminclassview.php?error=sqlerror1");
                                exit();
                            } else {

                                //$dobsql = date('Y-m-d', strtotime($dob));
                                //$hashedPass = password_hash($password, PASSWORD_DEFAULT);

                                mysqli_stmt_bind_param($stmt, "sss", $dept, $year, $div);
                                $checkingfinal = mysqli_stmt_execute($stmt);
                                
                                if ($checkingfinal) {
                                    //echo '<script> alert("Data Deleted"); </script>';
                                    header("Location: ../adminclassview.php?success=Deletion was successful!");
                                    exit();

                                } else {
                                    //echo '<script> alert("admin-class-deleted-and-dropped-and-facdet-deleted"); </script>';
                                    header("Location: ../adminclassview.php?error=Error in deletion.");
                                    exit();
                                }
                            }

                        } else {
                            //echo '<script> alert("admin-class-deleted-and-dropped-and-facdet-NOT-deleted"); </script>';
                                header("Location: ../adminclassview.php?error=Error in deletion.");
                                exit();
                        }

                    }

                } else {
                    //echo '<script> alert("admin-class-deleted-and-NOT-dropped"); </script>';
                        header("Location: ../adminclassview.php?error=Error in deletion.");
                        exit();
                }

            } else {
                    //echo '<script> alert("Data Deleted"); </script>';
                    header("Location: ../adminclassview.php?success=Class could not be deleted.");
                    exit();
            }   
        }
           
    //}
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
