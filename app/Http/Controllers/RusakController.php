<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RusakController extends Controller
{
    public function index()
    {
        $rusak = DB::table('barangrusak')->paginate(10);
        return view('barangrusak.index', [
			'barangrusak' => $rusak,
			"title" => "Barang Rusak",
		]);
    }

	public function cari(Request $request)
	{
		#menangkapa data pencarian
		$cari = $request->cari;
		#mengambil data dari table pegawai sesuai pencarian data
		$barangrusakcari = DB::table('barangrusak')
		->where('nama_barang','like',"%".$cari."%")
		->orWhere('kode_barang','like',"%".$cari."%")
		->paginate();
		#mengirim data pegawai ke view index
		return view('barangrusak.index',[
			'barangrusak' => $barangrusakcari,
			"title" => "Barang Rusak cari",
		]);
	}

    public function tambah()
    {
        return view('barangrusak.tambah');
    }

    public function store(Request $request)
	{
		DB::table('barangrusak')->insert([
			'nama_barang' => $request->nama,
			'tanggal_barang' => $request->tanggal,
			'jumlah_barang' => $request->jumlah,
			'status_barang' => $request->status,
			'keterangan_barang' => $request->keterangan,
		]);
		return redirect('/barangrusak')->with('sukses', 'Data berhasil ditambahkan');
	}

    public function edit($id)
	{

		$rusak = DB::table('barangrusak')->where('id_barang',$id)->get();
		return view('barangrusak.edit',[
			'barangrusak' => $rusak,
			"title" => "Form Edit Barang Rusak",
		]);
	
	}

    public function update(Request $request)
	{
		
		DB::table('barangrusak')->where('id_barang',$request->id)->update([
			'nama_barang' => $request->nama,
			'tanggal_barang' => $request->tanggal,
			'jumlah_barang' => $request->jumlah,
			'status_barang' => $request->status,
			'keterangan_barang' => $request->keterangan,
		]);

		return redirect('/barangrusak')->with('sukses', 'Data berhasil diubah');
	}


}
