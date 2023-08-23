<?php

namespace App\Services;


class LogoService {

    public function fileToLogo($filename){
        $ext = last(explode('.', $filename));
        if(empty($ext)) return "-";
        return $this->extension($ext);
    }

    private function extension($ext){
        if(in_array($ext, ['jpg','jpeg','png'])) return '<img src="gambar paten disini" alt=""> File Absensi';
        if(in_array($ext, ['pdf',])) return '<img src="https://cdn4.iconfinder.com/data/icons/logos-and-brands/512/27_Pdf_File_Type_Adobe_logo_logos-512.png" width="90px" height="90px" alt=""> File Absensi';
        $data = explode('pdf', $ext);
        // dd($data);
       
            return ""  ;
            
    }
}
