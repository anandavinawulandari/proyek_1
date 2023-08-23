<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajar extends Model
{
    use HasFactory;

    protected $table = 'Pengajar';
    protected $primaryKey = 'nip';
    protected $fillable = ['nip','nama_pengajar', 'jk', 'hp', 'email'];

    public function pengajar(){
        return $this->belongsTo(Pengajar::class, 'nipp');
        }
}
