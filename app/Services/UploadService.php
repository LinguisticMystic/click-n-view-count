<?php

namespace App\Services;

use App\Models\Image;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;

class UploadService
{
    const BANNER_SIZES = [
        1 => [800, 500],
        2 => [240, 368],
        3 => [240, 150],
        4 => [240, 150],
        5 => [240, 150]
    ];

    public function execute(Request $request): void
    {
        $originalFileName = $request->file('file')->getClientOriginalName();
        $uniqueFileName = uniqid() . time() . '.' . $request->file('file')->getClientOriginalExtension();

        $path = public_path('storage/files/images/' . $uniqueFileName);
        (new ImageManager)
            ->make($request->file('file')
            ->getRealPath())
            ->fit(self::BANNER_SIZES[$request->banner][0], self::BANNER_SIZES[$request->banner][1])
            ->save($path);

        $storedFileName = pathinfo($path)['basename'];

        Image::create([
            'file_path' => $storedFileName,
            'original_file_name' => $originalFileName,
            'url' => $request->url,
            'url_target' => $request->redirect,
            'banner_id' => $request->banner
        ]);
    }

}