<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Prosecution extends Model
{
    use HasFactory;

    protected $table = 'prosecutions';

    protected $fillable = [
        'name',
    ];
}
