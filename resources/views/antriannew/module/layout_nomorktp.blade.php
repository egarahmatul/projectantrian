<script type="text/javascript">
    $(document).ready(function() {
      // tampilkan informasi antrian
      $('#antrian-sekarang-ktp').load("{{url('/get_antrian_ktp_sekarang')}}");
      $('#antrian-sekarang-ktpel').load("{{url('/get_antrian_ktpel_sekarang')}}");
      $('#antrian-sekarang').load("{{url('/get_antrian_kia_sekarang')}}");
      $('#antrian-sekarang-akta').load("{{url('/get_antrian_akta_sekarang')}}");

      setInterval(function() {
        $('#antrian-sekarang-ktp').load("{{url('/get_antrian_ktp_sekarang')}}").fadeIn("slow");
        $('#antrian-sekarang-akta').load("{{url('/get_antrian_akta_sekarang')}}").fadeIn("slow");
        $('#antrian-sekarang').load("{{url('/get_antrian_kia_sekarang')}}").fadeIn("slow");
        $('#antrian-sekarang-ktpel').load("{{url('/get_antrian_ktpel_sekarang')}}").fadeIn("slow");
        table.ajax.reload(null, false);
      }, 1000);
    });
    
</script>      