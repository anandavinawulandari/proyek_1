<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;

    protected $table = 'nilai';
    protected $primaryKey = 'kode_nilai';
    protected $fillable = ['kode_nilai', 'nilai', 'kategori_nilai', 'keterangan'];

    public function pengajar(){
    	return $this->belongsTo(Pengajar::class, 'nipp');
    }
    public function siswa(){
    	return $this->belongsTo(Siswa::class, 'nisp');
    }
        public function rekap(){
    	return $this->belongsTo(Rekap::class, 'id_rekapp');
    }

    public function nilai(){
        return $this->hasMany(Nilai::class);
    }
}
