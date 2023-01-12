<script type="text/javascript">
    $(document).ready(function() {
      // tampilkan informasi antrian
      $('#jumlah-antrian-ktp').load("{{url('/get_jumlah_antrian_ktp')}}");
      $('#antrian-sekarang-ktp').load("{{url('/get_antrian_ktp_sekarang')}}");
      $('#antrian-selanjutnya-ktp').load("{{url('/get_antrian_ktp_selanjutnya')}}");
      $('#sisa-antrian-ktp').load("{{url('/get_sisa_antrian_ktp')}}");
    }); 
    
    $(document).ready(function() {
      // tampilkan informasi antrian
      $('#jumlah-antrian-ktpel').load("{{url('/get_jumlah_antrian_ktpel')}}");
      $('#antrian-sekarang-ktpel').load("{{url('/get_antrian_ktpel_sekarang')}}");
      $('#antrian-selanjutnya-ktpel').load("{{url('/get_antrian_ktpel_selanjutnya')}}");
      $('#sisa-antrian-ktpel').load("{{url('/get_sisa_antrian_ktpel')}}");
    });

    $(document).ready(function() {
      // tampilkan informasi antrian
      $('#jumlah-antrian').load("{{url('/get_jumlah_antrian_kia')}}");
      $('#antrian-sekarang').load("{{url('/get_antrian_kia_sekarang')}}");
      $('#antrian-selanjutnya').load("{{url('/get_antrian_kia_selanjutnya')}}");
      $('#sisa-antrian').load("{{url('/get_sisa_antrian_kia')}}");
    });

    $(document).ready(function() {
      // tampilkan informasi antrian
      $('#jumlah-antrian-akta').load("{{url('/get_jumlah_antrian_akta')}}");
      $('#antrian-sekarang-akta').load("{{url('/get_antrian_akta_sekarang')}}");
      $('#antrian-selanjutnya-akta').load("{{url('/get_antrian_akta_selanjutnya')}}");
      $('#sisa-antrian-akta').load("{{url('/get_sisa_antrian_akta')}}");
    });
</script>      