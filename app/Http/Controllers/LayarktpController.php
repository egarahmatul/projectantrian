<?php

namespace App\Http\Controllers;
use App\Models\Antrianktp;
use App\Models\Antrianktpel;
use App\Models\Antriankia;
use App\Models\Antrianakta;
use DB;
use Illuminate\Http\Request;

class LayarktpController extends Controller
{
    public function index()
    {
    	return view('layouts.module2.layar_nomor');
    }

    public function get_antrian_ktp_sekarang()
    {
        // ambil tanggal sekarang
        $tanggal = gmdate("Y-m-d", time() + 60 * 60 * 7);

        // sql statement untuk menampilkan data "no_antrian" dari tabel "tbl_antrian" berdasarkan "tanggal" dan "status = 1"

        $query = DB::table("tbl_antrian_ktp")
                ->select('no_antrian_ktp')
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
            $no_antrian = $data[0]['no_antrian_ktp'];

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

    public function get_antrian_ktpel_sekarang()
    {
        // ambil tanggal sekarang
        $tanggal = gmdate("Y-m-d", time() + 60 * 60 * 7);

        // sql statement untuk menampilkan data "no_antrian" dari tabel "tbl_antrian" berdasarkan "tanggal" dan "status = 1"

        $query = DB::table("tbl_antrian_ktpel")
                ->select('no_antrian_ktpel')
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
            $no_antrian = $data[0]['no_antrian_ktpel'];

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

    public function get_antrian_kia_sekarang()
    {
		// ambil tanggal sekarang
    	$tanggal = gmdate("Y-m-d", time() + 60 * 60 * 7);

		// sql statement untuk menampilkan data "no_antrian" dari tabel "tbl_antrian" berdasarkan "tanggal" dan "status = 1"

        $query = DB::table("tbl_antrian_kia")
                ->select('no_antrian_kia')
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
    		$no_antrian = $data[0]['no_antrian_kia'];

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
}    