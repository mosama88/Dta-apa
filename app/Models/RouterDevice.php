<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RouterDevice extends Model
{
    use HasFactory;

    protected $table = 'router_devices';

    protected $fillable = [
        'name',
    ];
}
