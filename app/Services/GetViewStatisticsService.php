<?php

namespace App\Services;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class GetViewStatisticsService
{
    public function execute(): Collection
    {
        return DB::table('view_statistics')
            ->select('banner_id', 'views')
            ->get()
            ->sortBy('banner_id')
            ->groupBy('banner_id');
    }
}