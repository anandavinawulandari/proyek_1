<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sertifikat-{{ $data->nomor_sertifikat }}-{{ $data->siswa->nama_siswa ?? ""}}</title>
    <link rel="icon" type="image/png" sizes="16x16" href="/img/users/1.jpg">
</head>
<body style="font-family:'Arial',sans-serif;">
    <p style="margin-top:0pt; margin-left:30.4pt; margin-bottom:0pt; text-align:center; line-height:150%;"><span style="height:0pt; text-align:left; display:block; position:absolute; z-index:1;"><img src="{{('img/lokow.png')}}" width="170" height="150" alt="A picture containing text, container

    Description automatically generated" style="margin: 0 0 0 auto; text-align: right; display: block; "></span></p>
    <p style="margin: 0 0 0 113.4pt; text-align: center; display: block; "><strong>SANGGAR TARI KILISUCI</strong></p>
    <p style="margin-top:0pt; margin-left:300.4pt; margin-bottom:0pt; text-align:center; line-height:150%;"><span style="margin-top: 40pt; height:0pt; text-align:left; display:block; position:absolute; z-index:-1;"><img src="{{('img/logout.png')}}" width="350" height="419" style="opacity:0.2;filter:alpha(opacity=20)" onmouseover="this.style.opacity=5;this.filters.alpha.opacity=110" onmouseout="this.style.opacity=0.7;this.filters.alpha.opacity=80" alt="A picture containing text

    Description automatically generated" style="margin: 0 0 0 auto; text-align: right; display: block; "></span></p>
    <p style="margin: 0 0 0 113.4pt; text-align: center; display: block; ">Jl. Pahlawan Kusuma Bangsa No. 41 &nbsp; Pare&nbsp; Telp. 085855357182<br>e-mail: sanggarkilisuci@gmail.com<br>PARE 64212</p>
    <p style="margin-top:0pt; margin-left:141.75pt; margin-bottom:0pt; text-align:center;"><strong>&nbsp;</strong></p>
    <p style="margin-top:0pt; margin-left:100.4pt; margin-bottom:0pt; text-align:center; font-size:20pt;"><strong><u>SERTIFIKAT</u></strong></p>
    <p style="margin-top:0pt; margin-left:100.4pt; margin-bottom:0pt; text-align:center; font-size:11pt;">Nomor : {{ $data->nomor_sertifikat }}</p>
    <p style="margin-top:0pt; margin-left:100.4pt; margin-bottom:0pt; text-align:center; font-size:11pt;">&nbsp;</p>
    <p style="margin-top:0pt; margin-left:141.75pt; margin-bottom:0pt; text-align:center; font-size:11pt;">&nbsp;</p>
    <table cellpadding="0" cellspacing="0" style="margin-right:9pt; margin-left:9pt; border-collapse:collapse; float:left;">
        <tbody>
            <tr>
                <td style="width:187.65pt; padding-right:5.4pt; padding-left:220.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:150%;">NAMA</p>
                </td>
                <td style="width:17.55pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:150%;">:</p>
                </td>
                <td style="width:265.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%;">{{ $data->siswa->nama_siswa ?? "" }}</p>
                </td>
            </tr>
            <tr>
                <td style="width:187.65pt; padding-right:5.4pt; padding-left:220.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:150%;">NIS</p>
                </td>
                <td style="width:17.55pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:150%;">:</p>
                </td>
                <td style="width:265.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:150%;">{{ $data->nisp}}</p>
                </td>
            </tr>
            <tr>
                <td style="width:187.65pt; padding-right:5.4pt; padding-left:220.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:150%;">JURUSAN</p>
                </td>
                <td style="width:17.55pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:150%;">:</p>
                </td>
                <td style="width:265.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:150%;">{{ $data->siswa->jurusan ?? "" }}</p>
                </td>
            </tr>
            <tr>
                <td style="width:187.65pt; padding-right:5.4pt; padding-left:220.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:150%;">INSTANSI</p>
                </td>
                <td style="width:17.55pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:150%;">:</p>
                </td>
                <td style="width:265.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:150%;">{{ $data->siswa->asal_sekolah ?? ""}}</p>
                </td>
            </tr>
        </tbody>
    </table>
    <p style="margin-top:0pt; margin-left:100.4pt; margin-bottom:0pt; text-align:left; line-height:150%;">&nbsp;</p>
    <p style="margin-top:0pt; margin-left:100.4pt; margin-bottom:0pt; text-align:left; line-height:150%;">&nbsp;</p>
    <p style="margin-top:0pt; margin-left:100.4pt; margin-bottom:0pt; text-align:left; line-height:150%;">&nbsp;</p>
    <p style="margin-top:0pt; margin-left:100.4pt; margin-bottom:0pt; text-align:left; line-height:150%;">&nbsp;</p>
    <p style="margin-top:0pt; margin-left:100.4pt; margin-bottom:0pt; text-align:left; line-height:150%;">&nbsp;</p>
    <p style="margin-top:0pt; margin-left:100.4pt; margin-bottom:0pt; text-align:left; line-height:150%;">&nbsp;</p>
    <p style="margin-top:0pt; margin-left:100.4pt; margin-bottom:0pt; text-align:left; line-height:150%;">&nbsp;</p>
    <p style="margin-top:0pt; margin-left:100.4pt; margin-bottom:0pt; text-align:left; line-height:150%;">Telah mengikuti kegiatan pelatihan Sanggar Tari Kilisuci pada tanggal 31 Agustus 2022 dengan kompetensi Tari Kontemporer&nbsp; capaian kategori &ldquo; {{ $data->keterangan }} &rdquo;.</p>
    <div style="margin-left: 70%">
        <span style="text-align: center;">
            <p style="margin-top:0pt; margin-bottom:0pt; text-align:left; line-height:150%;">&nbsp;</p>
            <p style="margin-top:0pt; margin-bottom:0pt; text-align:left; line-height:150%;">&nbsp;</p>
            <p style='margin:0cm; text-align:center;font-size:16px;font-family:"Arial",sans-serif;'>
                Pare,
                <?php
                $now = \Carbon\Carbon::now('Asia/Jakarta');
                echo $now->locale('id')->isoFormat('D MMMM Y');
                ?>
            </p>
            <p style='margin:0cm; text-align:center;font-size:16px;font-family:"Arial",sans-serif;'>Kepala Sanggar Tari</p>
            <p style='margin:0cm; text-align:center;font-size:16px;font-family:"Arial",sans-serif;'>Kilisuci</p>
            <p style='margin:0cm; text-align:center;font-size:16px;font-family:"Arial",sans-serif;'>&nbsp;</p>
            <p style='margin:0cm;text-align:center;font-size:16px;font-family:"Arial",sans-serif;'>&nbsp;</p>
            <p style='margin:0cm;text-align:center;font-size:16px;font-family:"Arial",sans-serif;'>&nbsp;</p>
            <p style='margin:0cm;text-align:center;font-size:16px;font-family:"Arial",sans-serif;'>&nbsp;</p>
            <p style='margin:0cm; text-align:center;font-size:16px;font-family:"Arial",sans-serif;'><strong><u>Alisa Cahyani, S.Pd.</u></strong></p>
            <!-- <p style="margin: 0cm; text-align: center; font-size: 16px; font-family: Arial, sans-serif;">Pembina Utama Muda</p>
            <p style="margin: 0cm; text-align: center; font-size: 16px; font-family: Arial, sans-serif;">NIP. 19680511 199403 2 009</p> -->
            <p style="margin-top:0pt; margin-bottom:0pt; text-align:left; line-height:150%;">&nbsp;</p>
        </span>
    </div>
</body>
</html>
