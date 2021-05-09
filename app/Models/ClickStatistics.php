<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClickStatistics extends Model
{
    protected $fillable = [
        'clicks',
        'banner_id'
    ];
}
