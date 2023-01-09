@extends('antriannew.module.layout')
@section('content')
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
            <!-- Topbar -->
            @include('antriannew.module.navbar2')
            <!-- End of Topbar -->
                
                <header> 
                    <h5>Silahkan Mengambil Nomor Antrian Pelayanan yang Anda Tuju </h5>
                </header>
                <!-- End of Topbar -->

            <!--content-->
                <div class="row px-5 py-1">
                    <div class="col-xl-6 ">
                                    <!-- button -->
                                    <div class="button  mx-auto my-5">
                                        <button href="#" class="btn btn-block py-4" >
                                            <span class="text">PEREKAMAN BIOMETRIK KTP-EL</span>
                                        </button>
                                    </div>
                                    <!-- button end -->


                                    <!-- button -->
                                    <div class="button  mx-auto my-5">
                                        <button href="#" class="btn btn-block py-4" >
                                            <span class="text">KTP</span>
                                        </button>
                                    </div>
                                    <!-- button end -->
                    </div>

                    <div class="col-xl-6">
                                    <!-- button -->
                                    <div class="button  mx-auto my-5">
                                        <button href="#" class="btn btn-block py-4" >
                                            <span class="text">KIA</span>
                                        </button>
                                    </div>
                                    <!-- button end -->

                                    <!-- button -->
                                    <div class="button  mx-auto my-5">
                                        <button href="#" class="btn btn-block py-4" >
                                            <span class="text">REKOMENDASI AKTA KELAHIRAN</span>
                                        </button>
                                    </div>
                                    <!-- button end -->
                    </div>
                </div>
        </div>
        <!-- footer -->
        @include('antriannew.module.footer')
        <!-- end of footer -->
     </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
 
</body>
@endsection