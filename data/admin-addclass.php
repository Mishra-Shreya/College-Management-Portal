<?php

if (isset($_POST['addclass'])) {
    //Add database connection
    require 'database.php';
    
    $dept = $_POST['ecdept'];
    $year = $_POST['eclassyear'];
    $division = $_POST['ecdivision'];
    $fac1 = $_POST['ecfac1'];
    //$fac2 = $_POST['fac2'];

   
 
 
    if (empty($dept) || empty($year) || empty($division) 
        || empty($fac1)) {
        header("Location: ../adminclassview.php?error=Fields cannot be empty!");
        exit();
    } else {
       

            include 'database.php';
            $selectfac1 = "SELECT Id,fname,lname,username FROM faculty WHERE username = ?";
           

            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $selectfac1)) {
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


                    $sql = "SELECT Id, dept, year, division FROM class WHERE `dept`=? AND `year`=? AND `division`=?";
                    $stmt = mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                        header("Location: ../adminclassview.php?error=sqlerror");
                        exit();
                    } else {
                        mysqli_stmt_bind_param($stmt, "sss", $dept, $year, $division);
                        mysqli_stmt_execute($stmt);
                        mysqli_stmt_store_result($stmt);
                        $rowCount = mysqli_stmt_num_rows($stmt);

                        if ($rowCount > 0) {
                            header("Location: ../adminclassview.php?error=The Class you want to create already exists!");
                            exit();
                        } else {
                            $sql = "INSERT INTO class (dept, year, division, fac1, fac1ln, fac1username) VALUES (?, ?, ?, ?, ?, ?)";
                            $stmt = mysqli_stmt_init($conn);
                            if (!mysqli_stmt_prepare($stmt, $sql)) {
                                //$confirm = echo (<script> confirm('error=sqlerror'); </script>);
                                header("Location: ../adminclassview.php?error=sqlerror");
                                exit();
                            } else {

                                //$dobsql = date('Y-m-d', strtotime($dob));
                                //$hashedPass = password_hash($password, PASSWORD_DEFAULT);

                                mysqli_stmt_bind_param($stmt, "ssssss", $dept, $year, $division, $fac1fn, $fac1ln, $fac1uid);
                                $check = mysqli_stmt_execute($stmt);
                                
                                if($check) {
                                    

                                    $sqlfac = "INSERT INTO facultyclassdetails (FacUsername, FacFirstname, FacLastname, year, dept, division) VALUES (?, ?, ?, ?, ?, ?)";
                                    $stmtfac = mysqli_stmt_init($conn);
                                    if (!mysqli_stmt_prepare($stmtfac, $sqlfac)) {
                                        header("Location: ../adminclassview.php?error=sqlerrorfac");
                                        exit();
                                    } else {

                                        //$dobsql = date('Y-m-d', strtotime($dob));
                                        //$hashedPass = password_hash($password, PASSWORD_DEFAULT);

                                        mysqli_stmt_bind_param($stmtfac, "ssssss", $fac1uid, $fac1fn, $fac1ln, $year, $dept, $division);
                                        $checkfac = mysqli_stmt_execute($stmtfac);

                                        if($checkfac) {

                                            $classname1 = "class ".$dept." ".$year." ".$division;
                                            $classname = strtolower($classname1);
                                            //echo $classname;
            
                                            //creating the class in database
                                            $newclassstudata = "CREATE TABLE `$classname` (
                                                Id INT(11) not null PRIMARY KEY AUTO_INCREMENT,
                                                stufname VARCHAR(50) not null,
                                                stulname VARCHAR(50) not null,
                                                studentusername VARCHAR(50) not null UNIQUE
                                                )";
                                            //$stmt = mysqli_stmt_init($conn);
            
                                            $stuclasscreate = mysqli_query($conn, $newclassstudata);
            
                                            if (!$stuclasscreate) {
                                                //echo"could not create table ".mysqli_error($conn);
                                                header("Location: ../adminclassview.php?error=Error in creating class");
                                                exit();
                                            } else {
            
                                                header("Location: ../adminclassview.php?success=Class is created succesfully!");
                                                exit();
                                            }
                                            
                                        } else {
                                            header("Location: ../adminclassview.php?error=Error in creating class");
                                            exit();
                                        }
                                    }
                                } else {
                                    header("Location: ../adminclassview.php?error=Oops! Faculty is already in another class!");
                                    exit();
                                }
                            }
                        }
                    }
            }
            
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>
