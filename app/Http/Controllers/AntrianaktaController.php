<?php

namespace App\Http\Controllers;
use App\Models\Antrianakta;
use DB;
use Illuminate\Http\Request;

class AntrianaktaController extends Controller
{
    public function index()
    {
    	return view('layouts.module2.dashboard_akta');
    }

    public function update_akta($id)
    {
    	$update_date = gmdate("Y-m-d H:i:s", time() + 60 * 60 * 7);

    	$update = Antrianakta::where('id', $id)->update([
    		'status' => "1",
    		'update_date' => $update_date,
    	]);
    }

    public function get_antrian_akta()
    {
    	// ambil tanggal sekarang
    	$tanggal = gmdate("Y-m-d", time() + 60 * 60 * 7);

		// sql statement untuk menampilkan data dari tabel "tbl_antrian" berdasarkan "tanggal"
        $query = DB::table('tbl_antrian_akta')
                ->select('id', 'no_antrian_akta', 'status')
                ->where('tanggal', '=', $tanggal)
                ->get();

		// ambil jumlah baris data hasil query
    	$rows = count($query);
    	//var_dump($rows);
		// cek hasil query
		// jika data ada
    	if ($rows > 0) {
    		$response         = array();
    		$response["data"] = array();

		// ambil data hasil query
    		// while ($row = json_decode(json_encode($query), true)) {
    		// 	$data[0]['id']         = $row[0]["id"];
    		// 	$data[0]['no_antrian_kia'] = $row[0]["no_antrian_kia"];
    		// 	$data[0]['status']     = $row[0]["status"];

    		// 	array_push($response["data"], $data);
    		// }

    		foreach($query as $index => $row) {
    			$data['id']         = strval($row->id);
    			$data['no_antrian_akta'] = strval($row->no_antrian_akta);
    			$data['status']     = strval($row->status);

    			array_push($response["data"], $data);
    		}

		// tampilkan data
    		return json_encode($response);
    	}
		// jika data tidak ada
    	else {
    		$response         = array();
    		$response["data"] = array();

		// buat data kosong untuk ditampilkan
    		$data[0]['id']         = "";
    		$data[0]['no_antrian_akta'] = "-";
    		$data[0]['status']     = "";

    		array_push($response["data"], $data);

		// tampilkan data
    		return json_encode($response);
    	}
    }

    public function get_antrian_akta_sekarang()
    {
		// ambil tanggal sekarang
    	$tanggal = gmdate("Y-m-d", time() + 60 * 60 * 7);

		// sql statement untuk menampilkan data "no_antrian" dari tabel "tbl_antrian" berdasarkan "tanggal" dan "status = 1"

        $query = DB::table("tbl_antrian_akta")
                ->select('no_antrian_akta')
                ->where('tanggal', '=', $tanggal)
                ->where('status', '=', 1)
                ->limit(1)
                ->orderBy('update_date','desc')
                ->get();

		// ambil jumlah baris data hasil query
    	$rows = count($query);

		// cek hasil query
		// jika data "no_antrian" ada
    	if ($rows > 0) {
		// ambil data hasil query
    		$data = json_decode(json_encode($query), true);
		// buat variabel untuk menampilkan data
    		$no_antrian = $data[0]['no_antrian_akta'];

		// tampilkan data
            $simpan = $no_antrian;
            echo $simpan; // 00123
    	} 
		// jika data "no_antrian" tidak ada
    	else {
		// tampilkan "-"
    		echo "-";
    	}
    }

    public function get_antrian_akta_selanjutnya()
    {
		// ambil tanggal sekarang
    	$tanggal = gmdate("Y-m-d", time() + 60 * 60 * 7);

		// sql statement untuk menampilkan data "no_antrian" dari tabel "tbl_antrian" berdasarkan "tanggal" dan "status = 0"

        $query = DB::table("tbl_antrian_akta")
		->select("no_antrian_akta")
		->where("tanggal", "=", $tanggal)
		->where("status", "=", '0')
		->limit(1)
		->orderBy("no_antrian_akta","asc")
		->get();

		// ambil jumlah baris data hasil query
    	$rows = count($query);
		// cek hasil query
		// jika data "no_antrian" ada
    	if ($rows > 0) {
		// ambil data hasil query
    		$data =json_decode(json_encode($query), true);
		// buat variabel untuk menampilkan data
    		$no_antrian_akta = $data[0]['no_antrian_akta'];

		// tampilkan data
            $simpan = $no_antrian_akta;
            echo $simpan; // 00123
    	} 
		// jika data "no_antrian" tidak ada
    	else {
		// tampilkan "-"
    		echo "-";
    	}
    }

    public function get_jumlah_antrian_akta()
    {
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
    	$jumlah_antrian = $data[0]['jumlah'];

		// tampilkan data
    	echo number_format($jumlah_antrian, 0, '', '.');
    }

    public function get_sisa_antrian_akta()
    {
		// ambil tanggal sekarang
    	$tanggal = gmdate("Y-m-d", time() + 60 * 60 * 7);

		// sql statement untuk menampilkan jumlah data dari tabel "tbl_antrian" berdasarkan "tanggal" dan "status = 0"
        $query = DB::table("tbl_antrian_akta")
                ->select(DB::raw('count(id) as jumlah'))
                ->where('tanggal','=', $tanggal )
                ->where('status', '=', '0')
                ->get();

		// ambil data hasil query
    	$data = json_decode(json_encode($query), true);
		// buat variabel untuk menampilkan data
    	$sisa_antrian = $data[0]['jumlah'];

		// tampilkan data
    	echo number_format($sisa_antrian, 0, '', '.');
    }
}
