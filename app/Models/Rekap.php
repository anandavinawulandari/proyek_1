<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekap extends Model
{
    protected $table = 'rekap';
    protected $primaryKey = 'id_rekap';
    protected $filable = ['id_rekap','nisp', 'ket_sakit', 'ket_izin', 'ket_alfa', 'kode_nilai'];


    public function siswa(){
        return $this->belongsTo(Siswa::class, 'nisp');
    }
    public function rekap(){
        return $this->hasMany(Rekap::class);

        return $this->belongsTo(Rekap::class, 'id_rekapp');
        }
}

