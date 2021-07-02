<?php
require_once 'data/facdashhead.php';
?>


    
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Profile</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" onclick="print()"><i
                                class="fas fa-download fa-sm text-white-50"></i> Print</a>
                    </div>
                    
                    <div class="row">
                        <div class="container emp-profile">
                            <form method="post" action="admin-edit.html">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="profile-img">
                                            <img src="img/undraw_profile_3.svg" alt=""/>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="profile-head">
                                                    <h5>
                                                    <?php echo $fac1fn." ".$fac1ln; ?>
                                                    </h5>
                                                    <h6>
                                                        Faculty
                                                    </h6>
                                                    <p class="proile-rating">Date of Birth : <span><?php echo $dob; ?></span></p>
                                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--<div class="col-md-2">
                                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                                    </div>-->
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="profile-work">
                                            <p>SKILLS</p>
                                            <a href="">Faculty</a><br/>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="tab-content profile-tab" id="myTabContent">
                                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>User Id</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p><?php echo $fac1uid; ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Name</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p><?php echo $fac1fn." ".$fac1ln; ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Email</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p><?php echo $email; ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Phone</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p><?php echo $phone; ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Qualification</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p><?php echo $qualification; ?></p>
                                                            </div>
                                                        </div>
                                            </div>
                                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"> 
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Session login</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p><?php echo "$logindate[month] $logindate[mday], $logindate[year] : $loginTime"; ?></p>
                                                            </div>
                                                        </div>
                                                       
                                                      
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>           
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