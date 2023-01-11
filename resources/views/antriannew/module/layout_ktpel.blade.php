<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>ANTRIAN DUKCAPIL</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset ('asset/vendors/images/apple-touch-icon.png')}}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset ('asset/vendors/images/favicon-32x32.png')}}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset ('asset/vendors/images/favicon-16x16.png')}}">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
	@yield('css') -->
	<!-- CSS -->
	<!-- <link rel="stylesheet" type="text/css" href="{{asset('asset/vendors/styles/core.css')}}"> -->
	<!-- <link rel="stylesheet" type="text/css" href="{{asset('asset/vendors/styles/icon-font.min.css')}}"> -->
	<!-- Bootstrap CSS -->
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"> -->

    
	<!-- Bootstrap Icons -->
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.css" />
	<link rel="stylesheet" type="text/css" href="{{asset('asset/vendors/styles/style.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}"> -->

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
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
      $('#jumlah-antrian-ktpel').load("{{url('/get_jumlah_antrian_ktpel')}}");
      $('#antrian-sekarang-ktpel').load("{{url('/get_antrian_ktpel_sekarang')}}");
      $('#antrian-selanjutnya-ktpel').load("{{url('/get_antrian_ktpel_selanjutnya')}}");
      $('#sisa-antrian-ktpel').load("{{url('/get_sisa_antrian_ktpel')}}");

      // menampilkan data antrian menggunakan DataTables
      var table = $('.tabel-antrian-ktpel').DataTable({
        "lengthChange": false,              // non-aktifkan fitur "lengthChange"
        "searching": false,                 // non-aktifkan fitur "Search"
        "ajax": '/get_antrian_ktpel',          // url file proses tampil data dari database
        
        // menampilkan data
        "columns": [{
            "data": "no_antrian_ktpel",
            "width": '250px',
            "className": 'text-center'
          },
          {
            "data": "status",
            "orderable": false,
            "searchable": false,
            "width": '100px',
            "className": 'text-center',
            "render": function(data, type, row) {
              // jika tidak ada data "status"
              if (data === "") {
                // sembunyikan button panggil
                var btn = "-";
              } 
              // jika data "status = 0"
              else if (data === "0") {
                // tampilkan button panggil
                var btn = "<button class=\"btn btn-info btn-sm \"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-mic-fill\" viewBox=\"0 0 16 16\"><path d=\"M5 3a3 3 0 0 1 6 0v5a3 3 0 0 1-6 0V3z\"/><path d=\"M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5z\"/></svg></button>";
              } 
              // jika data "status = 1"
              else if (data === "1") {
                // tampilkan button ulangi panggilan
                var btn = "<button class=\"btn btn-secondary btn-sm \"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-mic-fill\" viewBox=\"0 0 16 16\"><path d=\"M5 3a3 3 0 0 1 6 0v5a3 3 0 0 1-6 0V3z\"/><path d=\"M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5z\"/></svg></button>";
              };
              return btn;
            }
          },
        ],
        "order": [
          [0, "desc"]             // urutkan data berdasarkan "no_antrian" secara descending
        ],
        "iDisplayLength": 10,     // tampilkan 10 data per halaman
      });

      // panggilan antrian dan update data
      $('.tabel-antrian-ktpel tbody').on('click', 'button', function() {
        // ambil data dari datatables 
        var data = table.row($(this).parents('tr')).data();
        // buat variabel untuk menampilkan data "id"
        var id = data["id"];
        // buat variabel untuk menampilkan audio bell antrian
        var bell = document.getElementById('tingtung');

        // mainkan suara bell antrian
        bell.pause();
        bell.currentTime = 0;
        bell.play();

        // set delay antara suara bell dengan suara nomor antrian
        durasi_bell = bell.duration * 770;

        // mainkan suara nomor antrian
        setTimeout(function() {
          responsiveVoice.speak("Nomor Antrian, " + data["no_antrian_ktpel"] + ", menuju, loket, K  T  P ELEKTRONIK", "Indonesian Female", {
            rate: 0.9,
            pitch: 1,
            volume: 1
          });
        }, durasi_bell);

        // proses update data
        $.ajax({
          type: "GET",               // mengirim data dengan method POST
          url: '/admin/'+id+'/update_ktpel',          // url file proses update data ini ni l betulkn kang kles, cube tambahkn antrian sebiji lg
          data: { id: id }            // tentukan data yang dikirim
        });
      });

      // auto reload data antrian setiap 1 detik untuk menampilkan data secara realtime
      setInterval(function() {
        $('#jumlah-antrian-ktpel').load("{{url('/get_jumlah_antrian_ktpel')}}").fadeIn("slow");
        $('#antrian-sekarang-ktpel').load("{{url('/get_antrian_ktpel_sekarang')}}").fadeIn("slow");
        $('#antrian-selanjutnya-ktpel').load("{{url('/get_antrian_ktpel_selanjutnya')}}").fadeIn("slow");
        $('#sisa-antrian-ktpel').load("{{url('/get_sisa_antrian_ktpel')}}").fadeIn("slow");
        table.ajax.reload(null, false);
      }, 1000);
    });
  </script>

	@yield('script')
</body>
</html>