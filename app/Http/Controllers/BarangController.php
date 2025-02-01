<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{

    public function index()
    {

        $barang = DB::select(' SELECT 
        id,
        kode_barang,
        nama_barang,
        spesifikasi,
        satuan,
        harga,
        stok
      FROM 
        master.barang order by barang');

        return view('barang.daftar_barang', array('barang'  => $barang));
    }

    public function create()
    {
        return view('barang.insert_barang');
    }

    public function store(Request $request)
    {
        Barang::create([
            'kode_barang' =>  $request->kode_barang,
            'nama_barang' => $request->nama_barang,
            'spesifikasi' => $request->spesifikasi,
            'satuan' => $request->satuan,
            'harga' => $request->harga,
            'stok' => $request->stok,

            // 'kode_barang' => $request->kode_barang,
            // 'nama_barang' => $request->nama_barang,
            // 'spesifikasi' => $request->spesifikasi,
            // 'satuan' => $request->satuan,
            // 'harga' => $request->harga,
            // 'stok' => $request->stok,
        ]);
        // @dd($request);


        return redirect('/barang');
    }
}
