<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelompok extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    protected $guarded = [
        'id', 'timestamps'
    ];

    public function diagnosas() {
        return $this->hasMany(Diagnosa::class);
    }
    public function nocs() {
        return $this->hasMany(Noc::class);
    }
}
