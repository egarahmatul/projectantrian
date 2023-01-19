@extends('antriannew.module.layout_nomorktp')
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

            <!--content-->
            
            <div class="row px-5 py-4 ">

                <div class="col-lg-6 ">

                    <!-- Nomor Antrian  -->
                    <div class="number">
                        <div class="card my-1">
                            <div class="card-body">
                                <div class="antrian">
                                    <h4>Nomor Antrian</h4>
                                </div>
                            </div>
                        </div>

                        <div class="card py-5" >
                            <div class="card-body">
                                <div class="nomor">
                                    <p id="antrian-monitor"></p>
                                </div>
                            </div>
                        </div>

                        <div class="card my-1">
                            <div class="card-body ">
                                <div class="tujuan">
                                    <h4 id="">KTP</h4>
                                </div>
                            </div>
                        </div>
                     </div>
                </div>

                <!-- Link Video Youtube -->
                <div class="col-lg-6">
                    <div class="d-none d-lg-block d-md-none d-sm-none"> 
                            <div class="video">
                               <iframe width="100%" height="290" src="https://www.youtube.com/embed/LOLOuoonGZ4?autoplay=1&mute=1&enablejsapi=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                     </div>       
                </div>
            </div>

            <div class="row px-5">
            
                <!--Antrian Perekaman Biometrik KTP-EL -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card my-1">
                        <div class="card-body">
                            <div class="perekaman">
                                <h6>PEREKAMAN BIOMETRIK KTP-EL</h6>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="nomor-ktpel">
                                <p id="antrian-sekarang-ktpel" class="fs-3 text-black mb-1" ></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Antrian KTP -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card my-1">
                        <div class="card-body">
                            <div class="ktp">
                                <h6>KTP</h6>
                            </div>
                        </div>
                    </div>

                    <div class="card ">
                        <div class="card-body">
                            <div class="nomor-ktp">
                                <p id="antrian-sekarang-ktp" class="fs-3 text-black mb-1" ></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Antrian KIA -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card my-1">
                        <div class="card-body">
                            <div class="kia">
                                <h6>KIA</h6>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="nomor-kia">
                                <p id="antrian-sekarang" class="fs-3 text-black mb-1" ></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Antrian Rekomendasi Anta Kelahiran -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card my-1">
                        <div class="card-body">
                            <div class="akta">
                                <h6>REKOMENDASI AKTA KELAHIRAN</h6>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="nomor-akta">
                                <p id="antrian-sekarang-akta" class="fs-3 text-black mb-1" ></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

</body>
@endsection