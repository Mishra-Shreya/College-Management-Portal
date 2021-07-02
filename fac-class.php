<?php
require_once 'data/facdashhead.php';
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Class 
                            <!--<a href="#" data-toggle="modal" data-target="#addFaculty" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-plus-square fa-sm text-white-50"></i> New</a>-->
                        </h1>
                        
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" onclick="print()"><i
                                class="fas fa-download fa-sm text-white-50"></i> Print</a>
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
                                            <th>Username</th>
                                            <th>Name</th>
                                            <th>Surname</th>
                                            <th>Qualification</th>
                                       
                                            <th>Department</th>
                                            
                                            <th>Gender</th>
                                            <th>BirthDate</th>
                                            <th>Phone No</th>
                                            <th>Email</th>
                                            <th>Id</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Username</th>
                                            <th>Name</th>
                                            <th>Surname</th>
                                            <th>Gender</th>
                                            <th>BirthDate</th>
                                            <th>Phone No</th>
                                            <th>Email</th>
                                            <th>Id</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php

                                            include 'data/database.php';
                                            
                                            $selectfac = "SELECT * FROM faculty";
                                            $selectdept = "SELECT * FROM department";

                                            $query = mysqli_query($conn,$selectfac);
                                            $query1 = mysqli_query($conn,$selectdept);

                                            $num = mysqli_num_rows($query);
                                            //$num = mysqli_num_rows($query1);

                                            while($res = mysqli_fetch_array($query)) {
                                        ?>

                                        <tr>
                                            <td><?php echo $res['Id'];?></td>
                                            <td><?php echo $res['username'];?></td>
                                            <td><?php echo $res['fname'];?></td>
                                            <td><?php echo $res['lname'];?></td>
                                            <td><?php echo $res['qualification'];?></td>
                                            <td><?php echo $res['dept'];?></td>
                                            <td><?php echo $res['gender'];?></td>
                                            <td><?php echo $res['dob'];?></td>
                                            <td><?php echo $res['phone'];?></td>
                                            <td><?php echo $res['email'];?></td>
                                            <td><?php echo $res['Id'];?></td>
                                            <td class="text-center">
                                                    <a href="#" class="col-md-6 editfacbut" value="<?php echo $res['Id'];?>" id="<?php echo $res['Id'];?>" title="Update" ><i
                                                    class="far fa-edit text-info "></i></a>
                                            </td>
                                            <td class="text-center"> 
                                              <form action="data/admin-deletefac.php" method="POST"> 
                                                    <button type="submit" class="btn col-md-6 deletefacbut123" name="deletesubmit" value="<?php echo $res['Id'];?>" id="<?php echo $res['Id'];?>" title="Delete" ><i
                                                    class="far fa-trash-alt text-danger "></i></button>
                                                    </form>  
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

    <?php
        require_once 'data/dashfoot.php';
    ?>