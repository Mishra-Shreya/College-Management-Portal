<?php
require_once 'data/admindashhead.php';
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Faculty 
                            <a href="#" data-toggle="modal" data-target="#addFaculty" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-plus-square fa-sm text-white-50"></i> New</a>
                        </h1>
                        
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" onclick="print()"><i
                                class="fas fa-download fa-sm text-white-50"></i> Print</a>
                    </div>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">List of Faculties</h6>
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
                                       
                                            <th style="display: none;">Department</th>
                                            
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
                                            <th>Qualification</th>
                                           
                                            <th class="d-none">Department</th>
                                            
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
                                            <td class="d-none"></td>
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
                                                    <button type="submit" class="btn col-md-6 deletefacbut" name="deletesubmit" value="<?php echo $res['Id'];?>" id="<?php echo $res['Id'];?>" title="Delete" ><i
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

    <!-- addFaculty Modal-->
    <div class="modal fade" id="addFaculty" tabindex="-1" role="dialog" aria-labelledby="addmodal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addmodal">New Faculty</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="data/admin-addfac.php" method="POST">
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                              <label for="fac-fname">First name</label>
                              <input type="text" class="form-control" name="fac-fname" id="fac-fname" maxlength="45" placeholder="First name" required>
                              <div class="invalid-tooltip">
                                  Please enter your firstname.
                              </div>
                            </div>
                            <div class="col-md-6 mb-3">
                              <label for="fac-lname">Last name</label>
                              <input type="text" class="form-control" name="fac-lname" id="fac-lname" maxlength="45" placeholder="Last name"  required>
                              <div class="invalid-tooltip">
                                  Please enter your lastname.
                              </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="username">Username</label>
                                <input type="email" class="form-control" name="username" id="username" maxlength="45" placeholder="Username" required>
                                <div class="invalid-tooltip">
                                  Please create username.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3 form-label-group">
                                <label for="pass">Create Password</label>
                                <input type="password" class="form-control" id="pass" name="password" maxlength="20" placeholder="Create Password" required>
                                <div class="invalid-tooltip">
                                  Please create password.
                                </div>
                            </div>
                        </div>
                          <div class="form-row">
                            <div class="form-group col-md-12 mb-3">
                              <label for="qualification">Qualification</label>
                              <select class="custom-select" name="qualification" id="qualification" required>
                                <option value="">Qualification:</option>
                                <option value="BE/BTech">BE/BTech</option>
                                <option value="MS/ME/MTech">MS/ME/MTech</option>
                                <option value="Phd">Phd</option>
                              </select>
                              <div class="invalid-feedback">Example invalid custom select feedback</div>
                            </div>
                          </div>

                          <div class="form-group col-md-12 mb-3">
                            <label for="gender">Gender</label> &nbsp;

                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="male" name="gender" value="Male" class="custom-control-input">
                                    <label class="custom-control-label" for="male">Male</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="female" name="gender" value="Female" class="custom-control-input">
                                    <label class="custom-control-label" for="female">Female</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="trans" name="gender" value="Transgender" class="custom-control-input">
                                    <label class="custom-control-label" for="trans">Transgender</label>
                                </div>
                            </div>

                          <div class="form-row">
                              <div class="col-md-4 mb-3">
                                <label for="dob">Date of Birth</label>
                                <input type="date" class="form-control" name="dob" id="dob" placeholder="Date of Birth" required>
                                <div class="invalid-tooltip">
                                  Please enter dob.
                                </div>
                              </div>
                      
                              <div class="col-md-4 mb-3">
                                  <label for="phone">Phone</label>
                                  <input type="number" class="form-control" name="phone" max="9999999999" id="phone" placeholder="Phone" required>
                                  <div class="invalid-tooltip">
                                    Please enter phone.
                                  </div>
                                </div>
                      
                                <div class="col-md-4 mb-3">
                                  <label for="email">Email</label>
                                  <input type="email" class="form-control" name="email" maxlength="45" id="email" placeholder="Email" required>
                                  <div class="invalid-tooltip">
                                    Please enter email.
                                  </div>
                                </div>
                        
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button class="btn btn-primary" name="submit" type="submit">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- editFaculty Modal-->
    <div class="modal fade" id="editFaculty" tabindex="-1" role="dialog" aria-labelledby="editmodal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editmodal">Edit Faculty</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="data/admin-editfac.php" method="POST">
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                              <label for="efac-fname">First name</label>
                              <input type="text" class="form-control" name="efac-fname" id="efac-fname" maxlength="45" placeholder="First name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                              <label for="efac-lname">Last name</label>
                              <input type="text" class="form-control" name="efac-lname" id="efac-lname" maxlength="45" placeholder="Last name"  required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="egender">Gender</label>
                                <select class="custom-select" name="egender" id="egender" required>
                                    <option value="">Choose:</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Transgender">Transgender</option>
                                </select>
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="edob">Date of Birth</label>
                                <input type="date" class="form-control" name="edob" id="edob" placeholder="Date of Birth" required>
                              </div>

                            
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-12 mb-3">
                              <label for="equalification">Qualification</label>
                              <select class="custom-select" name="equalification" id="equalification" required>
                                <option value="">Qualification:</option>
                                <option value="BE/BTech">BE/BTech</option>
                                <option value="MS/ME/MTech">MS/ME/MTech</option>
                                <option value="Phd">Phd</option>
                              </select>
                            </div>
                      
                           

                          <div class="form-row">
                                <div class="col-md-4 mb-3">
                                  <label for="ephone">Phone</label>
                                  <input type="number" class="form-control" name="ephone" max="9999999999" id="ephone" placeholder="Phone" required>
                                </div>
                      
                                <div class="col-md-8 mb-3">
                                  <label for="eemail">Email</label>
                                  <input type="email" class="form-control" name="eemail" maxlength="45" id="eemail" placeholder="Email" required>
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button class="btn btn-primary" name="updatesubmit" id="updatesubmit" value="updatesubmit" type="submit">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- deleteFaculty Modal-->
    <div class=" modal fade" id="deleteFacultynow" tabindex="-1" role="dialog" aria-labelledby="deletemodal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deletemodal">Sure to Delete?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Delete" below if you are sure to delete the user.</div>
                <div class="modal-footer">
                  <form action="data/admin-deletefac.php" method="POST">
                      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                      <button class="btn btn-danger" name="deletesubmitfac" id="deletesubmitfac" value="deletesubmitfac" type="submit">Delete</button>
                      <!--<a class="btn btn-danger" href="">Delete</a>-->
                  </form>
                </div>
            </div>
        </div>
    </div>




<?php
require_once 'data/dashfoot.php';
?>