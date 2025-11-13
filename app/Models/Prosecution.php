<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Prosecution extends Model
{
    use HasFactory, HasSlug;

    protected $table = 'prosecutions';

    protected $fillable = [
        'name',
        'slug',
        'created_by',
        'updated_by',
    ];


    //################################## Start Slug
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
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
}