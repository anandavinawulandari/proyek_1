<?php

namespace App\Http\Controllers;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class SiswaController extends Controller
{
    public function __construct(){
        $this->middleware('guru')->only('index','destroy');;
    }

    public function index(){
        $data = Siswa::all();
        return view('siswa.index', ['dataSiswa' => $data]);
    }

    public function index2(){
        $data = Siswa::all();
        return view('siswa.index2', ['dataSiswa' => $data]);


    }
    public function create()
    {
        return view('siswa.create');
    }
    public function store(Request $request)
    {
        $data = new Siswa;
        $data->nis = $request->nis;
        $data->nama_siswa = $request->nama_siswa;
        $data->jk = $request->jk;
        $data->asal_sekolah = $request->asal_sekolah;
        $data->jurusan = $request->jurusan;
        $data->hp = $request->hp;
        $data->alamat = $request->alamat;
        $data->email = $request->email;
        $data->save();
        return redirect('/siswa');
    }
    public function pdfSiswa(){
        $data = Siswa::all();
        return view('siswa.pdfSiswa', ['dataSiswa' => $data]);
    }
}
