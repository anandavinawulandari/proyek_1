@extends('layouts.master')
@section('title', 'SANGGAR TARI KILISUCI')
@section('content')
<br>
<div class="container">
    <div class="row"></div>
    <div class="col-md-6">
        <h4>Form Absensi</h4>
        <br>
        <form action="{{route('absensi.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="from-group">
                <label>NIS <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="nis" id="nis"/>
            </div>
            <div class="from-group">
                <label>Nama <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="nama" id="nama"/>
            </div>
            <div class="form-group">
                    <label>Asal Sekolah <span class="text-danger">*</span></label>
  
                    <select class="form-control" type="options" name="asal_sekolah" id="asal_sekolah" />
                    <option value="SMK YP 17 Pare">SMK YP 17 Pare</option>
                                <option value="SMAN 1 Wates">SMAN 1 Wates</option>
                                <option value="SMAN 1 Pare">SMAN 1 Pare</option>
                </select>
                </div>
            

            <div class="from-group">
                <label>Jurusan <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="jurusan" jurusan="jurusan"/>
            </div>
            <div class="from-group">
                <label>Tanggal Absensi <span class="text-danger">*</span></label>
                <input class="form-control" type="date" name="tanggal_absensi" id="tanggal_absensi"/>
            </div>
            <div class="from-group">
                <label>Keterangan <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="keterangan_absensi" id="keterangan_absensi"/>
            </div>
            <div class="form-group">
                    <label>Kategori Absensi <span class="text-danger">*</span></label>
  
                    <select class="form-control" type="options" name="kategori_absensi" id="kategori_absensi" />
                                <option value="S">S</option>
                                <option value="I">I</option>
                                <option value="A">A</option>
                                <option value="Hadir">Hadir</option>
                </select>
                </div>

                <div class="from-group">
                <label>Bukti Kehadiran/Izin <span class="text-danger">*</span></label>
                <input class="form-control" type="file" name="dokumen" id="dokumen"/>
            </div>
            <br>
            <br>
            <div><button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{route('absensi.index')}}" class="btn btn-success">Kembali</a></div>
        </form>
    </div>
</div>
</div>
@endsection