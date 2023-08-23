@extends('layouts.master')
@section('title', 'SANGGAR TARI KILISUCI')
@section('content')
<br>
<div class="container">
    <div class="row"></div>
        <div class="col-md-6">
            <h4>Edit Nilai</h4>
            <br>
            <form action="{{route('nilai.update', $data->kode_nilai)}}" method="POST"> 
            @csrf
            <div class="form-group">
                    <label>NIP Pengajar <span class="text-danger">*</span></label>
                    <input class="form-control" type="options" name="nipp" id="nipp" value = "200085675479" />
    
                </div>
                  <div class="form-group">
                    <label>NIS <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="nisp" id="nisp" value="{{$data->nisp}}">
                </div>
                    <div class="form-group">
                    <label>Nama Siswa <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="nisp" id="nisp" value="{{$data->siswa->nama_siswa ?? ''}}"/>
                </div>
                <div class="form-group">
                    <label>Asal Sekolah <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="asal_sekolah" id="asal_sekolah" value="{{$data->siswa->asal_sekolah ?? ''}}"/>
                </div>
                <div class="form-group">
                    <label>Jurusan <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="jurusan" id="jurusan" value="{{$data->siswa->jurusan ?? ''}}"/>
                </div>
                <div class="form-group">
                    <label>Nilai <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="nilai" id="nilai" value="{{$data->nilai}}"/>
                </div>
                <div class="form-group">
                    <label>Kategori Nilai <span class="text-danger">*</span></label>
                    <select class="form-control" type="options" name="kategori_nilai" id="kategori_nilai" />
                    <option value="A+">A+</option>
                                <option value="A">A</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B">B</option>
                                <option value="B-">B-</option>
                                <option value="C+">C+</option>
                                <option value="C">C</option>
                                <option value="C-">C-</option>
                                <option value="D+">D+</option>
                                <option value="D">D</option>
                                <option value="D-">D-</option>
                                <option value="E">E+</option>
                </select>
                </div>
                <div class="form-group">
                    <label>Aspek Wiraga <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="wiraga" id="wiraga" value="{{$data->wiraga}}"/>
                </div>
                <div class="form-group">
                    <label>Aspek Wirama <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="wirama" id="wirama" value="{{$data->wirama}}"/>
                </div>
                <div class="form-group">
                    <label>Aspek Wirasa <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="wirasa" id="wirasa" value="{{$data->wirasa}}"/>
                </div>
                <div class="form-group">
                    <label>Keterangan <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="keterangan" id="keterangan" value="{{$data->keterangan}}" />
                </div>
                <br>
                <div><button type="submit" class="btn btn-primary">Update</button>
                <a href="{{route('nilai.index')}}" class="btn btn-success">Kembali</a></div>
            </form>
        </div></div></div>
@endsection