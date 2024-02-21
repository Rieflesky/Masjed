<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Khairat extends Model
{
    use HasFactory;

    protected $fillable = [
        'Masjid',
        'Bayar Khairat'
    ];
}
