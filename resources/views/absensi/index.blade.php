@extends('layouts.master')
@section('title', 'SANGGAR TARI KILISUCI')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>Data Absensi</h2>
                    
                    <a href="{{route('pdfAbsensi')}}" class="btn btn-secondary pull-right" target="_blank">Unduh</a>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered tabel-striped" id="table-absensi">
                        <thead>
                            <tr>
                                <th style="width:5%">No</th>
                                <th style="width:12%">NIS</th>
                                <th style="width:12%">Nama Siswa</th>
                                <th style="width:10%">Asal Sekolah</th>
                                <th style="width:10%">Jurusan</th>
                                <th style="width:12%">Tanggal Absensi</th>
                                <th style="width:15%">Keterangan</th>
                                <th style="width:7%">Kategori</th>
                                <th style="width:90%"><center>Bukti Kehadiran/Izin </center></th>
                                <th style="width:7%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataAbsensi as $data)
                            <tr>
                                <td> {{ $loop->iteration }} </td>
                                <td> {{ $data->nis }} </td>
                                <td> {{ $data->nama }} </td>
                                <td> {{ $data->asal_sekolah }} </td>
                                <td> {{ $data->jurusan }} </td>
                                <td> {{ $data->tanggal_absensi }} </td>
                                <td> {{ $data->keterangan_absensi }} </td>
                                <td> {{ $data->kategori_absensi }} </td>
                                <td>File : <a href="{{ asset('file-upload/'.$data->dokumen) }}">
                                        {!! $logos->fileToLogo($data->dokumen) !!}  {{ $data->dokumen }}
                                    </a> </td>
                                <td>
                                <form action="{{ route('absensi.destroy', $data->id)}}" method="post">@csrf
                                
                                <button class="btn btn-danger" onClick="return confirm('Yakin Hapus Data?')">Delete</button>  
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
$('#table-absensi').DataTable();
});

</script>

@endpush


