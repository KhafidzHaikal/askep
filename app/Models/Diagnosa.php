<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnosa extends Model
{
    use HasFactory;

    protected $fillable = [
        'kelompoks_id', 'kode_diagnosa', 'nama_diagnosa', 'deskripsi_diagnosa', 'kode_slki', 'nama_slki', 'deskripsi_slki', 'kode_siki', 'nama_siki', 'deskripsi_siki', 'observasi', 'terapeutik', 'edukasi'
    ];

    protected $guarded = [
        'id', 'timestamps'
    ];

    public function kelompoks()
    {
        return $this->belongsTo(Kelompok::class);
    }

    public function nocs()
    {
        return $this->hasMany(Noc::class);
    }

    public function askeps()
    {
        return $this->hasMany(Askep::class);
    }
}
