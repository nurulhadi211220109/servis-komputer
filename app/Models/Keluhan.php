<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluhan extends Model
{
    use HasFactory;

    protected $table = 'keluhan';

    protected $fillable = [
        'customer_id',
        'deskripsi',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
