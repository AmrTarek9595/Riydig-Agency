<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    protected $fillable = [
        'title_en',
        'title_ar',
        'quotation_en',
        'quotation_ar',
        'body_en',
        'body_ar',
        'image_en',
        'image_ar'

  
      ];
      protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];
}
