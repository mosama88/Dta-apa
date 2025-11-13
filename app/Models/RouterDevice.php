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