<script type="text/javascript">
    $(document).ready(function() {
      // tampilkan informasi antrian
      $('#antrian-sekarang-ktp').load("{{url('/get_antrian_ktp_sekarang')}}");
    }); 
    
    $(document).ready(function() {
      // tampilkan informasi antrian
      $('#antrian-sekarang-ktpel').load("{{url('/get_antrian_ktpel_sekarang')}}");
    });

    $(document).ready(function() {
      // tampilkan informasi antrian
      $('#antrian-sekarang').load("{{url('/get_antrian_kia_sekarang')}}");
    });

    $(document).ready(function() {
      // tampilkan informasi antrian
      $('#antrian-sekarang-akta').load("{{url('/get_antrian_akta_sekarang')}}");
    });
</script>      