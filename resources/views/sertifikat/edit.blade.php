@extends('layouts.master')
@section('title', 'Sanggar Kilisuci')
@section('content')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h4>Edit Sertifikat</h4>
            <br>
            <form action="{{route('sertifikat.update', $data->id_sertif)}}" method="POST">
            @csrf
                <div class="form-group">
                    <label>Nomor Sertifikat<span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="nomor_sertifikat" id="nomor_sertifikat" value="{{$data->nomor_sertifikat}}"/>
                </div>
                <div class="form-group">
                    <label>NIS<span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="nisp" id="nisp" value="{{$data->nisp}}"/>
                </div>
                <div class="form-group">
                    <label>Keterangan<span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="keterangan" id="keterangan" value="{{$data->keterangan}}"/>
                </div>
                <br>
                <div><button type="submit" class="btn btn-success">Ubah</button>
                <a href="{{route('sertifikat.index')}}" class="btn btn-danger">Kembali</a></div>
            </form>
        </div>
    </div>
</div>
@endsection
