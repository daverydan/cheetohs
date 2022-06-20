<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Image extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;

    public function imageable()
    {
        return $this->morphTo();
    }

    public static function saveImage($img, $path, $parentId, $parentModel)
    {
        // Create img name
        $imgName = Carbon::now()->timestamp . "_" . Str::random(8) . "_" . $img->getClientOriginalName();
        // Save to directory
        $img->storeAs(
            $path,
            $imgName,
        );
        // Save to DB
        Image::create([
            'image' => $imgName,
            'imageable_id' => $parentId,
            'imageable_type' => $parentModel,
        ]);
    }
}
