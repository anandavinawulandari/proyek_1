<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nilai;
use App\Models\Pengajar;
use App\Models\Siswa;
use DataTables;
use App\Exports\ExportExcelBarang;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use PDF;
use Illuminate\Support\Facades\Auth;

class NilaiController extends Controller
{
   public function __construct(){
        $this->middleware('guru')->only('index','update','edit','create','destroy');
    }
    public function __construct1(){
        $this->middleware('siswa');
    }

    public function index(){
        $data = Nilai::all();
        return view('nilai.index', ['dataNilai' => $data]);

        $data = Pengajar::all();
        return view('pengajar.index', ['dataNilai' => $data]);

        $data = Siswa::all();
        return view('siswa.index', ['dataNilai' => $data]);

    }

    public function index2(){
        $data = Nilai::all();
        return view('nilai.index2', ['dataNilai' => $data]);


    }
    public function create(){
        return view('nilai.create');
    }
    public function store(Request $request){
        $message = [
            'required' => ':attribute wajib diisi',
            'unique' => ':attribute sudah digunakan',
            'numeric' => ':attribute harus diisi angka',
        ];

        $this->validate($request,[
            'nisp' => 'required|numeric',
            'nilai' => 'required|numeric'            
        ], $message);
        
        $data = new Nilai;
        $data->nipp = $request->nipp;
        $data->nisp = $request->nisp;
        $data->nilai = $request->nilai;
        $data->kategori_nilai = $request->kategori_nilai;
        $data->wiraga = $request->wiraga;
        $data->wirama = $request->wirama;
        $data->wirasa = $request->wirasa;
        $data->keterangan = $request->keterangan;
        $data->save();
        return redirect('/nilai')->with('sucess','Data Berhasil Tersimpan');
    }
    public function edit($kode_nilai)
    {
        $data = Nilai::find($kode_nilai);
        return view('nilai.edit', compact('data'));
    }
    public function update(Request $request, $kode_nilai){

        $data= Nilai::find($kode_nilai);
        $data->nipp = $request->nipp;
        $data->nisp = $request->nisp;
        $data->nilai = $request->nilai;
        $data->kategori_nilai = $request->kategori_nilai;
        $data->wiraga = $request->wiraga;
        $data->wirama = $request->wirama;
        $data->wirasa = $request->wirasa;
        $data->keterangan = $request->keterangan;
        $data->update();
        return redirect('/nilai')->with('sucess','Data Berhasil Diubah');
    }
    public function destroy($kode_nilai)
    {
        $data = Nilai::find($kode_nilai);
        $data->delete();
        return redirect('/nilai')->with('sucess','Data Berhasil Dihapus');    
    }
    public function exportExcelNilai(){
        return Excel::download(new exportExcelBarang, 'DocumentNilai.xlsx');
    }
    public function pdfNilai(){
        $data = Nilai::all();
        return view('nilai.pdfNilai', ['dataNilai' => $data]);
    }
     //Function untuk Nilai print
     public function print($kode_nilai)
     {
         $data = Nilai::find($kode_nilai);
         $pdf = PDF::loadview('nilai.print', compact('data'))->setPaper('a4', 'potrait');
         return $pdf->stream('Nilai-'.$data->kode_nilai.'-'.$data->nama.'.pdf');
         
        
        }
}
