<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faskes extends Model
{
    use HasFactory;

    protected $table = 'faskes';
    protected $primaryKey = 'faskes_id';
    protected $fillable = [
        'nama_faskes', 
        'alamat', 
        'jenis_id', 
        'kategori_id', 
        'kabkota_id'
    ];

    public function jenis()
    {
        return $this->belongsTo(Jenisfaskes::class, 'jenis_id');
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    public function kabkota()
    {
        return $this->belongsTo(Kabkota::class, 'kabkota_id');
    }

    public function pasien()
    {
        return $this->hasMany(Pasien::class, 'faskes_id');
    }
}
