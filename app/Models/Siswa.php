<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Siswa extends Model
{
    use HasFactory;
    
    protected $table = 'Siswa';
    protected $primaryKey = 'nis';
    protected $fillable = ['nis','nama_siswa', 'jk', 'asal_sekolah', 'jurusan', 'hp', 'email'];

    public function siswa(){
        return $this->belongsTo(Siswa::class, 'nisp');
        }
}


