<?php
require_once 'data/studashhead.php';
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Notes 
                        <!--<a href="#" data-toggle="modal" data-target="#addModal" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa-plus-square fa-sm text-white-50"></i> New</a>-->
                    </h1>
                    
                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" onclick="print()"><i
                            class="fas fa-save fa-sm text-white-50"></i> Print</a>
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
                                                <a href="#" class="col-md-6 text-center" data-toggle="modal" data-target="#likeModal"><i
                                                class="far fa-heart text-danger"></i></a>
                                                
                                                <a href="#" class="col-md-6 text-center" data-toggle="modal" data-target="#download" ><i
                                                class="far fa-save text-success"></i></a>
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
                                                class="far fa-heart text-danger "></i></a>
                                                
                                                <a href="#" class="col-md-6 text-center" data-toggle="modal" data-target="#deleteModal" ><i
                                                class="far fa-save text-success "></i></a>
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
                                                class="far fa-heart text-danger "></i></a>
                                                
                                                <a href="#" class="col-md-6 text-center" data-toggle="modal" data-target="#deleteModal" ><i
                                                class="far fa-save text-success "></i></a>
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
                                                class="far fa-heart text-danger "></i></a>
                                                
                                                <a href="#" class="col-md-6 text-center" data-toggle="modal" data-target="#deleteModal" ><i
                                                class="far fa-save text-success "></i></a>
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
                                                class="far fa-heart text-danger "></i></a>
                                                
                                                <a href="#" class="col-md-6 text-center" data-toggle="modal" data-target="#deleteModal" ><i
                                                class="far fa-save text-success "></i></a>
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
                                                class="far fa-heart text-danger "></i></a>
                                                
                                                <a href="#" class="col-md-6 text-center" data-toggle="modal" data-target="#deleteModal" ><i
                                                class="far fa-save text-success "></i></a>
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
                                                class="far fa-heart text-danger "></i></a>
                                                
                                                <a href="#" class="col-md-6 text-center" data-toggle="modal" data-target="#deleteModal" ><i
                                                class="far fa-save text-success "></i></a>
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

<?php
    require_once 'data/dashfoot.php';
?>