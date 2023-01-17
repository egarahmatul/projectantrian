
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
<body>
	@yield('content')
	<!-- load file audio bell antrian -->
	<audio id="tingtung" src="{{asset('assets/audio/tingtung.mp3')}}"></audio>

    <!-- jQuery Core -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

    <!-- DataTables -->
    <!-- Responsivevoice -->
    <!-- Get API Key -> https://responsivevoice.org/ -->
    <script src="https://code.responsivevoice.org/responsivevoice.js?key=A5fDddMb"></script>
	
	<script src="{{asset('asset/vendors/scripts/core.js')}}"></script>
	<script src="{{asset('asset/vendors/scripts/script.min.js')}}"></script>
	<script src="{{asset('asset/vendors/scripts/process.js')}}"></script>
	<script src="{{asset('asset/vendors/scripts/layout-settings.js')}}"></script>
	<script src="{{asset('asset/vendors/scripts/dashboard.js')}}"></script>

	<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      // tampilkan informasi antrian
    //   $('#jumlah-antrian-ktpel').load("{{url('/get_jumlah_antrian_ktpel')}}");
      $('#antrian-monitor').load("{{url('/get_antrian_ktpel_sekarang;/get_antrian_ktp_sekarang;/get_antrian_sekarang;/get_antrian_akta_sekarang')}}");
    //   $('#antrian-sekarang-ktp').load("{{url('/get_antrian_ktp_sekarang')}}");
    //   $('#antrian-sekarang').load("{{url('/get_antrian_sekarang')}}");
    //   $('#antrian-sekarang-akta').load("{{url('/get_antrian_akta_sekarang')}}");
    //   $('#antrian-selanjutnya-ktpel').load("{{url('/get_antrian_ktpel_selanjutnya')}}");
    //   $('#sisa-antrian-ktpel').load("{{url('/get_sisa_antrian_ktpel')}}");

      // menampilkan data antrian menggunakan DataTables
      var table = $('.tabel-antrian-ktpel';'.tabel-antrian-ktp';'.tabel-antrian';'.tabel-antrian-akta').DataTable({
        "lengthChange": false,              // non-aktifkan fitur "lengthChange"
        "searching": false,                 // non-aktifkan fitur "Search"
        "ajax": '/get_antrian_ktpel;/get_antrian_ktp;/get_antrian;/get_antrian_akta',          // url file proses tampil data dari database
        
        // menampilkan data
        "card": [
          {
            "data": "status",
            "orderable": false,
            "searchable": false,
            "width": '100px',
            "className": 'text-center',
            "render": function(data, type, card) {
              // jika tidak ada data "status"
              if (data === "0") {
                $('#antrian-sekarang-ktpel').load("{{url('/get_antrian_ktpel_sekarang')}}");
              } 
              // jika data "status = 0"
              else if (data === "0") {
                $('#antrian-sekarang-ktp').load("{{url('/get_antrian_ktp_sekarang')}}");
              } 
              // jika data "status = 1"
              else if (data === "0") {
                $('#antrian-sekarang').load("{{url('/get_antrian_sekarang')}}");
              }  
                // jika data "status = 0"
              else if (data === "0") {
                $('#antrian-sekarang-akta').load("{{url('/get_antrian_akta_sekarang')}}");
              };
              return ;
            }
          },
        ],
        "order": [
          [0, "desc"]             // urutkan data berdasarkan "no_antrian" secara descending
        ],
        "iDisplayLength": 10,     // tampilkan 10 data per halaman
      });

      
      // auto reload data antrian setiap 1 detik untuk menampilkan data secara realtime
      setInterval(function() {
        $('#antrian-monitor').load("{{url('/get_antrian_ktpel_sekarang;/get_antrian_ktp_sekarang;/get_antrian_sekarang;/get_antrian_akta_sekarang')}}");
        table.ajax.reload(null, false);
      }, 1000);
    });
  </script>

	@yield('script')
</body>
</html>