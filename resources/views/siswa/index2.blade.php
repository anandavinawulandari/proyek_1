
@extends('layouts.master')


@section('title','APLIKASI SANGGAR TARI KILISUCI')

        
@section('content')
<br>
<div class="container ">
    @if(Session::has('sucess'))
    <div class="alert alert-sucess " role="alert">
        {{Session::get('sucess')}}</div>
        @endif
      <div class="row ">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading " >
                    <h4>Halaman Data Anggota</h4>
                
                <a href="{{route('pdfSiswa')}}" class="btn btn-secondary pull-right" target="_blank">Unduh</a>
            </div>
                <div class="panel-body py-3">
                    <table class="table table-bordered table-striped" id="table-siswa">
                        <thead>
                            <tr>
                            <form method="POST">
                                <th style="width:5%">No</th>
                                <th style="width:12%">NIS</th>
                                <th style="width:12%">Nama Siswa</th>
                                <th style="width:12%">Jenis Kelamin</th>
                                <th style="width:12%">Asal Sekolah</th>
                                <th style="width:12%">Jurusan</th>
                                <th style="width:12%">Nomor HP</th>
                                <th style="width:12%">Alamat</th>
                                <th style="width:12%">Email</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataSiswa as $data)
                            <tr>
                                <td> {{ $loop->iteration }}</td>
                                <td> {{ $data->nis }}</td>
                                 <td> {{ $data->nama_siswa }}</td>
                                 <td> {{ $data->jk }}</td>
                                 <td> {{ $data->asal_sekolah }}</td>
                                 <td> {{ $data->jurusan }}</td>
                                 <td> {{ $data->hp }}</td>
                                 <td> {{ $data->alamat }}</td>
                                 <td> {{ $data->email }}</td>
                                   
                           
                                    </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    @include('layouts.footer')  
</div>

@stop
@push('scripts')
<script>
$(function() {
$('#table-siswa').DataTable();
});

</script>

@endpush

