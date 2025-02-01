<?php

namespace App\Http\Controllers;

use App\Models\Tahun;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
  
    public function index()
    {
      
        $tahun = DB::select(' SELECT 
        tahun
    FROM 
        referensi.tahun order by tahun');

        return view('tahun.index', array( 'tahun'  =>$tahun));
    }

    public function create()
    {
        return view('tahun.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'tahun'=>'required|max:2050',
          
        ]);

        Tahun::create([
            'tahun'=>$request->tahun,
        ]);

        return redirect('/tahun');
        

    }
}
