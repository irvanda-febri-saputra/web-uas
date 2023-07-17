<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Matkul extends Model
{
    use HasFactory;

    protected $table = 'matkul';
    protected $fillable = ['kd_matkul', 'nama_matkul', 'sks'];

    public function nilai()
    {
        return $this->hasMany(Nilai::class);
    }
}
