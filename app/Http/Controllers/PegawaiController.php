<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PegawaiController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$pegawai = DB::table('pegawai')->paginate(10);
    	return view('pegawai.index',[
			'pegawai' => $pegawai,
			"title" => "Pegawai",
		]);

    }

	public function cari(Request $request)
	{
		#menangkapa data pencarian
		$cari = $request->cari;
		#mengambil data dari table pegawai sesuai pencarian data
		$pegawaicari = DB::table('pegawai')
		->where('nama_lengkap','like',"%".$cari."%")
		->orWhere('nik','like',"%".$cari."%")
		->paginate();
		#mengirim data pegawai ke view index
		return view('pegawai.index',[
			'pegawai' => $pegawaicari,
			"title" => "Pegawai cari",
		]);
	}

	public function tambah()
	{
		return view('pegawai.tambah');
	}

	public function store(Request $request)
	{
		DB::table('pegawai')->insert([
			'nik' => htmlspecialchars($request->nik),
			'nama_lengkap' => htmlspecialchars($request->lengkap),
			'nama_panggilan' => htmlspecialchars($request->panggilan),
			'tempat_lahir' => htmlspecialchars($request->tempat),
			'tanggal' => htmlspecialchars($request->tanggal),
			'agama' => htmlspecialchars($request->agama),
			'golongan_darah' => htmlspecialchars($request->darah),
			'jenis_kelamin' => htmlspecialchars($request->kelamin),
			'status' => htmlspecialchars($request->status),
			'jumlah_anak' => htmlspecialchars($request->anak),
			'nik_ktp' => htmlspecialchars($request->nik_ktp),
			'no_npwp' => htmlspecialchars($request->no_npwp),
			'alamat_npwp' => htmlspecialchars($request->alamat_npwp),
			'pendidikan' => htmlspecialchars($request->pendidikan),
			'divisi' => htmlspecialchars($request->divisi),
			'email_pribadi' => htmlspecialchars($request->email_pribadi),
			'email_kantor' => htmlspecialchars($request->email_kantor),
			'skype' => htmlspecialchars($request->skype),
			'lokasi_kantor' => htmlspecialchars($request->lokasi_kantor),

		]);
			return redirect('/pegawai')->with('sukses', 'Data berhasil ditambahkan');
	}

	public function edit($lengkap)
	{
		$pegawai = DB::table('pegawai')->where('nama_lengkap',$lengkap)->get();
		return view('pegawai.edit',[
			'pegawai' => $pegawai,
			"title" => "Form Edit Pegawai",
		]);
	}

	public function update(Request $request)
	{
		DB::table('pegawai')->where('id_pegawai',$request->id_pegawai)->update([
			'nik' => $request->nik,
			'nama_lengkap' => $request->lengkap,
			'nama_panggilan' => $request->panggilan,
			'tempat_lahir' => $request->tempat,
			'tanggal' => $request->tanggal,
			'agama' => $request->agama,
			'golongan_darah' => $request->darah,
			'jenis_kelamin' => $request->kelamin,
			'status' => $request->status,
			'jumlah_anak' => $request->anak,
			'nik_ktp' => $request->nik_ktp,
			'no_npwp' => $request->no_npwp,
			'alamat_npwp' => $request->alamat_npwp,
			'pendidikan' => $request->pendidikan,
			'divisi' => $request->divisi,
			'email_pribadi' => $request->email_pribadi,
			'email_kantor' => $request->email_kantor,
			'skype' => $request->skype,
			'lokasi_kantor' => $request->lokasi_kantor,
		]);
		return redirect('/pegawai')->with('sukses', 'Data berhasil diubah');
	}

	public function hapus($id)
	{
		DB::table('pegawai')->where('id_pegawai',$id)->delete();
		return redirect('/pegawai')->with('sukses', 'Data berhasil dihapus');
	}

	
}