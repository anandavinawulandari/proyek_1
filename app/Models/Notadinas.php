<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notadinas extends Model
{
    use HasFactory;

    protected $table = 'notadinas';
    protected $primaryKey = 'kode_nota';
    protected $fillable = ['status', 'no_agenda', 'no_surat', 'tgl_surat', 'perihal', 'no_agenda', 'unit', 'catatan'];


    public function notadinas(){
        return $this->hasMany(Notadinas::class);
    }
    public function laporan(){
        return $this->hasMany(Laporan::class);
    }
}
