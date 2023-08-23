@extends('layouts.master2')
@section('title', 'SANGGAR TARI KILISUCI')
@section('content')
<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
                    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>           
</head>
<br>
<div class="container">
    <div class="row"></div>
        <div class="col-md-6">
            <h4>Form Pendaftaran</h4>
            <br>
            @if ($errors->any())
            <div class="alert alert danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{route('siswa.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label>NIS <span class="text-danger">*</span></label>
                    <input class="form-control" type="options" name="nis" id="nis" />
                <div class="form-group">
                    <label>Nama Siswa <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="nama_siswa" id="nama_siswa" />
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin <span class="text-danger">*</span></label>
  
                    <select class="form-control" type="options" name="jk" id="jk" />
                    <option value="P">P</option>
                                <option value="L">L</option>
                              
                </select>
                </div>

                <div class="form-group">
                    <label>Asal Sekolah <span class="text-danger">*</span></label>
  
                    <select class="form-control" type="options" name="asal_sekolah" id="asal_sekolah" />
                    <option value="SMK YP 17 Pare">SMK YP 17 Pare</option>
                                <option value="SMAN 1 Pare">SMAN 1 Pare</option>
                                <option value="SMAN 1 Wates">SMAN 1 Wates</option>
                              
                </select>
                </div>

                <div class="form-group">
                    <label>Jurusan <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="jurusan" id="jurusan" />
                </div>
                <div class="form-group">
                    <label>Nomor Hp <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="hp" id="hp" />
                </div>
                <div class="form-group">
                    <label>Alamat <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="alamat" id="alamat" />
                </div>
                <div class="form-group">
                    <label>Email <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="email" id="email" />
                </div>
                <br>
                <div><button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{url('/welcome')}}" class="btn btn-success">Kembali</a></div>
            </form>
        </div></div></div>
@endsection