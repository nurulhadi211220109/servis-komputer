<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = 'pegawai';

    protected $fillable = [
        'nama',
        'jabatan',
        'alamat', // Add the 'alamat' field to the $fillable array
        'jenis_kelamin', // Add the 'jenis_kelamin' field to the $fillable array
        'status', // Add the 'status' field to the $fillable array
    ];

    public function barang()
    {
        return $this->hasMany(Barang::class);
    }
}
