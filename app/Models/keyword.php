<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class keyword extends Model
{
    protected $fillable = [
        'blog_id',
        'keyword',
      ];
}
