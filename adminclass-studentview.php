<?php


    $classid = $_GET['classid'];
    //header("Location: ../adminclass-studentview.php?id=$classid");

?>

<?php
require_once 'data/admindashhead.php';
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <?php

                //$classid = $_GET['id'];

                include 'data/database.php';

                $selectclass = mysqli_query($conn, "SELECT * FROM class WHERE Id = $classid");
            
                while($ressc = mysqli_fetch_assoc($selectclass))
                {
                    
                    $dept = $ressc['dept'];
                    $year = $ressc['year'];
                    $div = $ressc['division'];
                    
                }
                
                $stuclass = "Class ".$dept." ".$year." ".$div;

                mysqli_close($conn);
            ?>


            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800"><?php echo $stuclass;?>
                <form action="#"></form>
                

                <table>
                    <tr>
                        <td class="d-none"><?php echo $stuclass;?></td>
                        <td class="d-none"><?php echo $classid;?></td>
                        <td>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm addstutoclassmodal">
                        <i class="fas fa-plus-square fa-sm text-white-50"></i> New</a>
                        </td>
                    </tr>
                </table>
                </h1>

                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" onclick="print()"><i class="fas fa-download fa-sm text-white-50"></i> Print</a>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">List of Students</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Student FirstName</th>
                                    <th>Student LastName</th>
                                    <th>Student UserName</th>
                                    <th>Roll No</th>
                                    <th>Class</th>
                                    <th class="d-none">Classidnotshown</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Student FirstName</th>
                                    <th>Student LastName</th>
                                    <th>Student UserName</th>
                                    <th>Roll No</th>
                                    <th>Class</th>
                                    <th class="d-none">Classidnotshown</th>
                                    <th>Delete</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php

                                include 'data/database.php';

                                $stuclassname = strtolower($stuclass);

                                $selectstuclass = "SELECT * FROM `".$stuclassname."`";

                                $viewstuclassquery = mysqli_query($conn, $selectstuclass);

                                $selectdept = "SELECT * FROM department";
                                $selectfac = "SELECT * FROM faculty";

                           

                                while ($res = mysqli_fetch_array($viewstuclassquery)) {
                                ?>

                                    <tr>
                                        <td><?php echo $res['Id']; ?></td>
                                        <td><?php echo $res['stufname']; ?></td>
                                        <td><?php echo $res['stulname']; ?></td>
                                        <td><?php echo $res['studentusername']; ?></td>
                                        <td><?php echo $res['Id']; ?></td>
                                        <td><?php echo $stuclass; ?></td>
                                        <td class="d-none"><?php echo $classid;?></td>
                                        
                                        <td class="text-center">
                                            <a href="#" class="col-md-6 deletestuclassbut" value="<?php echo $res['Id']; ?>" id="<?php echo $res['Id']; ?>" title="Delete"><i class="far fa-trash-alt text-danger "></i></a>
                                        </td>
                                    </tr>

                                <?php
                                }
                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->
       



<?php
require_once 'data/dashmid.php';
?>


<!-- addStutoClass Modal-->
<div class="modal fade" id="addStutoClass" tabindex="-1" role="dialog" aria-labelledby="newmodal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newmodal">Add Student</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <?php

                include 'data/database.php';

                $selectstu = "SELECT * FROM student";
                $selectdept = "SELECT * FROM department";

                $query = mysqli_query($conn,$selectstu);
                $query1 = mysqli_query($conn,$selectstu);

                $num = mysqli_num_rows($query);

                while($ressc = mysqli_fetch_assoc($query))
                {
                    
                    $username = $ressc['username'];
                    $fname = $ressc['fname'];
                    $lname = $ressc['lname'];
                    
                }
            ?>

            <form action="data/admin-addstutoclassclass.php" method="POST">
                <div class="modal-body">
                <div class="form-row">
                    
                   
                    
                    <div class="form-group col-md-12 mb-3">
                        <label for="stcstu">Student </label>
                        <select class="custom-select" name="stcstu" id="stcstu" required>
                        <option value="">Students:</option>
                        <?php while($ressc = mysqli_fetch_array($query1)) { ?>
                        <option value="<?php echo $ressc['username'];?>">
                            <?php $facname = $ressc['fname']." ".$ressc['lname']; echo "$facname : ".$ressc['username'];?>
                        </option>
                        <?php
                        }?>
                        </select>
                    </div>

                    
                </div>
                </div>
                <div class="modal-footer">
                    <input type="number" class="d-none" name="classidforadd" id="classidforadd" value="classidforadd">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" name="addstutoclass" value="addstutoclass" id="addstutoclass" type="submit">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>        


<!-- deletestuClass Modal-->
<div class="modal fade" id="deletestuClass" tabindex="-1" role="dialog" aria-labelledby="deletemodal"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deletemodal">Sure to Delete?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Delete" below if you are sure to remove this student.</div>
            <div class="modal-footer">
            <form action="data/admin-deletestuclass.php" method="POST">
                <input type="text" class="d-none" name="classnamefordel" id="classnamefordel" value="classnamefordel">
                <input type="number" class="d-none" name="classidfordel" id="classidfordel" value="classidfordel">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <button class="btn btn-danger" name="deletestuclass" id="deletestuclass" value="deletestuclass" type="submit">Delete</button>
              
            </form>
            </div>
        </div>
    </div>
</div>


<?php
require_once 'data/dashfoot.php';
?>

