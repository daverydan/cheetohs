<?php

namespace App\Http\Controllers;

use App\Models\Image;

class ImageController extends Controller
{
    // public function destroy(Image $image)
    public function destroy(Image $image)
    {
        return response()->json($image);
    }
}
