<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sertifikat extends Model
{
    protected $table = 'sertifikat';
    protected $primaryKey = 'id_sertif';
    protected $filable = ['nomor_sertifikat','nisp', 'keterangan'];


    public function siswa(){
        return $this->belongsTo(Siswa::class, 'nisp');
    }
    public function sertifikat(){
        return $this->hasMany(Sertifikat::class);
    }
}
