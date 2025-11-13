<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class InternetLine extends Model
{
    use HasFactory, HasSlug;

    protected $table = 'internet_lines';

    protected $fillable = [
        'prosecution_id',
        'slug',
        'code_line',
        'order_number',
        'internet_speed',
        'type_line',
        'ip_address',
        'mac_address',
        'governorate_id',
        'created_by',
        'updated_by'
    ];

    //################################## Start Slug
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('code_line')
            ->saveSlugsTo('slug')
            ->doNotGenerateSlugsOnUpdate();
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
    //################################## End Slug

    public function createdBy()
    {
        return $this->BelongsTo(Admin::class, 'created_by');
    }

    public function updatedBy()
    {
        return $this->BelongsTo(Admin::class, 'updated_by');
    }

    public function governorate()
    {
        return $this->BelongsTo(Governorate::class, 'governorate_id');
    }
    
    public function prosecution()
    {
        return $this->BelongsTo(Prosecution::class, 'prosecution_id');
    }
}
