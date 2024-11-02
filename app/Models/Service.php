<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name_ar',
        'name_en',
        'desc_ar',
        'desc_en',
        'icon',
        'slug',
        'images'
        // 'status',
    ];
    protected $appends = ['icon_path'];

    protected $casts = [
        'images' => 'array',
    ];

    public function getNameAttribute()
    {
        return $this['name_' . app()->getLocale()];
    }

    public function getDescAttribute()
    {
        return $this['desc_' . app()->getLocale()];
    }

    public function getIconPathAttribute()
    {
        return asset('storage/' . $this->icon);
    }

    public function branches()
    {
        return $this->belongsToMany(Branch::class, 'branch_service');
    }
}
