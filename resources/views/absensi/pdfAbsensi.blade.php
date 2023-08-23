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
        <h4 align="center">Laporan Data Absensi</h4>
            <table class="table1">
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
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <script type="text/javascript">
                        window.print();
                    </script>
            </body>
        </html>