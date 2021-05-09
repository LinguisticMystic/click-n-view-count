<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ViewStatistics extends Model
{
    protected $fillable = [
        'views',
        'banner_id'
    ];
}
