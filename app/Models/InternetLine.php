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
        'created_by',
        'updated_by',
    ];


    public function createdBy()
    {
        return $this->BelongsTo(Admin::class, 'created_by');
    }

    public function updatedBy()
    {
        return $this->BelongsTo(Admin::class, 'updated_by');
    }
}