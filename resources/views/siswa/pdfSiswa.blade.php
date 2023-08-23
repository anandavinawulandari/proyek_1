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
        <h4 align="center">Data Anggota <b>Sanggar Kilisuci</b></h4>
            <table class="table1">
                <thead>
                    <tr>
                    <th style="width:5%">No</th>
                                <th style="width:12%">NIS</th>
                                <th style="width:12%">Nama Siswa</th>
                                <th style="width:12%">Jenis Kelamin</th>
                                <th style="width:12%">Asal Sekolah</th>
                                <th style="width:12%">Jurusan</th>
                                <th style="width:12%">Nomor Hp</th>
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
                                 <td> {{ $data->jurusan}}</td>
                                 <td> {{ $data->hp }}</td>
                                 <td> {{ $data->alamat }}</td>
                                 <td> {{ $data->email }}</td> 
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <script type="text/javascript">
                        window.print();
                    </script>
            </body>
        </html>