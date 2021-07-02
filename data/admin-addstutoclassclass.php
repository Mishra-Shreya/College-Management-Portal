<?php

if (isset($_POST['addstutoclass'])) {
    
    require 'database.php';
    
    $studentid = $_POST['stcstu'];
    $classdet = $_POST['addstutoclass'];
    $cid = intval($_POST['classidforadd']);

    //echo $classdet;
    
    
    if (empty($studentid) || empty($classdet) || empty($cid)) {
        //echo "<script> alert ('') ; </script>";
        header("Location: ../adminclass-studentview.php?classid=$cid&error=Error in identifying the data to be deleted!");
        exit();
    } else {
        //if(($stu1 != $stu2)){
            

            $classname = strtolower($classdet);
            //echo $classname;

            include 'database.php';
            $selectstu1 = "SELECT Id,fname,lname,username FROM student WHERE username = ?";
           

            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $selectstu1)) {
                //echo "<script> alert ('error=sqlerrorstu1') ; </script>";
                header("Location: ../adminclass-studentview.php?classid=$cid&error=sqlerrorstu1");
                exit();
            } else {
                mysqli_stmt_bind_param($stmt, "s", $studentid);
                mysqli_stmt_execute($stmt);
                $result1 = mysqli_stmt_get_result($stmt);

                $res1 = mysqli_fetch_assoc($result1);

                    $stu1uid = $res1['username'];
                    //echo $stu1uid;
                    $stu1fn = $res1['fname'];
                    //echo $stu1fn;
                    $stu1ln = $res1['lname'];
                    //echo $stu1ln;

                    //$stu2uid = $res2['username'];
                    //$stu2fn = $res2['fname'];
                    //$stu2ln = $res2['lname'];

                    $sql = "SELECT * FROM `".$classname."` WHERE `studentusername` = ?";
                    $stmt = mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                        //echo "<script> alert ('error=sqlerror') ; </script>";
                        header("Location: ../adminclass-studentview.php?classid=$cid&error=sqlerror");
                        exit();
                    } else {
                        mysqli_stmt_bind_param($stmt, "s", $stu1uid);
                        mysqli_stmt_execute($stmt);
                        mysqli_stmt_store_result($stmt);
                        $rowCount = mysqli_stmt_num_rows($stmt);

                        if ($rowCount > 0) {
                            //echo "<script> alert ('error=studentalreadyexists') ; </script>";
                            header("Location: ../adminclass-studentview.php?classid=$cid&error=Student already exists in class!");
                            exit();
                        } else {
                            $sql = "INSERT INTO `".$classname."` (`stufname`, `stulname`, `studentusername`) VALUES (?, ?, ?)";
                            $stmt = mysqli_stmt_init($conn);
                            if (!mysqli_stmt_prepare($stmt, $sql)) {
                                //echo "<script> alert ('error=sqlerrorininsertstmt') ; </script>";
                                header("Location: ../adminclass-studentview.php?classid=$cid&error=sqlerrorininsertstmt");
                                exit();
                            } else {

                                //$dobsql = date('Y-m-d', strtotime($dob));
                                //$hashedPass = password_hash($password, PASSWORD_DEFAULT);

                                mysqli_stmt_bind_param($stmt, "sss", $stu1fn, $stu1ln, $stu1uid,);
                                $check = mysqli_stmt_execute($stmt);
                                
                                if($check) {

                                    $classexplodearray = explode(" ",$classname);
                                    $dept = strtoupper($classexplodearray[1]);
                                    //echo $dept;
                                    $year = strtoupper($classexplodearray[2]);
                                    $division = strtoupper($classexplodearray[3]);
                                    

                                    $sqlstu = "INSERT INTO studentclassdetails (StuUsername, StuFirstname, StuLastname, year, dept, division) VALUES (?, ?, ?, ?, ?, ?)";
                                    $stmtstu = mysqli_stmt_init($conn);
                                    if (!mysqli_stmt_prepare($stmtstu, $sqlstu)) {
                                        //echo "<script> alert ('error=sqlerrorstuclassdetails') ; </script>";
                                        header("Location: ../adminclass-studentview.php?classid=$cid&error=sqlerrorstuclassdetails");
                                        exit();
                                    } else {

                                        //$dobsql = date('Y-m-d', strtotime($dob));
                                        //$hashedPass = password_hash($password, PASSWORD_DEFAULT);

                                        mysqli_stmt_bind_param($stmtstu, "ssssss", $stu1uid, $stu1fn, $stu1ln, $year, $dept, $division);
                                        $checkstu = mysqli_stmt_execute($stmtstu);

                                        if($checkstu) {
                                            //echo "<script> alert ('inserted in class and stuclassdetail') ; </script>";


                                            header("Location: ../adminclass-studentview.php?classid=$cid&success=Student is added to class!");

                                        }
                                    }
                                } else {
                                    //echo "<script> alert ('not inserted in class fe civil and not stuclassdetail') ; </script>";
                                    header("Location: ../adminclass-studentview.php?classid=$cid&error=Ooops. There was an error. Student cannot be not added to class!");
                                    exit();
                                }
                            }
                        }
                        
                    }
                }
            //}
        /*} else {
            header("Location: ../adminclass-studentview.php?stuulty1andstuulty2cannotbesame");
            exit();
        }*/
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>
