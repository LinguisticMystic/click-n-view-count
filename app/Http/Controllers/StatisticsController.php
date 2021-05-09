<?php

namespace App\Http\Controllers;

use App\Models\ClickStatistics;
use App\Models\ViewStatistics;
use App\Services\GetClickStatisticsService;
use App\Services\GetViewStatisticsService;
use Illuminate\Http\Request;
use Illuminate\View\View;

class StatisticsController extends Controller
{
    private $getClickStatisticsService;
    private $getViewStatisticsService;

    public function __construct(
        GetClickStatisticsService $getClickStatisticsService,
        GetViewStatisticsService $getViewStatisticsService
    )
    {
        $this->getClickStatisticsService = $getClickStatisticsService;
        $this->getViewStatisticsService = $getViewStatisticsService;
    }

    public function main(): View
    {
        $clickStats = $this->getClickStatisticsService->execute();
        $viewStats = $this->getViewStatisticsService->execute();

        return view('statistics', [
            'clickStatistics' => $clickStats,
            'viewStatistics' => $viewStats
        ]);
    }

    public function addClick(Request $request): void
    {
        if ($request->ajax()) {

            $data = [
                'banner_id' => $request->bannerId,
                'clicks' => $request->clicks
            ];

            ClickStatistics::create($data);
        }
    }

    public function addView(Request $request): void
    {
        if ($request->ajax()) {

            $data = [
                'banner_id' => $request->banner_id,
                'views' => $request->views
            ];

            ViewStatistics::create($data);
        }
    }

}
