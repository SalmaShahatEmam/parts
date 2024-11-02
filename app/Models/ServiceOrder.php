<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_name_ar',
        'service_name_en',
        'is_replay',
        'name',
        'email',
        'phone',
      //  'title_message',
        'message',
        'code'
    ];
}

