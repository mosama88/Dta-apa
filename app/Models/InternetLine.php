<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InternetLine extends Model
{
    use HasFactory;

    protected $table = 'internet_lines';

    protected $fillable = [
        'name',
    ];
}
