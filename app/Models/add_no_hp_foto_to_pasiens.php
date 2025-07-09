<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class add_no_hp_foto_to_pasiens extends Model
{
    use HasFactory;
    protected $table = 'pasiens';
    protected $fillable = [
        'nama',
        'jenis_kelamin',
        'no_hp',
        'alamat',
        'faskes_id',
        'foto',
        ];
}
