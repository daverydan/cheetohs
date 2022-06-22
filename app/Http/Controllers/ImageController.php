<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Litter;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function destroy(Image $image)
    {
        if ($image->imageable_type == 'App\Models\Litter') {
            $path = '/litters/' . $image->imageable_id . '/' . $image->image;
        }
        Storage::delete($path);
        $image->delete();

        if ($image->imageable_type == 'App\Models\Litter') {
            $litter = Litter::where('id', $image->imageable_id)->first();
            if (!count($litter->images)) {
                // Delete Directory
                Storage::deleteDirectory('/litters/' . $image->imageable_id);
            }
        }

        return response()->json('success');
    }
}
