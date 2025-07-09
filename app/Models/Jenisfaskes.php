<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenisfaskes extends Model
{
    use HasFactory;

    protected $table = 'jenisfaskes';
    protected $primaryKey = 'id';
    protected $fillable = ['nama_jenis'];

    public function faskes()
    {
        return $this->hasMany(Faskes::class, 'jenis_id');
    }
}

