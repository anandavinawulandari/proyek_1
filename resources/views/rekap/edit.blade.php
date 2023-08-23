@extends('layouts.master')
@section('title', 'Sanggar Kilisuci')
@section('content')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h4>Edit Rekapitulasi</h4>
            <br>
            <form action="{{route('rekap.update', $data->id_rekap)}}" method="POST">
            @csrf
                <div class="form-group">
                    <label>NIS<span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="nisp" id="nisp" value="{{$data->nisp}}"/>
                </div>
                <div class="form-group">
                    <label>Jumlah Keterangan Sakit<span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="ket_sakit" id="ket_sakit" value="{{$data->ket_sakit}}"/>
                </div>
                <div class="form-group">
                    <label>Jumlah Keterangan Izin<span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="ket_izin" id="ket_izin" value="{{$data->ket_izin}}"/>
                </div>
                <div class="form-group">
                    <label>Jumlah Keterangan Alfa<span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="ket_alfa" id="ket_alfa" value="{{$data->ket_alfa}}"/>
                </div>
                <br>
                <div><button type="submit" class="btn btn-success">Ubah</button>
                <a href="{{route('rekap.index')}}" class="btn btn-danger">Kembali</a></div>
            </form>
        </div>
    </div>
</div>
@endsection
