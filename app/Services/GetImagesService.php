<?php

namespace App\Services;

use App\Models\Image;

class GetImagesService
{
    public function execute(): array
    {
        $bannerCount = Image::max('banner_id');

        $images = [];

        for ($i = 1; $i <= $bannerCount; $i++) {
            $images[] = Image::where('banner_id', $i)->get();
        }

        return $images;
    }

}