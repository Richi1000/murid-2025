<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Murid extends Model 
{
    use HasFactory;

    protected $fillable = [
        'nim',
        'nama',
        'tanggal_lahir',
        'alamat',
        'no_telepon',
    ];

    public function user() {
    return $this->belongsTo(User::class);
    }

    public function belajar() {
        return $this->hasMany(Belajar::class);
    }

    public function nilai() {
        return $this->hasMany(Nilai::class);
    }

    public function guru() {
        return $this->hasMany(Guru::class);
    }
}
