<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Antrian;
use App\Models\Antrianktp;
use App\Models\Antrianktpel;
use App\Models\Antrianakta;

class AntrianController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }

	// KIA
    public function getantrian()
	{
		if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest')) {

		// ambil tanggal sekarang
		$tanggal = gmdate("Y-m-d", time() + 60 * 60 * 7);

		// sql statement untuk menampilkan jumlah data dari tabel "tbl_antrian" berdasarkan "tanggal"
		$query = DB::table("tbl_antrian_kia")
				->select(DB::raw('count(id) as jumlah'))
				->where('tanggal','=', $tanggal)
				->get();
		// ambil data hasil query
		$data = json_decode(json_encode($query), true);
		// buat variabel untuk menampilkan data
		$jumlah_antrian = $data[0]['jumlah'];

		// tampilkan data
			// $huruf = "A";
		    // $formatted_num = $huruf . sprintf ('%03d', $jumlah_antrian);
            // echo $formatted_num; // 00123
		}
	}

	public function insert(Request $request)
	{
		// membuat "no_antrian"
		// sql statement untuk menampilkan data "no_antrian" terakhir pada tabel "tbl_antrian" berdasarkan "tanggal"

		if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest')) {
			// ambil tanggal sekarang
			$tanggal = gmdate("Y-m-d", time() + 60 * 60 * 7);

			// membuat "no_antrian"
			// sql statement untuk menampilkan data "no_antrian" terakhir pada tabel "tbl_antrian" berdasarkan "tanggal"
			$query = DB::table('tbl_antrian_kia')
			->select(DB::raw('max(right(no_antrian_kia, 3)) as nomor'))
			->where('tanggal','=', $tanggal)
			->get();

			// ambil jumlah baris data hasil query
			$rows = count($query);
			// cek hasil query
			// jika "no_antrian" sudah ada
			if ($rows > 0) {
			// ambil data hasil query
				$data = json_decode(json_encode($query), true);
			// "no_antrian" = "no_antrian" yang terakhir + 1
				$no_antrian_kia = ((int)$data[0]['nomor']) + 1;
				$huruf = "C";
				$simpan = $huruf . sprintf("%03d", $no_antrian_kia);
			}
			// jika "no_antrian" belum ada
			else {
			// "no_antrian" = 1
				$no_antrian_kia = A001;
			}
			// sql statement untuk insert data ke tabel "tbl_antrian"
			$insert = new Antrian;
	 
	        $insert->tanggal = $tanggal;
	        $insert->no_antrian_kia = $simpan;
	 
	        $insert->save();

	        return redirect('/');
		}
		return redirect('layouts.module2.layar_jenis');
	}

	// KTP
    public function getantrianktp()
	{

		if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest')) {

		// ambil tanggal sekarang
		$tanggal = gmdate("Y-m-d", time() + 60 * 60 * 7);

		// sql statement untuk menampilkan jumlah data dari tabel "tbl_antrian" berdasarkan "tanggal"
		$query = DB::table("tbl_antrian_ktp")
				->select(DB::raw('count(id) as jumlah'))
				->where('tanggal','=', $tanggal)
				->get();
		// ambil data hasil query
		$data = json_decode(json_encode($query), true);
		// buat variabel untuk menampilkan data
		$jumlah_antrian_ktp = $data[0]['jumlah'];

		var_dump($jumlah_antrian_ktp);

		// tampilkan data
		    // $huruf = "B";
		    // $formatted_num = $huruf . sprintf ('%03d', $jumlah_antrian_ktp);
            // echo $formatted_num; // 00123
		}
	}

	public function insertktp(Request $request)
	{
		// membuat "no_antrian"
		// sql statement untuk menampilkan data "no_antrian" terakhir pada tabel "tbl_antrian" berdasarkan "tanggal"

		if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest')) {
			// ambil tanggal sekarang
			$tanggal = gmdate("Y-m-d", time() + 60 * 60 * 7);

			// membuat "no_antrian"
			// sql statement untuk menampilkan data "no_antrian" terakhir pada tabel "tbl_antrian" berdasarkan "tanggal"
			$query = DB::table('tbl_antrian_ktp')
			->select(DB::raw('max(right(no_antrian_ktp, 3)) as nomor'))
			->where('tanggal','=', $tanggal)
			->get();

			// ambil jumlah baris data hasil query
			$rows = count($query);
			// cek hasil query
			// jika "no_antrian" sudah ada
			if ($rows > 0) {
			// ambil data hasil query
				$data = json_decode(json_encode($query), true);
			// "no_antrian" = "no_antrian" yang terakhir + 1
				$no_antrian_ktp = ((int)$data[0]['nomor']) + 1;
				$huruf = "B";
				$simpan = $huruf . sprintf("%03d", $no_antrian_ktp);
			}
			// jika "no_antrian" belum ada
			else {
			// "no_antrian" = 1
				$no_antrian_ktp = 001;
			}
			// sql statement untuk insert data ke tabel "tbl_antrian"
			$insert = new Antrianktp;
	 
	        $insert->tanggal = $tanggal;
	        $insert->no_antrian_ktp = $simpan;
	 
	        $insert->save();

	        return redirect('/');
		}
		return redirect('layouts.module2.layar_jenis');
	}

	// KTP EL
    public function getantrianktpel()
	{

		if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest')) {

		// ambil tanggal sekarang
		$tanggal = gmdate("Y-m-d", time() + 60 * 60 * 7);

		// sql statement untuk menampilkan jumlah data dari tabel "tbl_antrian" berdasarkan "tanggal"
		$query = DB::table("tbl_antrian_ktpel")
				->select(DB::raw('count(id) as jumlah'))
				->where('tanggal','=', $tanggal)
				->get();
		// ambil data hasil query
		$data = json_decode(json_encode($query), true);
		// buat variabel untuk menampilkan data
		$jumlah_antrian_ktpel = $data[0]['jumlah'];

		// tampilkan data
		    // $huruf = "B";
		    // $formatted_num = $huruf . sprintf ('%03d', $jumlah_antrian_ktp);
            // echo $formatted_num; // 00123
		}
	}

	public function insertktpel(Request $request)
	{
		// membuat "no_antrian"
		// sql statement untuk menampilkan data "no_antrian" terakhir pada tabel "tbl_antrian" berdasarkan "tanggal"

		if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest')) {
			// ambil tanggal sekarang
			$tanggal = gmdate("Y-m-d", time() + 60 * 60 * 7);

			// membuat "no_antrian"
			// sql statement untuk menampilkan data "no_antrian" terakhir pada tabel "tbl_antrian" berdasarkan "tanggal"
			$query = DB::table('tbl_antrian_ktpel')
			->select(DB::raw('max(right(no_antrian_ktpel, 3)) as nomor'))
			->where('tanggal','=', $tanggal)
			->get();

			// ambil jumlah baris data hasil query
			$rows = count($query);
			// cek hasil query
			// jika "no_antrian" sudah ada
			if ($rows > 0) {
			// ambil data hasil query
				$data = json_decode(json_encode($query), true);
			// "no_antrian" = "no_antrian" yang terakhir + 1
				$no_antrian_ktpel =((int)$data[0]['nomor']) + 1;
				$huruf = "A";
				$simpan = $huruf . sprintf("%03d", $no_antrian_ktpel);
			}
			// jika "no_antrian" belum ada
			else {
			// "no_antrian" = 1
				$no_antrian_ktpel = A001;
			}
			// sql statement untuk insert data ke tabel "tbl_antrian"
			$insert = new Antrianktpel;
	 
	        $insert->tanggal = $tanggal;
	        $insert->no_antrian_ktpel = $simpan;
	 
	        $insert->save();

	        return redirect('/');
		}
		return redirect('layouts.module2.layar_jenis');
	}

	// Akta
	public function getantrianakta()
	{

		if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest')) {

		// ambil tanggal sekarang
		$tanggal = gmdate("Y-m-d", time() + 60 * 60 * 7);

		// sql statement untuk menampilkan jumlah data dari tabel "tbl_antrian" berdasarkan "tanggal"
		$query = DB::table("tbl_antrian_akta")
				->select(DB::raw('count(id) as jumlah'))
				->where('tanggal','=', $tanggal)
				->get();
		// ambil data hasil query
		$data = json_decode(json_encode($query), true);
		// buat variabel untuk menampilkan data
		$jumlah_antrian_akta = $data[0]['jumlah'];

		// tampilkan data
		    // $huruf = "B";
		    // $formatted_num = $huruf . sprintf ('%03d', $jumlah_antrian_ktp);
            // echo $formatted_num; // 00123
		}
	}

	public function insertakta(Request $request)
	{
		// membuat "no_antrian"
		// sql statement untuk menampilkan data "no_antrian" terakhir pada tabel "tbl_antrian" berdasarkan "tanggal"

		if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest')) {
			// ambil tanggal sekarang
			$tanggal = gmdate("Y-m-d", time() + 60 * 60 * 7);

			// membuat "no_antrian"
			// sql statement untuk menampilkan data "no_antrian" terakhir pada tabel "tbl_antrian" berdasarkan "tanggal"
			$query = DB::table('tbl_antrian_akta')
			->select(DB::raw('max(right(no_antrian_akta, 3)) as nomor'))
			->where('tanggal','=', $tanggal)
			->get();

			// ambil jumlah baris data hasil query
			$rows = count($query);
			// cek hasil query
			// jika "no_antrian" sudah ada
			if ($rows > 0) {
			// ambil data hasil query
				$data = json_decode(json_encode($query), true);
			// "no_antrian" = "no_antrian" yang terakhir + 1
				$no_antrian_akta =((int)$data[0]['nomor']) + 1;
				$huruf = "D";
				$simpan = $huruf . sprintf("%03d", $no_antrian_akta);
			}
			// jika "no_antrian" belum ada
			else {
			// "no_antrian" = 1
				$no_antrian_akta = A001;
			}
			// sql statement untuk insert data ke tabel "tbl_antrian"
			$insert = new Antrianakta;
	 
	        $insert->tanggal = $tanggal;
	        $insert->no_antrian_akta = $simpan;
	 
	        $insert->save();

	        return redirect('/');
		}
		return redirect('layouts.module2.layar_jenis');
	}

}
