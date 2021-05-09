<?php

namespace App\Http\Controllers;

use App\Services\UploadService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UploadController extends Controller
{
    private $uploadService;

    public function __construct(UploadService $uploadService)
    {
        $this->uploadService = $uploadService;
    }

    public function main(): View
    {
        return view('upload');
    }

    public function upload(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'file' => 'required|mimes:jpeg,png,gif',
            'url' => 'required|url',
            'redirect' => 'required|in:_blank,_self',
            'banner' => 'required|integer'
        ]);

        if ($request->hasFile('file')) {
            $this->uploadService->execute($request);
            return back()->with('message', 'Image added successfully!');
        } else {
            return back()->with('message', 'Something went wrong.');
        }

    }
}
