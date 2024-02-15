<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noc extends Model
{
    use HasFactory;

    protected $fillable = [
        'diagnosas_id', 'kode_noc', 'deskripsi_noc'
    ];

    protected $guarded = [
        'id', 'timestamps'
    ];

    public function diagnosas() {
        return $this->belongsTo(Diagnosa::class);
    }
    public function kelompoks() {
        return $this->belongsTo(Kelompok::class);
    }
}
