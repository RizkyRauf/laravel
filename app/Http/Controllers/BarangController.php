<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{

    public function index()
    {
        $barang = DB::table('barangmasuk')->paginate(10);
		return view('barangmasuk.index', [
			'barangmasuk' => $barang,
			"title" => "Barang Masuk",
		]);

		$categories = [];
        $data = [];
        foreach ($barang as $barangs) {
            $categories[] = $barangs->nama_barang;
            $data[] = $barangs->jumlah_barang;
        }
        //dd($data);


        return view('barangmasuk.index', [
            "title" => "Dashboard",
            "categories" => $categories,
            "data" => $data,
            
        ]);
    }

	public function cari(Request $request)
	{
		#menangkapa data pencarian
		$cari = $request->cari;
		#mengambil data dari table barang masuk sesuai pencarian data
		$barangcari = DB::table('barangmasuk')
		->where('nama_barang','like',"%".$cari."%")
		->orWhere('jenis_barang','like',"%".$cari."%")
		->paginate();
		#mengirim data pbarang masuk ke view index
		return view('barangmasuk.index',[
			'barangmasuk' => $barangcari,
			"title" => "Barang Masuk cari",
		]);
	}
	


    public function tambah()
    {
        return view('barangmasuk.tambah');
    }

		public function store(Request $request)
	{
		$file_name = $request->foto->getClientOriginalName();
		$request->foto->storeAs('fotobarang', $file_name);

		if($request->file('foto')){
			$validateData['foto'] = $request->file('foto')->store('fotobarang');
		}
		DB::table('barangmasuk')->insert([
			'nama_barang' => $request->nama,
			'tanggal_barang' => $request->tanggal,
			'harga_barang' => $request->harga,
			'jumlah_barang' => $request->jumlah,
			'jenis_barang' => $request->jenis,
			'keterangan_barang' => $request->keterangan,
			'foto' => $file_name,
		]);

		return redirect('/barangmasuk')->with('sukses', 'Data berhasil ditambahkan');

		
	
	}

	public function edit($id)
	{

		$barang = DB::table('barangmasuk')->where('id_barang',$id)->get();
		return view('barangmasuk.edit',[
			'barangmasuk' => $barang,
			"title" => "Form Edit Barang Masuk",
		]);
	
	}


	public function update(Request $request)
	{
		
		DB::table('barangmasuk')->where('id_barang',$request->id)->update([
			'nama_barang' => $request->nama,
			'tanggal_barang' => $request->tanggal,
			'harga_barang' => $request->harga,
			'jumlah_barang' => $request->jumlah,
			'jenis_barang' => $request->jenis,
			'keterangan_barang' => $request->keterangan,
		]);

		return redirect('/barangmasuk')->with('sukses', 'Data berhasil diubah');
	}

	public function hapus($id)
	{

		DB::table('barangmasuk')->where('id_barang',$id)->delete();
		return redirect('/barangmasuk')->with('sukses', 'Data berhasil dihapus');
	}

	public function view($id)
	{
		$barang = DB::table('barangmasuk')->where('id_barang',$id)->get();
		return view('barangmasuk.view',[
			'barangmasuk' => $barang,
			"title" => "Form View Barang Masuk",
		]);
	}

}

