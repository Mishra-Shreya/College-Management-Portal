<?php
require_once 'data/facdashhead.php';
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Notes 
                            <a href="#" data-toggle="modal" data-target="#addModal" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-plus-square fa-sm text-white-50"></i> New</a>
                        </h1>
                        
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" onclick="print()"><i
                                class="fas fa-download fa-sm text-white-50"></i> Print</a>
                    </div>

                
                    
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Notes</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Title</th>
                                            <th>Discription</th>
                                            <th>File</th>
                                            <th>Date</th>
                                            <th>Subject</th>
                                            <th>Operation</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Title</th>
                                            <th>Discription</th>
                                            <th>File</th>
                                            <th>Date</th>
                                            <th>Subject</th>
                                            <th>Operation</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                            <td>
                                                <div class="row">
                                                    <a href="#" class="col-md-6 text-center" data-toggle="modal" data-target="#editModal"><i
                                                    class="far fa-edit text-info "></i></a>
                                                    
                                                    <a href="#" class="col-md-6 text-center" data-toggle="modal" data-target="#deleteModal" ><i
                                                    class="far fa-trash-alt text-danger "></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Sonya Frost</td>
                                            <td>Software Engineer</td>
                                            <td>Edinburgh</td>
                                            <td>23</td>
                                            <td>2008/12/13</td>
                                            <td>$103,600</td>
                                            <td>
                                                <div class="row">
                                                    <a href="#" class="col-md-6 text-center" data-toggle="modal" data-target="#editModal"><i
                                                    class="far fa-edit text-info "></i></a>
                                                    
                                                    <a href="#" class="col-md-6 text-center" data-toggle="modal" data-target="#deleteModal" ><i
                                                    class="far fa-trash-alt text-danger "></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jena Gaines</td>
                                            <td>Office Manager</td>
                                            <td>London</td>
                                            <td>30</td>
                                            <td>2008/12/19</td>
                                            <td>$90,560</td>
                                            <td>
                                                <div class="row">
                                                    <a href="#" class="col-md-6 text-center" data-toggle="modal" data-target="#editModal"><i
                                                    class="far fa-edit text-info "></i></a>
                                                    
                                                    <a href="#" class="col-md-6 text-center" data-toggle="modal" data-target="#deleteModal" ><i
                                                    class="far fa-trash-alt text-danger "></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Quinn Flynn</td>
                                            <td>Support Lead</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            <td>2013/03/03</td>
                                            <td>$342,000</td>
                                            <td>
                                                <div class="row">
                                                    <a href="#" class="col-md-6 text-center" data-toggle="modal" data-target="#editModal"><i
                                                    class="far fa-edit text-info "></i></a>
                                                    
                                                    <a href="#" class="col-md-6 text-center" data-toggle="modal" data-target="#deleteModal" ><i
                                                    class="far fa-trash-alt text-danger "></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tatyana Fitzpatrick</td>
                                            <td>Regional Director</td>
                                            <td>London</td>
                                            <td>19</td>
                                            <td>2010/03/17</td>
                                            <td>$385,750</td>
                                            <td>
                                                <div class="row">
                                                    <a href="#" class="col-md-6 text-center" data-toggle="modal" data-target="#editModal"><i
                                                    class="far fa-edit text-info "></i></a>
                                                    
                                                    <a href="#" class="col-md-6 text-center" data-toggle="modal" data-target="#deleteModal" ><i
                                                    class="far fa-trash-alt text-danger "></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Michael Silva</td>
                                            <td>Marketing Designer</td>
                                            <td>London</td>
                                            <td>66</td>
                                            <td>2012/11/27</td>
                                            <td>$198,500</td>
                                            <td>
                                                <div class="row">
                                                    <a href="#" class="col-md-6 text-center" data-toggle="modal" data-target="#editModal"><i
                                                    class="far fa-edit text-info "></i></a>
                                                    
                                                    <a href="#" class="col-md-6 text-center" data-toggle="modal" data-target="#deleteModal" ><i
                                                    class="far fa-trash-alt text-danger "></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Martena Mccray</td>
                                            <td>Post-Sales support</td>
                                            <td>Edinburgh</td>
                                            <td>46</td>
                                            <td>2011/03/09</td>
                                            <td>$324,050</td>
                                            <td>
                                                <div class="row">
                                                    <a href="#" class="col-md-6 text-center" data-toggle="modal" data-target="#editModal"><i
                                                    class="far fa-edit text-info "></i></a>
                                                    
                                                    <a href="#" class="col-md-6 text-center" data-toggle="modal" data-target="#deleteModal" ><i
                                                    class="far fa-trash-alt text-danger "></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        
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

    <!-- add Modal-->
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Add New Notes</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form>

                    <div class="modal-body">
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="notestitle">Title</label>
                                <input type="text" class="form-control" id="notestitle" placeholder="Title" required>
                            </div>
                        </div>
                        <!--<div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="filedate">Subject</label>
                                <input type="date" class="form-control" id="filedate" placeholder="Date" required>
                            </div>
                        </div> -->
                        <div class="form-row">
                            <div class="form-group col-md-6 mb-3">
                              <label for="sub">Subject</label>
                              <select class="custom-select" id="sub" required>
                                <option value="">Choose:</option>
                                <option value="S1">Sub 1</option>
                                <option value="S2">Sub 2</option>
                                <option value="S3">Sub 3</option>
                                <option value="S4">Sub 4</option>
                              </select>
                            </div>
                            <div class="form-group col-md-6 mb-3">
                              <label for="class">Class</label>
                              <select class="custom-select" id="class" required>
                                <option value="">Choose:</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                              </select>
                              
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6 mb-3">
                              <label for="year">Year of Study</label>
                              <select class="custom-select" id="year" required>
                                <option value="">Year of Study:</option>
                                <option value="FE">FE</option>
                                <option value="SE">SE</option>
                                <option value="TE">TE</option>
                                <option value="BE">BE</option>
                              </select>
                              <div class="invalid-feedback">Example invalid custom select feedback</div>
                            </div>
                      
                            <div class="form-group col-md-6 mb-3">
                              <label for="dept">Department</label>
                              <select class="custom-select" id="dept" required>
                                <option value="">Departments:</option>
                                <option value="COMP">COMP</option>
                                <option value="IT">IT</option>
                                <option value="E&TC">E&TC</option>
                              </select>
                              <div class="invalid-feedback">Example invalid custom select feedback</div>
                            </div>
                          </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="facfile">File</label>
                                <input type="file" class="form-control" id="facfile" placeholder="file" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="descrip">Description</label>
                                <textarea class="form-control" id="descrip" maxlength="200" placeholder="Maxlength : 200 characters" rows="3" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        
                        <button class="btn btn-primary mr-auto" type="reset">Clear</button>

                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button class="btn btn-success" type="submit">Upload</button>
                    </div>


                </form>
                
            </div>
        </div>
    </div>

   <!-- editModal-->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Notes</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form>

                    <div class="modal-body">
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="notestitle">Title</label>
                                <input type="text" class="form-control" id="notestitle" placeholder="Title" required>
                            </div>
                        </div>
                        <!--<div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="filedate">Subject</label>
                                <input type="date" class="form-control" id="filedate" placeholder="Date" required>
                            </div>
                        </div> -->
                        <div class="form-row">
                            <div class="form-group col-md-6 mb-3">
                              <label for="year">Subject</label>
                              <select class="custom-select" id="year" required>
                                <option value="">Choose:</option>
                                <option value="S1">Sub 1</option>
                                <option value="S2">Sub 2</option>
                                <option value="S3">Sub 3</option>
                                <option value="S4">Sub 4</option>
                              </select>
                              
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="facfile">File</label>
                                <input type="file" class="form-control" id="facfile" placeholder="file" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="descrip">Description</label>
                                <textarea class="form-control" id="descrip" maxlength="200" placeholder="Maxlength : 200 characters" rows="3" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">

                        <button class="btn btn-primary mr-auto" type="reset">Clear</button>

                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button class="btn btn-success" type="submit">Upload</button>
                    </div>


                </form>
                
            </div>
        </div>
    </div>

    <!-- delete Modal-->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sure to delete?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "delete" below if you are sure to delete this file.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger" href="#">Delete</a>
                </div>
            </div>
        </div>
    </div>


    <?php
        require_once 'data/dashfoot.php';
    ?>