<?php

namespace App\Models;

use App\Models\RegulationCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Regulations extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name_en', 'name_ar', 'pdf', 'category_id'];
    protected $appends = ['pdf_path'];

    public function category()
    {
        return $this->belongsTo(RegulationCategory::class, 'category_id');
    } // end regulations




    public function getPdfPathAttribute()
    {
        return asset('storage/' . $this->pdf);
    }

    public function getNameAttribute()
    {
        return $this->attributes['name_' . app()->getLocale()];
    } // end getNameAttribute



}
