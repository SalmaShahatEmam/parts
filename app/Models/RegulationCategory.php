<?php

namespace App\Models;

use App\Models\Regulations;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RegulationCategory extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['name_en', 'name_ar'];

    public function getNameAttribute()
    {
        return $this->attributes['name_' . app()->getLocale()];
    } // end getTitleAttribut

    public function regulations()
    {
        return $this->hasMany(Regulations::class, 'category_id');
    } // end regulations




}
