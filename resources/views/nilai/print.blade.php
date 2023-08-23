<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nilai-{{ $data->nisp }}-{{ $data->siswa->nama_siswa ?? ""}}</title>
    <link rel="icon" type="image/png" sizes="16x16" href="/img/users/1.jpg">
</head>
<div class="container ">
    @if(Session::has('sucess'))
    <div class="alert alert-sucess " role="alert">
        {{Session::get('sucess')}}</div>
        @endif

<body style="font-family:'Arial',sans-serif;">
    <p style="margin-top:0pt; margin-left:30.4pt; margin-bottom:0pt; text-align:center; line-height:150%;"><span style="height:0pt; text-align:left; display:block; position:absolute; z-index:1;"><img src="{{('img/lokow.png')}}" width="170" height="150" alt="A picture containing text, container

    Description automatically generated" style="margin: 0 0 0 auto; text-align: right; display: block; "></span></p>
    <p style="margin: 0 0 0 113.4pt; text-align: center; display: block; "><strong>SANGGAR TARI KILISUCI</strong></p>
    <p style="margin: 0 0 0 113.4pt; text-align: center; display: block; ">Jl. Pahlawan Kusuma Bangsa No. 41 &nbsp; Pare&nbsp; Telp. 085855357182<br>e-mail: sanggarkilisuci@gmail.com<br>PARE 64212</p>
    <p style="margin-top:0pt; margin-left:141.75pt; margin-bottom:0pt; text-align:center;"><strong>&nbsp;</strong></p>
    <p style="margin-top:0pt; margin-left:100.4pt; margin-bottom:0pt; text-align:center; font-size:20pt;"><strong><u>DATA NILAI</u></strong></p>
    <p style="margin-top:0pt; margin-left:100.4pt; margin-bottom:0pt; text-align:center; font-size:11pt;">Kode Nilai : {{ $data->kode_nilai }}</p>
    <p style="margin-top:0pt; margin-left:100.4pt; margin-bottom:0pt; text-align:center; font-size:11pt;">&nbsp;</p>
    <p style="margin-top:0pt; margin-left:141.75pt; margin-bottom:0pt; text-align:center; font-size:11pt;">&nbsp;</p>
    <div class="d-flex flex-column pt-3 mb-3 arsip-header" style="margin-left: 50px">
<p> Nomor Induk Siswa : {{ $data->nisp }}</p>
<p> Nama Siswa : {{ $data->siswa->nama_siswa ?? '' }}</p>
<p> Asal Sekolah : {{ $data->siswa->asal_sekolah ?? '' }} </p>
<p> Jurusan : {{ $data->siswa->jurusan ?? '' }} </p>
<br>
    <table cellpadding="0" cellspacing="0" style="margin-right:9pt; margin-left:9pt; border-collapse:collapse; float:left;">
    <table border="1" >      
    <thead>   
    <tr>
        <th colspan="2">Penilaian</th>
    </tr>       
    <tr>
                                    <td width="100px"  colspan="" >Nilai</td>
                                <td width="300px"> {{ $data->nilai }}</td>
                                </tr>
                                <tr>
                                    <td  width="300px">Kategori Nilai</td>
                                <td width="300px"> {{ $data->kategori_nilai }}</td>
                                </tr>
                                <tr>
                                    <td width="300px">Aspek Wiraga</td>
                                <td width="300px"> {{ $data->wiraga }}
                                </td>
                                </tr>
                                <td width="300px">Aspek Wirama</td>
                                <td width="300px"> {{ $data->wirama }}
                                </td>
                                </tr>
                                <tr>
                                <td width="300px">Aspek Wirasa</td>
                                <td width="300px"> {{ $data->wirasa }}
                                </td>
                                </tr>
                              
            </thead>
            </table>

           
    <br><br>
            <table border="1" >      
    <thead>   
    <tr>
        <th colspan="2">Kehadiran</th>
    </tr>    
  
    <tr>
                                <td width="300px">Sakit</td>
                                <td width="300px"> {{ $data->rekap->ket_sakit ?? '' }}</td>
                                </tr><tr>
                                <td width="300px">Izin</td>
                                <td width="300px"> {{ $data->rekap->ket_izin ?? '' }}</td>
                                </tr>
                                <tr>
                                <td width="300px">Tanpa Keterangan</td>
                                <td width="300px"> {{ $data->rekap->ket_alfa ?? '' }}</td>
                                </tr>
            </thead>
            </table> 
            </tr>
          
            <br><br>
            <table border="1" >      
    <thead>   
    <tr>
        <th colspan="2">Catatan Pengembangan Diri</th>
    </tr>    
    <tr>
                                <td width="300px">Keterangan</td>
                                <td width="300px"> {{ $data->keterangan }}</td>
                                </tr>
            </thead>
            </table> 
            </tr>
            
    </table>
    </table>
    </div>
    
    <div style="margin-left: 70%">
        <span style="text-align: center;">
            <p style="margin-top:0pt; margin-bottom:0pt; text-align:left; line-height:150%;">&nbsp;</p>
            <p style="margin-top:0pt; margin-bottom:0pt; text-align:left; line-height:150%;">&nbsp;</p>
            <p style='margin:0cm; text-align:center;font-size:16px;font-family:"Times",sans-serif;'>
                Pare,
                <?php
                $now = \Carbon\Carbon::now('Asia/Jakarta');
                echo $now->locale('id')->isoFormat('D MMMM Y');
                ?>
            </p>
            <p style='margin:0cm; text-align:center;font-size:16px;font-family:"Times",sans-serif;'>Kepala Sanggar Tari</p>
            <p style='margin:0cm; text-align:center;font-size:16px;font-family:"Times",sans-serif;'>Kilisuci</p>
            <p style='margin:0cm; text-align:center;font-size:16px;font-family:"Times",sans-serif;'>&nbsp;</p>
            <p style='margin:0cm;text-align:center;font-size:16px;font-family:"Times",sans-serif;'>&nbsp;</p>
            <p style='margin:0cm;text-align:center;font-size:16px;font-family:"Arial",sans-serif;'>&nbsp;</p>
            <p style='margin:0cm;text-align:center;font-size:16px;font-family:"Arial",sans-serif;'>&nbsp;</p>
            <p style='margin:0cm; text-align:center;font-size:16px;font-family:"Times",sans-serif;'><strong><u>Alisa Cahyani, S.Pd.</u></strong></p>
            <p style='margin:0cm; text-align:center;font-size:16px;font-family:"Times",sans-serif;'>NIP. 200085675479</p>

            <!-- <p style="margin: 0cm; text-align: center; font-size: 16px; font-family: Arial, sans-serif;">Pembina Utama Muda</p>
            <p style="margin: 0cm; text-align: center; font-size: 16px; font-family: Arial, sans-serif;">NIP. 19680511 199403 2 009</p> -->
            <p style="margin-top:0pt; margin-bottom:0pt; text-align:left; line-height:150%;">&nbsp;</p>
        </span>
    </div>
</body>
</html>
