<?php

namespace App\Http\Controllers;

use App\Models\Tahun;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TahunController extends Controller
{


    public function index()
    {
        $tahun = Tahun::all();
        return view('tahun.daftar_tahun', compact('tahun'));
    }

    public function create()
    {
        $datarecord = new Tahun();
        return view('tahun.form_tahun', compact('datarecord'));
    }

    public function store(Request $request, $id = null)
    {
        $request->validate([
            'tahun' => 'required'
        ]);
        Tahun::create([
            'tahun' => $request->tahun
        ]);
        return redirect('/tahun');
    }

    public function edit($tahun)
    {
        $datarecord = Tahun::where('tahun', $tahun)->first();
        return view(
            'Tahun.form_tahun',
            array(
                'datarecord'  => $datarecord,
            )
        );
    }

    public function update(Request $request, $tahun)
    {
        $request->validate([
            'tahun' => 'required'
        ]);


        Tahun::where('tahun', $tahun)->update([
            'tahun' => $request->tahun
        ]);
        return redirect('/tahun');
    }

    public function destroy($tahun)
    {
        $datarecord = Tahun::where('tahun', $tahun);
        $datarecord->delete();
        return redirect('/tahun');
    }
}
