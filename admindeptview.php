<?php
require_once 'data/admindashhead.php';
?>


        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Department
                    <a href="#" data-toggle="modal" data-target="#addDept" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                        <i class="fas fa-plus-square fa-sm text-white-50"></i> New</a>
                </h1>

                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" onclick="print()"><i class="fas fa-download fa-sm text-white-50"></i> Print</a>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">List of Departments</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Department</th>
                                    <th>Id</th>
                                   
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Department</th>
                                    <th>Id</th>
                                   
                                    
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php

                                include 'data/database.php';

                                $selectdept = "SELECT * FROM department";

                                $query = mysqli_query($conn, $selectdept);

                                $num = mysqli_num_rows($query);

                                while ($res = mysqli_fetch_array($query)) {
                                ?>

                                    <tr>
                                        <td><?php echo $res['Id']; ?></td>
                                        <td><?php echo $res['dept']; ?></td>
                                        <td><?php echo $res['Id']; ?></td>
                                        
                                        
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

<!-- addDept Modal-->
<div class="modal fade" id="addDept" tabindex="-1" role="dialog" aria-labelledby="newmodal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newmodal">New Dept</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="data/admin-adddept.php" method="POST">
                <div class="modal-body">
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="ndeptname">Department Name</label>
                            <input type="text" class="form-control" name="ndeptname" id="ndeptname" maxlength="45" placeholder="Department name" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" name="newdept" type="submit">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

 <!-- Logout Modal-->
 <div class="modal fade" id="delDept" tabindex="-1" role="dialog" aria-labelledby="deldept"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deldept">Sure to Delete?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Delete" below if you are sure to delete.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger" name="deletedept" id="deletedept"  value="deletedept" href="data/admin-deletedept.php">Delete</a>
                </div>
            </div>
        </div>
    </div>

<?php
require_once 'data/dashfoot.php';
?>