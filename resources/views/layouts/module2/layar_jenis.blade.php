@extends('antriannew.module.layout')
@section('content')
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf_token" content="{{ csrf_token() }}" />

</head>
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
                                        <a id="insertktpel" href="javascript:void(0)" class="btn btn-block py-4" >
                                            <span class="text">PEREKAMAN BIOMETRIK KTP-EL</span>
                                        </a>
                                    </div>
                                    <!-- button end -->


                                    <!-- button -->
                                    <div class="button  mx-auto my-5">
                                        <a id="insertktp" href="javascript:void(0)" class="btn btn-block py-4" >
                                            <span class="text">KTP</span>
                                        </a>
                                    </div>
                                    <!-- button end -->
                    </div>

                    <div class="col-xl-6">
                                    <!-- button -->
                                    <div class="button  mx-auto my-5">
                                        <a id="insert" href="javascript:void(0)" class="btn btn-block py-4" >
                                            <span class="text">KIA</span>
                                        </a>
                                    </div>
                                    <!-- button end -->

                                    <!-- button -->
                                    <div class="button  mx-auto my-5">
                                        <a id="insertakta" href="javascript:void(0)" class="btn btn-block py-4" >
                                            <span class="text">REKOMENDASI AKTA KELAHIRAN</span>
                                        </a>
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

  <!-- jQuery Core -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <!-- Popper and Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

  <!-- KIA -->
  <script type="text/javascript">
    $(document).ready(function() {
      // tampilkan jumlah antrian
      // $('#antrian').load("{{url('/getantrian')}}");

      // proses insert data
      $('#insert').on('click', function() {
        $.ajax({
          type: 'POST',                     // mengirim data dengan method POST
          "headers": {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},
          url: '{{url("/insert")}}',                // url file proses insert data
          success: function(result) {       // ketika proses insert data selesai
            // jika berhasil
            if (result === 'Sukses') {
              // tampilkan jumlah antrian
              $('#antrian').load("{{url('/getantrian')}}").fadeIn('slow');
            }
            setTimeout(function() { window.location=window.location;},500);
          },
        });
      });
    });
  </script>

<!-- KTP -->
  <script type="text/javascript">
    $(document).ready(function() {
      // tampilkan jumlah antrian
       $('#antrianktp').load("{{url('/getantrianktp')}}");

      // proses insert data
      $('#insertktp').on('click', function() {
        $.ajax({
          type: 'POST',                     // mengirim data dengan method POST
          "headers": {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},
          url: '{{url("/insertktp")}}',                // url file proses insert data
          success: function(result) {       // ketika proses insert data selesai
            // jika berhasil
            if (result === 'Sukses') {
              // tampilkan jumlah antrian
              $('#antrianktp').load("{{url('/getantrianktp')}}").fadeIn('slow');
            }
            setTimeout(function() { window.location=window.location;},500);
          },
        });
      });
    });
  </script>

  <!-- KTP EL-->
  <script type="text/javascript">
    $(document).ready(function() {
      // tampilkan jumlah antrian
      // $('#antrianktpel').load("{{url('/getantrianktpel')}}");

      // proses insert data
      $('#insertktpel').on('click', function() {
        $.ajax({
          type: 'POST',                     // mengirim data dengan method POST
          "headers": {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},
          url: '{{url("/insertktpel")}}',                // url file proses insert data
          success: function(result) {       // ketika proses insert data selesai
            // jika berhasil
            if (result === 'Sukses') {
              // tampilkan jumlah antrian
              $('#antrianktpel').load("{{url('/getantrianktpel')}}").fadeIn('slow');
            }
            setTimeout(function() { window.location=window.location;},500);
          },
        });
      });
    });
  </script>

  <!-- Akta -->
  <script type="text/javascript">
    $(document).ready(function() {
      // tampilkan jumlah antrian
      // $('#antrianakta').load("{{url('/getantrianakta')}}");

      // proses insert data
      $('#insertakta').on('click', function() {
        $.ajax({
          type: 'POST',                     // mengirim data dengan method POST
          "headers": {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},
          url: '{{url("/insertakta")}}',                // url file proses insert data
          success: function(result) {       // ketika proses insert data selesai
            // jika berhasil
            if (result === 'Sukses') {
              // tampilkan jumlah antrian
              $('#antrianakta').load("{{url('/getantrianakta')}}").fadeIn('slow');
            }
            setTimeout(function() { window.location=window.location;},500);
          },
        });
      });
    });
  </script>
 
</body>
@endsection