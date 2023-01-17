 @extends('antriannew.module.layout')

 @section('content')
 <!-- Page Wrapper -->
 <div id="wrapper">

<!-- Sidebar -->
@include('antriannew.module.sidebar')
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        @include('antriannew.module.navbar')
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

                    <!-- Page Heading -->
                    
                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                            <div class="card shadow mb-4 bg-white">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <img src="{{url('asset/vendors/images/gambardashboard.png')}}" alt="" style="width:350px; height:350px" >
                                    </div>
                                    <div class="admin col-md-6">
                                        <h3 class="font-20 weight-500 mb-10" style="color:#10A19D">
                                            Welcome to Dashboard Admin
                                        </h3>
                                        <h3 class="font-20 weight-500 mb-10 px-1" style="color:#10A19D">
                                            Disdukcapil Bengkalis
                                        </h3>
                                        <p class="font-18 max-width-600 px-2">Dinas Kependudukan dan Pencatatan Sipil mempunyai tugas melaksanakan urusan administrasi kependudukan di bidang Kependudukan dan Pencatatan Sipil berdasarkan Azas Otonomi dan Tugas Pembantuan.</p>
                                    </div>
                                </div>
                            </div>
                        
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
        </div>
        <!-- /.container-fluid -->
</div>
    
    <!-- End of Main Content -->

    <!-- Footer -->
    @include('antriannew.module.footer')
    <!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>

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
            <a class="btn btn-primary" href="{{route('logout')}}">Logout</a>
        </div>
    </div>
</div>
</div>

@endsection