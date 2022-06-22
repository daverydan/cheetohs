<?php

namespace App\Http\Controllers;

use App\Http\Requests\LitterRequest;
use App\Models\Cat;
use App\Models\Image;
use App\Models\Litter;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

// use Illuminate\Support\Str;

class LitterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $litters = Litter::with(['mom', 'dad'])->latest()->get();
        // dd($litters);
        return view('page-kittens', compact('litters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $moms = Cat::where('type', 'queen')->get();
        $dads = Cat::where('type', 'king')->get();
        return view('litters.create', compact('moms', 'dads'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LitterRequest $request)
    {
        $mom = Cat::where('id', $request->mom_id)->first()->name;
        $dad = Cat::where('id', $request->dad_id)->first()->name;
        $birthday = Carbon::create($request->birthday);

        $litter = Litter::create([
            'user_id' => auth()->id(),
            'mom_id' => $request->mom_id,
            'dad_id' => $request->dad_id,
            'name' => $mom . ' + ' . $dad,
            'birthday' => $birthday,
        ]);

        if ($request->hasFile('pics')) {
            $path = '/litters/' . $litter->id;
            foreach ($request->file('pics') as $pic) {
                Image::saveImage($pic, $path, $litter->id, 'App\Models\Litter');
            }
        }

        return redirect()->back();
    }

    public function getLitterPics($id)
    {
        $pics = Image::where('imageable_id', $id)->where('imageable_type', 'App\Models\Litter')->get();
        return response()->json(compact('pics'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Litter  $litter
     * @return \Illuminate\Http\Response
     */
    public function show(Litter $litter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Litter  $litter
     * @return \Illuminate\Http\Response
     */
    public function edit(Litter $litter)
    {
        return view('litters.edit', compact('litter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Litter  $litter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Litter $litter)
    {
        if ($request->hasFile('pics')) {
            $path = '/litters/' . $litter->id;
            foreach ($request->file('pics') as $pic) {
                Image::saveImage($pic, $path, $litter->id, 'App\Models\Litter');
            }
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Litter  $litter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Litter $litter)
    {
        if ($litter->images) {
            foreach ($litter->images as $image) {
                $image->delete();
            }
            Storage::deleteDirectory('/litters/' . $litter->id);
        }
        $litter->delete();
        return redirect()->back();
    }
} // end
