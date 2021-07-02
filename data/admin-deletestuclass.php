<?php

if (isset($_POST['deletestuclass'])) {
    //Add database connection
    require 'database.php';

    $id = $_POST['deletestuclass']; //class table id
    $classdet = $_POST['classnamefordel'];
    $cid = intval($_POST['classidfordel']);

    include 'database.php';

    $classname = strtolower($classdet);

    $selectclass = mysqli_query($conn, "SELECT * FROM `".$classname."` WHERE Id=$id");

    while($ressc = mysqli_fetch_assoc($selectclass))
    {
        
        $stuuname = $ressc['studentusername'];
        
    }
    
    if (empty($id) || empty($classdet) || empty($cid)) {
        //echo "<script> alert ('empty class') ; </script>";
        header("Location: ../adminclass-studentview.php?classid=$cid&error=Error");
        exit();
    } else {

        $classname = strtolower($classdet);
        
        $sql = "DELETE FROM `".$classname."` WHERE Id=?";
        $stmt = mysqli_stmt_init($conn);
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../adminclass-studentview.php?classid=$cid&error=sqlerror");
            exit();
        } else {

            mysqli_stmt_bind_param($stmt, "s", $id);
            $checking = mysqli_stmt_execute($stmt);

            if ($checking) {

                $sqlll = "DELETE FROM studentclassdetails WHERE StuUsername=?";
                $stmt = mysqli_stmt_init($conn);
                //$stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sqlll)) {
                    header("Location: ../adminclass-studentview.php?classid=$cid&error=sqlerrorstudetail");
                    exit();
                } else {

                    mysqli_stmt_bind_param($stmt, "s", $stuuname);
                    $checkingfinal = mysqli_stmt_execute($stmt);
                    
                    if ($checkingfinal) {
                        //echo '<script> alert("Data Deleted"); </script>';
                        header("Location: ../adminclass-studentview.php?classid=$cid&success=Student has been removed from class.");
                        exit();

                    } else {
                        //echo '<script> alert("admin-stuclass-deleted-only"); </script>';
                        header("Location: ../adminclass-studentview.php?classid=$cid&error=Error in deletion");
                        exit();
                    }
                }

            } else {
                //echo '<script> alert("admin-student-class-NOT-deleted"); </script>';
                header("Location: ../adminclass-studentview.php?classid=$cid&error=Error in deletion.");
                    exit();
            }
               
        }
           
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
