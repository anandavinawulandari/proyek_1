<?php

namespace App\Http\Controllers;
use App\Models\Sertifikat;
use DataTables;
use PDF;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SertifikatController extends Controller
{
    public function __construct(){
        $this->middleware('guru')->only('index','update','edit','create','destroy', 'store');
    }
    
    public function index(){
        $data = Sertifikat::all();
        return view('sertifikat.index', ['dataSertifikat' => $data]);
    }
    public function index2(){
        $data = Sertifikat::all();
        return view('sertifikat.index2', ['dataSertifikat' => $data]);
    }

    public function create()
    {
        return view('sertifikat.create');
    }

    public function store(Request $request)
    {
        $data = new Sertifikat;
        $data->nomor_sertifikat = $request->nomor_sertifikat;
        $data->nisp = $request->nisp;
        $data->keterangan = $request->keterangan;
        $data->save();
        return redirect('/sertifikat');
    }

    public function edit($id_sertif)
    {
        $data = Sertifikat::find($id_sertif);
        return view('sertifikat.edit', compact('data'));
    }

    public function update(Request $request, $id_sertif)
    {
        $data = Sertifikat::find($id_sertif);
        $data->nomor_sertifikat = $request->nomor_sertifikat;
        $data->nisp = $request->nisp;
        $data->keterangan = $request->keterangan;
        $data->update();
        return redirect('/sertifikat');
    }
    
    public function destroy($id_sertif)
    {
        $data = Sertifikat::find($id_sertif);
        $data->delete();
        return redirect('/sertifikat');
    }

     //Function untuk download Sertifikat
     public function print($id_sertif)
     {
         $data = Sertifikat::find($id_sertif);
         $pdf = PDF::loadview('sertifikat.print', compact('data'))->setPaper('a4', 'landscape');
         return $pdf->stream('Sertifikat-'.$data->nomor_sertifikat.'-'.$data->nama.'.pdf');
     }
}
