<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeluarController extends Controller
{
    public function index()
    {
        $barang = DB::table('barangkeluar')->paginate(10);
        return view('barangkeluar.index', [
			'barangkeluar' => $barang,
			"title" => "Barang Keluar",
		]);
    }

	public function cari(Request $request)
	{
		#menangkapa data pencarian
		$cari = $request->cari;
		#mengambil data dari table barang masuk sesuai pencarian data
		$barangcari = DB::table('barangkeluar')
		->where('nama_barang','like',"%".$cari."%")
		->orWhere('penerima_barang','like',"%".$cari."%")
		->paginate();
		#mengirim data pbarang masuk ke view index
		return view('barangkeluar.index',[
			'barangkeluar' => $barangcari,
			"title" => "Barang Keluar cari",
		]);
	}

    public function tambah()
    {
        return view('barangkeluar.tambah');
    }

    public function store(Request $request)
	{
		DB::table('barangkeluar')->insert([
			'nama_barang' => $request->nama,
			'tanggal_barang' => $request->tanggal,
			'jumlah_barang' => $request->jumlah,
			'penerima_barang' => $request->penerima,
			'jenis_barang' => $request->jenis,
			'keterangan_barang' => $request->keterangan,
		]);
		return redirect('/barangkeluar')->with('sukses', 'Data berhasil ditambahkan');
	}


    public function edit($id)
	{

		$barang = DB::table('barangkeluar')->where('id_barang',$id)->get();
		return view('barangkeluar.edit',[
			'barangkeluar' => $barang,
			"title" => "Form Edit Barang Keluar",
		]);
	
	}

    public function update(Request $request)
	{
		
		DB::table('barangkeluar')->where('id_barang',$request->id)->update([
			'nama_barang' => $request->nama,
			'tanggal_barang' => $request->tanggal,
			'jumlah_barang' => $request->jumlah,
			'penerima_barang' => $request->penerima,
			'jenis_barang' => $request->jenis,
			'keterangan_barang' => $request->keterangan,
		]);

		return redirect('/barangkeluar')->with('sukses', 'Data berhasil diubah');
	}

    public function hapus($id)
    {
        DB::table('barangkeluar')->where('id_barang',$id)->delete();
        return redirect('/barangkeluar')->with('sukses', 'Data berhasil dihapus');
    }

}
