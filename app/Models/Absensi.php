<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;

    protected $table = 'absensi';
    protected $primarykey = 'id';
    protected $filable = ['nis', 'nama', 'asal_sekolah', 'jurusan', 'tanggal_absensi', 'keterangan_absensi', 'kategori_absensi','dokumen'];

public function absensi(){
    return $this->belongsTo(Absensi::class, 'id');
    }
}