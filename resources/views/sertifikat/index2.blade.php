
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
                    <h4>Halaman Sertifikat</h4>
            </div>
                <div class="panel-body py-3">
                    <table class="table table-bordered table-striped" id="table-sertifikat">
                        <thead>
                            <tr>
                            <form method="POST">
                                <th style="width:5%">No</th>
                                <th style="width:12%">Nomor Sertifikat</th>
                                <th style="width:12%">NIS</th>
                                <th style="width:12%">Nama Siswa</th>
                                <th style="width:12%">Asal Sekolah</th>
                                <th style="width:12%">Jurusan</th>
                                <th style="width:10%">Keterangan</th>
                                <th style="width:10%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataSertifikat as $data)
                            <tr>
                                <td> {{ $loop->iteration }}</td>
                                <td> {{ $data->nomor_sertifikat }}</td>
                                <td> {{ $data->nisp }}</td>
                                 <td> {{ $data->siswa->nama_siswa ?? '' }}</td>
                                 <td> {{ $data->siswa->asal_sekolah ?? '' }}</td>
                                 <td> {{ $data->siswa->jurusan ?? '' }}</td>
                                 <td> {{ $data->keterangan }}</td>

                                                                                         <td> 
                                <form action="{{ route('sertifikat.destroy', $data->id_sertif)}}" method="post">@csrf
                                <a href="{{ route('sertifikat.print', $data->id_sertif)}}" class="btn btn-warning" target="__blank">Cetak</a>
    
                            </form> </td>
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
$('#table-sertifikat').DataTable();
});

</script>

@endpush

