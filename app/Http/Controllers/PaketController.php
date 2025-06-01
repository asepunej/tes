<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use App\Models\Perusahaan;
use App\Models\Tahun;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\Attributes\DataProvider;
use Termwind\Components\Dd;


class PaketController extends Controller
{
    public function index()
    {
        $datapaket = DB::select('SELECT * FROM master.daftar_paket order by id');
        $datatahun = Tahun::all();
        $dataperusahaan = Perusahaan::all();
        return view('paket.daftar_paket', array(
            'datapaket'  => $datapaket,
            'datatahun'  => $datatahun,
            'dataperusahaan'  => $dataperusahaan
        ));
    }

    public function create()
    {
        $datapaket = new Paket();
        $datatahun = Tahun::all();
        $dataperusahaan = Perusahaan::all();
        return view('paket.insert_paket', array(
            'datapaket'  => $datapaket,
            'datatahun'  => $datatahun,
            'dataperusahaan'  => $dataperusahaan
        ));
    }

    public function store(Request $request)
    {
        Paket::create([
            'uraian' => $request->texturaian,
            'tahun' => $request->optiontahun,
            'id_perusahaan' => $request->optionperusahaan,
            'mitra' => $request->textmitra,
            'lokasi' => $request->textlokasi,
            'nilai_kontrak' => $request->textnilaikontrak,

        ]);


        return redirect('/paket');
    }

    public function edit($id)
    {
        $datapaket = Paket::findOrFail($id);
        $datatahun = Tahun::all();
        $dataperusahaan = Perusahaan::all();
        return view(
            'Paket.insert_Paket',
            array(
                'datapaket'  => $datapaket,
                'datatahun'  => $datatahun,
                'dataperusahaan'  => $dataperusahaan
            )
        );
    }

    public function update(Request $request, $id)
    {


        Paket::where('id', $id)->update([
            'uraian' => $request->texturaian,
            'tahun' => $request->optiontahun,
            'id_perusahaan' => $request->optionperusahaan,
            'mitra' => $request->textmitra,
            'lokasi' => $request->textlokasi,
            'nilai_kontrak' => $request->textnilaikontrak,
        ]);
        return redirect('/paket');
    }

    public function destroy($id)
    {
        $datarecord = Paket::where('id', $id);
        $datarecord->delete();
        return redirect('/paket');
    }
}
