@extends('layouts.master')
@section('title', 'Aplikasi Si Magang')
@section('content')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h4>Rekap Absensi</h4>
            <br>
            <form action="{{route('rekap.store')}}" method="POST">
                @csrf
                
                <div class="form-group">
                    <label>NISP <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="nisp" id="nisp" />
                <div class="form-group">
                    <label>Keterangan Sakit <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="ket_sakit" id="ket_sakit" />
                </div>
                <div class="form-group">
                    <label>Keterangan Izin <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="ket_izin" id="ket_izin" />
                </div>
                <div class="form-group">
                    <label>Keterangan Alfa <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="ket_alfa" id="ket_alfa" />
                </div>
                <br>
                <div><button type="submit" class="btn btn-success">Simpan</button>
                <a href="{{route('rekap.index')}}" class="btn btn-danger">Kembali</a></div>
            </form>
        </div>
    </div>
</div>
@endsection
