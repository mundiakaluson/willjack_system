<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facade\Storage;

class ImageController extends Controller
{
    public function show($imageName)
    {
        $path = storage_path("/images/{$imageName}");

        if (!Storage::exists("/images/{$imageName}"))

            abort(404);
        }

        return response()->file($path);
    }
}
