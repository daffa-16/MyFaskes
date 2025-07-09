<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $table = 'pasiens';
    protected $primaryKey = 'pasien_id';
    protected $fillable = [
        'nama',
        'jenis_kelamin',
        'no_hp',
        'foto',
        'alamat',
        'faskes_id',
    ];

    public function faskes()
    {
        return $this->belongsTo(Faskes::class, 'faskes_id');
    }
}

