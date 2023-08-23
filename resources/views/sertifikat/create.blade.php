@extends('layouts.master')
@section('title', 'Aplikasi Si Magang')
@section('content')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h4>Tambah Sertifikat</h4>
            <br>
            <form action="{{route('sertifikat.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Nomor Sertifikat <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="nomor_sertifikat" id="nomor_sertifikat" />
                </div>
                <div class="form-group">
                    <label>NIS <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="nisp" id="nisp" />
                <div class="form-group">
                    <label>Keterangan <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="keterangan" id="keterangan" />
                </div>
                <br>
                <div><button type="submit" class="btn btn-success">Simpan</button>
                <a href="{{route('sertifikat.index')}}" class="btn btn-danger">Kembali</a></div>
            </form>
        </div>
    </div>
</div>
@endsection
