<?php

namespace App\Http\Controllers;
use App\Models\Rekap;
use DataTables;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RekapController extends Controller
{
    public function __construct(){
        $this->middleware('guru');
    }
    
    public function index(){
        $data = Rekap::all();
        return view('rekap.index', ['dataRekap' => $data]);
    }

    public function create()
    {
        return view('rekap.create');
    }

    public function store(Request $request)
    {
        $data = new Rekap;
        $data->id_rekap = $request->id_rekap;
        $data->nisp = $request->nisp;
        $data->ket_sakit = $request->ket_sakit;
        $data->ket_izin = $request->ket_izin;
        $data->ket_alfa = $request->ket_alfa;
        $data->save();
        return redirect('/rekap');
    }

    public function edit($id_rekap)
    {
        $data = Rekap::find($id_rekap);
        return view('rekap.edit', compact('data'));
    }

    public function update(Request $request, $id_rekap)
    {
        $data = Rekap::find($id_rekap);
        $data->id_rekap = $request->id_rekap;
        $data->nisp = $request->nisp;
        $data->ket_sakit = $request->ket_sakit;
        $data->ket_izin = $request->ket_izin;
        $data->ket_alfa = $request->ket_alfa;
        $data->update();
        return redirect('/rekap');
    }
    
    public function destroy($id_rekap)
    {
        $data = Rekap::find($id_rekap);
        $data->delete();
        return redirect('/rekap');
    }


}
