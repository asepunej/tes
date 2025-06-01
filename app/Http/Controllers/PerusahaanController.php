<?php

namespace App\Http\Controllers;

use App\Models\Perusahaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\Attributes\DataProvider;
use Termwind\Components\Dd;

class PerusahaanController extends Controller
{
    public function index()
    {
        $dataprovider = DB::select('SELECT * FROM master.perusahaan order by id');
        return view('perusahaan.daftar_perusahaan', array('dataprovider'  => $dataprovider));
    }

    public function create()
    {
        $datarecord = new Perusahaan();
        return view('perusahaan.insert_perusahaan', array('datarecord'  => $datarecord));
    }

    public function store(Request $request)
    {
        // @dd($request);
        $this->validate($request, [
            'nama_perusahaan' => 'required|min:5',
            'alamat' => 'required|min:5',
            'npwp' => 'required|min:5',
            'email' => 'required',
            'notelp' => 'required',
            'direktur' => 'required',
            'no_rek' => 'required',
            'nama_bank' => 'required',
        ]);

        Perusahaan::create([
            'nama_perusahaan' => $request->nama_perusahaan,
            'alamat' => $request->alamat,
            'npwp' => $request->npwp,
            'email' => $request->email,
            'notelp' => $request->notelp,
            'direktur' => $request->direktur,
            'no_rek' => $request->no_rek,
            'nama_bank' => $request->nama_bank
        ]);

        return redirect('/perusahaan');
    }

    public function edit($id)
    {
        $datarecord = Perusahaan::findOrFail($id);
        return view(
            'perusahaan.insert_perusahaan',
            array(
                'datarecord'  => $datarecord,
            )
        );
    }

    public function update(Request $request, $id)
    {
        // @dd($request);
        $this->validate($request, [
            'nama_perusahaan' => 'required|min:5',
            'alamat' => 'required|min:5',
            'npwp' => 'required|min:5',
            'email' => 'required',
            'notelp' => 'required',
            'direktur' => 'required',
            'no_rek' => 'required',
            'nama_bank' => 'required',
        ]);

        Perusahaan::where('id', $id)->update([
            'nama_perusahaan' => $request->nama_perusahaan,
            'alamat' => $request->alamat,
            'npwp' => $request->npwp,
            'email' => $request->email,
            'notelp' => $request->notelp,
            'direktur' => $request->direktur,
            'no_rek' => $request->no_rek,
            'nama_bank' => $request->nama_bank
        ]);
        return redirect('/perusahaan');
    }

    public function destroy($id)
    {
        $datarecord = Perusahaan::where('id', $id);
        $datarecord->delete();
        return redirect('/perusahaan');
    }
}
