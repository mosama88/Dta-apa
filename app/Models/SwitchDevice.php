<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SwitchDevice extends Model
{
    use HasFactory;

    protected $table = 'switch_devices';

    protected $fillable = [
        'name',
    ];
}
