@extends('antriannew.module.layout')

@section('content')
<!-- Page Wrapper -->
<div id="wrapper">

<!-- Sidebar -->
@include('antriannew.module.sidebar')
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
<div id="content">

<!-- Topbar -->
@include('antriannew.module.navbar')
<!-- End of Topbar -->

    <div class="container-fluid">
        <div class="pd-ltr-20">
            <div class="card-box mb-30">
                <br>
                <div class="row">

                <!-- menampilkan informasi jumlah antrian -->
                <div class="col-md-3 mb-4">
                  <div class="card border-0 shadow-sm"  >
                    <div class="card-body p-4 ">
                      <div class="d-flex justify-content-start">
                        <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="#36B9CC" class="bi bi-people-fill" viewBox="0 0 16 16">
                          <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                        </svg> &nbsp; &nbsp;
                        
                        <div>
                          <p id="jumlah-antrian" class="fs-3 text-warning mb-1"></p>
                          <p class="mb-0">Jumlah Antrian</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- menampilkan informasi nomor antrian yang sedang dipanggil -->
                <div class="col-md-3 mb-4">
                  <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                      <div class="d-flex justify-content-start">
                          <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="#36B9CC" class="bi bi-person-fill-check" viewBox="0 0 16 16">
                            <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                            <path d="M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Z"/>
                          </svg> &nbsp; &nbsp;
                        <div>
                          <p id="antrian-sekarang" class="fs-3 text-success mb-1"></p>
                          <p class="mb-0">Antrian Saat Ini</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- menampilkan informasi nomor antrian yang akan dipanggil selanjutnya -->
                <div class="col-md-3 mb-4">
                  <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                      <div class="d-flex justify-content-start">
                          <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="#36B9CC" class="bi bi-person-fill-add" viewBox="0 0 16 16">
                            <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                            <path d="M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Z"/>
                          </svg> &nbsp; &nbsp;
                        <div>
                          <p id="antrian-selanjutnya" class="fs-3 text-info mb-1"></p>
                          <p class="mb-0">Antrian Berikutnya</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- menampilkan informasi jumlah antrian yang belum dipanggil -->
                <div class="col-md-3 mb-4">
                  <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                      <div class="d-flex justify-content-start">
                        <div class="feature-icon-3 me-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="#36B9CC" class="bi bi-person-fill" viewBox="0 0 16 16">
                              <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                            </svg> &nbsp;
                        </div>
                        <div>
                          <p id="sisa-antrian" class="fs-3 text-danger mb-1"></p>
                          <p class="mb-0">Sisa Antrian</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Tabel -->
              <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                  <div class="table-responsive">
                    <table class="table table-bordereda table-hover tabel-antrian" width="100%">
                      <thead>
                        <tr>
                          <th>Nomor Antrian KIA</th>
                          <th>Panggil</th>
                        </tr>
                      </thead>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Footer -->
    @include('antriannew.module.footer')
    <!-- End of Footer -->


    <!-- Pop up Logout -->
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
</div>
@endsection
