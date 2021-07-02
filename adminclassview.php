<?php
require_once 'data/admindashhead.php';
?>


        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Classes
                    <a href="#" data-toggle="modal" data-target="#addClass" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                        <i class="fas fa-plus-square fa-sm text-white-50"></i> New</a>
                </h1>

                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" onclick="print()"><i class="fas fa-download fa-sm text-white-50"></i> Print</a>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">List of Classes</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Year</th>
                                    <th>Department</th>
                                    <th>Class</th>
                                    <th>Faculty 1</th>
                                    <th>Fac 1 Username</th>
                                    <!--<th>Faculty 2</th>
                                    <th>Fac 2 Username</th>-->
                                    <th>Id</th>
                                    <!--<th>Edit</th>-->
                                    <th>View Student</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Year</th>
                                    <th>Department</th>
                                    <th>Class</th>
                                    <th>Faculty 1</th>
                                    <th>Fac 1 Username</th>
                                    <!--<th>Faculty 2</th>
                                    <th>Fac 2 Username</th>-->
                                    <th>Id</th>
                                    <!--<th>Edit</th>-->
                                    <th>View Student</th>
                                    <th>Delete</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php

                                include 'data/database.php';

                                $selectclass = "SELECT * FROM class";
                                $selectdept = "SELECT * FROM department";
                                $selectfac = "SELECT * FROM faculty";

                                $query = mysqli_query($conn, $selectclass);
                                $query1 = mysqli_query($conn,$selectdept);
                                $query2 = mysqli_query($conn,$selectfac);
                                $query3 = mysqli_query($conn,$selectfac);

                                $num = mysqli_num_rows($query);

                                while ($res = mysqli_fetch_array($query)) {
                                ?>

                                    <tr>
                                        <td><?php echo $res['Id']; ?></td>
                                        <td><?php echo $res['year']; ?></td>
                                        <td><?php echo $res['dept']; ?></td>
                                        <td><?php echo $res['division']; ?></td>
                                        <td><?php echo $res['fac1']; ?></td>
                                        <td><?php echo $res['fac1username']; ?></td>
                                        <!--<td><?php //echo $res['fac2']; ?></td>
                                        <td><?php //echo $res['fac2username']; ?></td>-->
                                        <td><?php echo $res['Id']; ?></td>
                                        <!--<td class="text-center">
                                            <a href="#" class="col-md-6 editclassbut" value="<?php //echo $res['Id']; ?>" id="<?php //echo $res['Id']; ?>" title="Update"><i class="far fa-edit text-info "></i></a>
                                        </td>-->
                                        <form action="adminclass-studentview.php" method="GET">
                                        <td class="text-center">
                                            <button class="btn col-md-6 viewstuclassbut" value="<?php echo $res['Id']; ?>" name="classid" id="<?php echo $res['Id']; ?>" title="View Student"><i class="fas fa-user-friends text-primary"></i></a>
                                        </td>
                                        </form>
                                        <td class="text-center">
                                            <a href="#" class="col-md-6 deleteclassbut" value="<?php echo $res['Id']; ?>" id="<?php echo $res['Id']; ?>" title="Delete"><i class="far fa-trash-alt text-danger "></i></a>
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

<!-- addClass Modal-->
<div class="modal fade" id="addClass" tabindex="-1" role="dialog" aria-labelledby="newmodal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newmodal">New Class</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="data/admin-addclass.php" method="POST">
                <div class="modal-body">
                <div class="form-row">
                    <div class="form-group col-md-6 mb-3">
                        <label for="eclassyear">Year of Study</label>
                        <select class="custom-select" name="eclassyear" id="eclassyear" required>
                        <option value="">Year of Study:</option>
                        <option value="FE">FE</option>
                        <option value="SE">SE</option>
                        <option value="TE">TE</option>
                        <option value="BE">BE</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <label for="ecdept">Department</label>
                        <select class="custom-select" name="ecdept" id="ecdept" required>
                        <option value="">Departments:</option>
                        <?php while($res = mysqli_fetch_array($query1)) { ?>
                        <option value="<?php echo $res['dept'];?>"><?php echo $res['dept'];?></option>
                        <?php
                        }?>
                        </select>
                        <div class="invalid-feedback">Example invalid custom select feedback</div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="ecdivision">Create Division</label>
                        <input type="text" class="form-control" name="ecdivision" id="ecdivision" maxlength="1" placeholder="Division" required>
                       
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <label for="ecfac1">Faculty 1</label>
                        <select class="custom-select" name="ecfac1" id="ecfac1" required>
                        <option value="">Faculties:</option>
                        <?php while($res = mysqli_fetch_array($query2)) { ?>
                        <option value="<?php echo $res['username'];?>">
                            <?php $facname = $res['fname']." ".$res['lname']; echo "$facname : ".$res['username'];?>
                        </option>
                        <?php
                        }?>
                        </select>
                    </div>
                    <!--<div class="form-group col-md-6 mb-3">
                        <label for="fac2">Faculty 2</label>
                        <select class="custom-select" name="fac2" id="fac2" required>
                        <option value="">Departments:</option>
                        <?php //while($res = mysqli_fetch_array($query3)) { ?>
                        <option value="<?php //echo $res['username'];?>">
                            <?php //$facname = $res['fname']." ".$res['lname']; echo "$facname : ".$res['username'];?>
                        </option>
                        <?php
                        //}?>
                        </select>
                    </div>-->
                </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" name="addclass" type="submit">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>



<!-- editClass Modal-->
<div class="modal fade" id="editClass" tabindex="-1" role="dialog" aria-labelledby="newmodal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newmodal">Edit Class</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="data/admin-editclass.php" method="POST">
                <div class="modal-body">
                <div class="form-row">
                    <div class="form-group col-md-6 mb-3">
                        <label for="classyear">Year of Study</label>
                        <select class="custom-select" name="classyear" id="classyear" required>
                        <option value="">Year of Study:</option>
                        <option value="FE">FE</option>
                        <option value="SE">SE</option>
                        <option value="TE">TE</option>
                        <option value="BE">BE</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <label for="classdept">Department</label>
                        <select class="custom-select" name="classdept" id="classdept" required>
                        <option value="">Departments:</option>
                        <?php include 'data/database.php';
                            $selectdept = "SELECT * FROM department";
                            $query1 = mysqli_query($conn,$selectdept);
                            while($res = mysqli_fetch_array($query1)) { ?>
                        <option value="<?php echo $res['dept'];?>"><?php echo $res['dept'];?></option>
                        <?php
                        }?>
                        </select>
                        <div class="invalid-feedback">Example invalid custom select feedback</div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="classdivision">Division</label>
                        <input type="text" class="form-control" name="classdivision" id="classdivision" maxlength="1" placeholder="Division" required>
                       
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <label for="classfac1">Faculty 1</label>
                        <select class="custom-select" name="classfac1" id="classfac1" required>
                        <option value="">Faculty:</option>
                        <?php include 'data/database.php';
                            $selectfac = "SELECT * FROM faculty";
                            $query2 = mysqli_query($conn,$selectfac);
                            while($res = mysqli_fetch_array($query2)) { ?>
                        <option value="<?php echo $res['username'];?>">
                            <?php /*$facname = $res['fname']." ".$res['lname'];*/ echo $res['username'] /*$res['username']*/;?>
                        </option>
                        <?php
                        }?>
                        </select>
                    </div>
                    <!--<div class="form-group col-md-6 mb-3">
                        <label for="fac2">Faculty 2</label>
                        <select class="custom-select" name="fac2" id="fac2" required>
                        <option value="">Departments:</option>
                        <?php //while($res = mysqli_fetch_array($query3)) { ?>
                        <option value="<?php //echo $res['username'];?>">
                            <?php //$facname = $res['fname']." ".$res['lname']; echo "$facname : ".$res['username'];?>
                        </option>
                        <?php
                        //}?>
                        </select>
                    </div>-->
                </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" name="editclass" id="" value="" type="submit">Edit</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- deleteClass Modal-->
<div class="modal fade" id="deleteClass" tabindex="-1" role="dialog" aria-labelledby="deletemodal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deletemodal">Sure to Delete?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Delete" below if you are sure to delete the class.</div>
                <div class="modal-footer">
                <form action="data/admin-deleteclass.php" method="POST">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-danger" name="deleteclass" id="deleteclass" value="deleteclass" type="submit">Delete</button>
                    <!--<a class="btn btn-danger" href="">Delete</a>-->
                </form>
                </div>
            </div>
        </div>
    </div>

<?php
require_once 'data/dashfoot.php';
?>