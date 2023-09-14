<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comix extends Model
{
    use HasFactory;

    protected $casts = [
        'artists' => 'json',
        'writers' => 'json',
    ];
}
