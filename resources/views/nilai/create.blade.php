@extends('layouts.master')
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
            <h4>Submit Nilai</h4>
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

            <form action="{{route('nilai.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label>NIP Pengajar <span class="text-danger">*</span></label>
                    <input class="form-control" type="options" name="nipp" id="nipp" value = "200085675479" />
                <div class="form-group">
                    <label>NIS <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="nisp" id="nisp" />
                </div>
                    <div class="form-group">
                    <label>Nilai <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="nilai" id="nilai" />
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
                    <input class="form-control" type="text" name="wiraga" id="wiraga" />
                </div>
                <div class="form-group">
                    <label>Aspek Wirama <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="wirama" id="wirama" />
                </div>
                <div class="form-group">
                    <label>Aspek Wirasa <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="wirasa" id="wirasa" />
                </div>
                <div class="form-group">
                    <label>Keterangan <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="keterangan" id="keterangan" />
                </div>
                <br>
                <div><button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{route('nilai.index')}}" class="btn btn-success">Kembali</a></div>
            </form>
        </div></div></div>
@endsection