<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'file_path',
        'original_file_name',
        'url',
        'url_target',
        'banner_id'
    ];
}
