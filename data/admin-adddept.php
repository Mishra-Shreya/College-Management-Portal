<?php

if (isset($_POST['newdept'])) {
    //Add database connection
    require 'database.php';
    
    $dept = $_POST['ndeptname'];
 
    if (empty($dept)) {
        header("Location: ../admindeptview.php?error=Fields cannot be empty!");
        exit();
    }

    else {
        $sql = "SELECT dept FROM department WHERE dept = ?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../admindeptview.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $dept);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $rowCount = mysqli_stmt_num_rows($stmt);

            if ($rowCount > 0) {
                header("Location: ../admindeptview.php?error=Department already exists!");
                exit();
            } else {
                $sql = "INSERT INTO department (dept) VALUES (?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../admindeptview.php?error=sqlerror");
                    exit();
                } else {

                    //$dobsql = date('Y-m-d', strtotime($dob));
                    //$hashedPass = password_hash($password, PASSWORD_DEFAULT);

                    mysqli_stmt_bind_param($stmt, "s", $dept);
                    mysqli_stmt_execute($stmt);
                        header("Location: ../admindeptview.php?success=Department created successfully!");
                        exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>
