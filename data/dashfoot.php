    


    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="data/logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!--Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

    <!-- Faculty modal -->

    <script>
        $(document).ready(function(){
            $('.editfacbut').on('click', function(){
                $('#editFaculty').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#efac-fname').val(data[2]);
                $('#efac-lname').val(data[3]);
                $('#updatesubmit').val(data[0]);
                $('#equalification').val(data[4]);
                $('#edept').val(data[5]);
                $('#egender').val(data[6]);
                $('#edob').val(data[7]);
                $('#ephone').val(data[8]);
                $('#eemail').val(data[9]);
            });
        });
    </script>

    <script>
        $(document).ready(function(){
            $('.deletefacbut').on('click', function(){
                $('#deleteFacultynow').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);

                
                $('#deletesubmit').val(data[0]);
               
                
            });
        });
    </script>

    <!-- Student modal -->

    <script>
        $(document).ready(function(){
            $('.editstubut').on('click', function(){
                $('#editStudent').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#editstu-fname').val(data[2]);
                $('#editstu-lname').val(data[3]);
                $('#updatesubmit').val(data[0]);
                
                $('#editgender').val(data[4]);
                $('#edob').val(data[5]);
                $('#ephone').val(data[6]);
                $('#editemail').val(data[7]);
            });
        });
    </script>

    <script>
        $(document).ready(function(){
            $('.deletestubut').on('click', function(){
                $('#deleteStudent').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#deletesubmit').val(data[0]);
                
            });
        });
    </script>

    <!-- Class modal -->

    <script>
        $(document).ready(function(){
            $('.editclassbut').on('click', function(){
                $('#editClass').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#editclass').val(data[0]);
                $('#classyear').val(data[1]);
                $('#classdept').val(data[2]);
                //$('#eusername').val(data[1]);
                $('#classdivision').val(data[3]);
                //$('#eyear').val(data[5]);
                $('#classfac1').val(data[5]);
                //$('#ediv').val(data[7]);
                
            });
        });
    </script>

    <script>
        $(document).ready(function(){
            $('.deleteclassbut').on('click', function(){
                $('#deleteClass').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#deleteclass').val(data[0]);
                
            });
        });
    </script>

    <!-- Dept modal-->
    <script>
        $(document).ready(function(){
            $('.deletedeptbut').on('click', function(){
                $('#delDept').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#deletedept').val(data[0]);
                
            });
        });
    </script>


    <!-- StudenttoClass modal-->
    <script>
            $(document).ready(function(){
                $('.addstutoclassmodal').on('click', function(){
                    $('#addStutoClass').modal('show');

                    

                    $tr = $(this).closest('tr');

                    var data = $tr.children("td").map(function() {
                        return $(this).text();
                    }).get();

                    console.log(data);

                    $('#addstutoclass').val(data[0]);
                    $('#classidforadd').val(data[1]);
                    
                });
            });
    </script>

    <script>
        $(document).ready(function(){
            $('.deletestuclassbut').on('click', function(){
                $('#deletestuClass').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#deletestuclass').val(data[0]);
                $('#classnamefordel').val(data[5]);
                $('#classidfordel').val(data[6]);
                
            });
        });
    </script>

    
</body>
</html>