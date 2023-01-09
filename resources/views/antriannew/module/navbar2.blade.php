<nav class="navbar navbar-dark navbar-expand-lg sticky-top ">
                    <div class="container">
                        <div class="content w-100 d-flex align-items-center my-4 justify-content-between">
                            <div class="logo d-flex align-self-center">
                                <img src="{{url('asset/vendors/images/logobengkalis.png')}}" alt="logo">
                                <h2>DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL <br> KABUPATEN BENGKALIS</h2>
                            </div>

                            <div class="nav-items;">
                                <p>
                                   <span id="hari"></span><span id="tanggal"></span><br>
                                    <span id="waktu"></span>
                                </p>
                                <script>
                                    var tw = new Date();
                                    if (tw.getTimezoneOffset() == 0) (a=tw.getTime() + ( 7 *60*60*1000))
                                    else (a=tw.getTime());
                                    tw.setTime(a);
                                    var tahun= tw.getFullYear ();
                                    var hari= tw.getDay ();
                                    var bulan= tw.getMonth ();
                                    var tanggal= tw.getDate ();
                                    var hariarray=new Array("Minggu,","Senin,","Selasa,","Rabu,","Kamis,","Jum'at,","Sabtu,");
                                    var bulanarray=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","Nopember","Desember");
                                    document.getElementById("tanggal").innerHTML = hariarray[hari]+" "+tanggal+" "+bulanarray[bulan]+" "+tahun;
                                    document.getElementById("waktu").innerHTML = ((tw.getHours() < 10) ? "0" : "") + tw.getHours() + ":" + ((tw.getMinutes() < 10)? "0" : "") + tw.getMinutes();
                                </script>                            
                            </div>        
                        </div>
                    </div>
                </nav>