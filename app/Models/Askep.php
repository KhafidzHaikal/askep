<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Askep extends Model
{
    use HasFactory;

    protected $fillable = [
        'diagnosas_id', 'tanggal', 'alamat', 'users_id', 'data'
    ];

    protected $guarded = [
        'id', 'timestamps'
    ];

    protected $dates = ['tanggal'];

    public function getTanggalAttribute()
    {
        return Carbon::parse($this->attributes['tanggal'])->translatedFormat('d F Y');
    }

    public function diagnosas()
    {
        return $this->belongsTo(Diagnosa::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
