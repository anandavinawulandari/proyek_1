
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
                    <h4>Halaman Nilai Siswa</h4>
                    <a href="{{route('nilai.create')}}" class="btn btn-success pull-right">+Submit Nilai</a>
                <a href="{{route('pdfNilai')}}" class="btn btn-secondary pull-right" target="_blank">Unduh</a>
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
                                <th style="width:5%">Nilai</th>
                                <th style="width:2%">Kategori Nilai</th>
                                <th style="width:2%">Aspek Wiraga</th>
                                <th style="width:2%">Aspek Wirama</th>
                                <th style="width:2%">Aspek Wirasa</th>
                                <th style="width:10%">Keterangan</th>
                                <th style="width:10%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataNilai as $data)
                            <tr>
                                <td> {{ $loop->iteration }}</td>
                                <td> {{ $data->nisp }}</td>
                                 <td> {{ $data->siswa->nama_siswa ?? '' }}</td>
                                 <td> {{ $data->siswa->asal_sekolah ?? '' }}</td>
                                 <td> {{ $data->siswa->jurusan ?? '' }}</td>
                                 <td> {{ $data->nilai }}</td>
                                 <td> {{ $data->kategori_nilai }}</td>
                                 <td> {{ $data->wiraga }}</td>
                                 <td> {{ $data->wirama }}</td>
                                 <td> {{ $data->wirasa }}</td>
                                 <td> {{ $data->keterangan }}</td>

                                                                                         <td> 
                                <form action="{{ route('nilai.destroy', $data->kode_nilai)}}" method="post">@csrf
                                
                                <button class="btn btn-danger" onClick="return confirm('Yakin Hapus Data?')">Delete</button>  
                                <a href="{{ route('nilai.edit', $data->kode_nilai)}}" class="btn btn-warning">Edit</a>
    
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
$('#table-nilai').DataTable();
});

</script>

@endpush

