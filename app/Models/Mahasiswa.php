<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';
    protected $fillable = ['nama', 'tempat_lahir', 'tgl_lahir', 'jenis_kelamin', 'alamat', 'telp'];

    public function nilai()
    {
        return $this->hasMany(Nilai::class);
    }
}
