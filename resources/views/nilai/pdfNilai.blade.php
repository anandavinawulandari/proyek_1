<html>
    <head>
        <title>Cetak PDF</title>
    </head>
    <body>
        <style type="text/css">
            .table1{
                font-family: sans-serif;
                color:#232323;
                border-collapse: collapse;
            }
            .table1, th, td{
                border: 1px  solid #999;
                padding: 8px 20px;
            }
        </style>
        <h4 align="center">Laporan Nilai Siswa <b>Sanggar Kilisuci</b></h4>
            <table class="table1">
                <thead>
                    <tr>
                    <th style="width:5%">No</th>
                                <th style="width:12%">NIS</th>
                                <th style="width:12%">Nama Siswa</th>
                                <th style="width:12%">Asal Sekolah</th>
                                <th style="width:12%">Jurusan</th>
                                <th style="width:5%">Nilai</th>
                                <th style="width:2%">Kategori Nilai</th>
                                <th style="width:10%">Keterangan</th>
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
                                 <td> {{ $data->keterangan }}</td> 
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <script type="text/javascript">
                        window.print();
                    </script>
            </body>
        </html>