<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    protected $fillable = [
        'title_en',
        'quotation_en',
        'body_en',
        
        'title_ar',
        'quotation_ar',
        'body_ar',
        'image_name',
        'image_base64'
    ];


}
