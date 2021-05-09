<?php

namespace App\Services;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class GetClickStatisticsService
{
    public function execute(): Collection
    {
        return DB::table('click_statistics')
            ->select('banner_id', 'clicks')
            ->get()
            ->sortBy('banner_id')
            ->groupBy('banner_id');
    }

}