<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SwitchDevice extends Model
{
    use HasFactory;

    protected $table = 'switch_devices';

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
