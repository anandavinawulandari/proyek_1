<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absensi;
use DataTables;
use App\Http\Controllers\Controller;
use App\Services\LogoService;
use Illuminate\Support\Facades\Auth;
class AbsensiController extends Controller
{
    public function __construct(){
        $this->middleware('guru')->only('index','edit','update','pdfAbsensi','destroy');
    }
    public function __construct1(){
        $this->middleware('siswa');
    }
    public function index(LogoService $logo){
        $data = Absensi::all();
        return view('absensi.index', ['dataAbsensi' => $data, 'logos' => $logo]);
    }

    public function create()
    {
        return view('absensi.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'dokumen' => 'mimes:pdf,image,jpg,jpeg,png',
        ]);
        $data = new Absensi;
        $data->nis = $request->nis;
        $data->nama = $request->nama;
        $data->asal_sekolah = $request->asal_sekolah;
        $data->jurusan = $request->jurusan;
        $data->tanggal_absensi = $request->tanggal_absensi;
        $data->keterangan_absensi = $request->keterangan_absensi;
        $data->kategori_absensi = $request->kategori_absensi;

        $namadokumen = date('YmdHis',time()+60*60*5);
        $file = $request->dokumen;
        $ext = $file->getClientOriginalExtension();
        $nama_file = $namadokumen.$ext;
        $file->move('file-upload',$nama_file);
        $data->dokumen = $nama_file;
        
        $data->save();
        return redirect('/absensi');
    }
    public function edit($id)
    {
        $data = Absensi::find($id);
        return view('absensi.edit', compact('data'));
    }
    public function update(Request $request,$id)
    {
        $data = Absensi::find($id);
        $data->nis = $request->nis;
        $data->nama = $request->nama;
        $data->asal_sekolah = $request->asal_sekolah;
        $data->jurusan = $request->jurusan;
        $data->tanggal_absensi = $request->tanggal_absensi;
        $data->keterangan_absensi = $request->keterangan_absensi;
        $data->kategori_absensi = $request->kategori_absensi;
        
        $namadokumen = date('YmdHis',time()+60*60*5);
        $file = $request->dokumen;
        $ext = $file->getClientOriginalExtension();
        $nama_file = $namadokumen.$ext;
        $file->move('file-upload',$nama_file);
        $data->dokumen = $nama_file;

        $data->update();
        return redirect('/absensi');
    }
    public function destroy($id)
    {
        $data = Absensi::find($id);
        $data->delete();
        return redirect('/absensi');
    }
    public function pdfAbsensi(){
        $data = Absensi::all();
        return view('absensi.pdfAbsensi', ['dataAbsensi' => $data]);
    }
}