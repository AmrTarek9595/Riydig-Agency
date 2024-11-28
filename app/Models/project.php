<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    protected $fillable = [
        'project_title',//english
        'image_name',
        'description',//description_english
        'type',
        'title_ar',
        'description_ar',

    ];

}
