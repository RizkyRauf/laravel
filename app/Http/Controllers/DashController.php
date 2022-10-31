<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashController extends Controller
{
    public function index()
    {
        //$jumlahbarangmasuk = DB::select(DB::raw("SELECT (jumlah_barang) as jumlah FROM barangmasuk"));
        //dd($jumlahbarangmasuk);
        //$jumlahbarangkeluar = DB::select(DB::raw("SELECT SUM(jumlah_barang) as jumlah FROM barangkeluar"))[0]->jumlah;
        //$jumlahbarangrusak = DB::select(DB::raw("SELECT SUM(jumlah_barang) as jumlah FROM barangrusak"))[0]->jumlah;
        //$pegawais = DB::table('pegawai');
        //return view('dashboard.index', [
            //"title" => "Dashboard",
            //"jumlahbarangmasuk" => $jumlahbarangmasuk,
            //"jumlahbarangkeluar" => $jumlahbarangkeluar,
            //"jumlahbarangrusak" => $jumlahbarangrusak,
            //"pegawais" => $pegawais,
        
        //]);
        $user = DB::table('pegawai')
                ->select(DB::raw('count(*) as lokasi'))
                ->groupBy('lokasi_kantor')
                ->pluck('lokasi');

        //$content = DB::table('pegawai') 
                //->select(DB::raw('count(*) as total'))
                //->where('agama','agama')
                //->where('status','status')
                //->groupBy(DB::raw('tang'))
                //->pluck('count');
                

        //dd($user);
        return view('dashboard.index', [
            "title" => "Dashboard",
            "user" => $user,
            //"content" => $content,
        ]);
    }   
}