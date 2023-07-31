<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

    protected $fillable = [
        'site_id',
        'address',
        'users',
        'cross-feeder',
        'tma',
        'interference',
    ];
}
