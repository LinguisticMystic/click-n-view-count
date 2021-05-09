<?php

namespace App\Http\Controllers;

use App\Services\GetImagesService;
use Illuminate\View\View;

class HomeController extends Controller
{
    private $getImagesService;

    public function __construct(GetImagesService $getImagesService)
    {
        $this->getImagesService = $getImagesService;
    }

    public function main(): View
    {
        $bannerImages = $this->getImagesService->execute();

        return view('home', [
            'images' => $bannerImages
        ]);
    }
}
