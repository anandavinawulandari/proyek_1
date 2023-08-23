
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
                    <h4>Halaman Rekapitulasi Absensi</h4>
                    <a href="{{route('rekap.create')}}" class="btn btn-success pull-right">+Tambah</a>
            </div>
                <div class="panel-body py-3">
                    <table class="table table-bordered table-striped" id="table-nilai">
                        <thead>
                            <tr>
                            <form method="POST">
                                <th style="width:5%">No</th>
                                <th style="width:12%">NIS</th>
                                <th style="width:12%">Nama Siswa</th>
                                <th style="width:12%">Asal Sekolah</th>
                                <th style="width:12%">Jurusan</th>
                                <th style="width:10%">Jumlah Sakit</th>
                                <th style="width:10%">Jumlah Izin</th>
                                <th style="width:10%">Jumlah Alfa</th>
                                <th style="width:10%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataRekap as $data)
                            <tr>
                                <td> {{ $loop->iteration }}</td>
                                <td> {{ $data->nisp }}</td>
                                 <td> {{ $data->siswa->nama_siswa ?? '' }}</td>
                                 <td> {{ $data->siswa->asal_sekolah ?? '' }}</td>
                                 <td> {{ $data->siswa->jurusan ?? '' }}</td>
                                 <td> {{ $data->ket_sakit }}</td>
                                 <td> {{ $data->ket_izin }}</td>
                                 <td> {{ $data->ket_alfa }}</td>

                                                                                         <td> 
                                <form action="{{ route('rekap.destroy', $data->id_rekap)}}" method="post">@csrf
                                <button class="btn btn-danger" onClick="return confirm('Yakin Hapus Data?')">Delete</button>  
                                <a href="{{ route('rekap.edit', $data->id_rekap)}}" class="btn btn-warning">Edit</a>
    
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
$('#table-rekap').DataTable();
});

</script>

@endpush

