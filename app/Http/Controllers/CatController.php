<?php

namespace App\Http\Controllers;

use App\Http\Requests\CatRequest;
use App\Models\Cat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $type = Cat::getCatType();
        $cats = Cat::where('type', $type)->get();
        return view('page-cats', compact('type', 'cats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cats.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CatRequest $request)
    {
        $pic_path = null;
        if ($request->hasFile('pic')) {
            $pic_path = $request->file('pic')->storeAs(
                'pics/' . $request->type . 's',
                $request->file('pic')->getClientOriginalName(),
            );
        }
        $avatar_path = null;
        if ($request->hasFile('avatar')) {
            $avatar_path = $request->file('avatar')->storeAs(
                'avatars/' . $request->type . 's',
                $request->file('avatar')->getClientOriginalName(),
            );
        }
        Cat::create([
            'user_id' => auth()->id(),
            'name' => $request->name,
            'type' => $request->type,
            'color' => $request->color,
            'generation' => $request->generation,
            'description' => $request->description,
            'avatar' => $avatar_path,
            'pic' => $pic_path,
        ]);
        return redirect()->back()->with('success', 'Cat created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cat  $cat
     * @return \Illuminate\Http\Response
     */
    public function show(Cat $cat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cat  $cat
     * @return \Illuminate\Http\Response
     */
    public function edit(Cat $cat)
    {
        return view('cats.edit', compact('cat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cat  $cat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cat $cat)
    {
        if ($request->hasFile('avatar')) {
            Storage::delete($cat->avatar); // delete old
        }
        if ($request->hasFile('pic')) {
            Storage::delete($cat->pic); // delete old
        }
        $cat->update($request->all());
        if ($request->hasFile('avatar')) {
            $path = $request->file('avatar')->storeAs(
                'avatars/' . $request->type . 's',
                $request->file('avatar')->getClientOriginalName(),
            );
            $cat->avatar = $path;
            $cat->save();
        }
        if ($request->hasFile('pic')) {
            $path = $request->file('pic')->storeAs(
                'pics/' . $request->type . 's',
                $request->file('pic')->getClientOriginalName(),
            );
            $cat->pic = $path;
            $cat->save();
        }
        return redirect('/' . $cat->type . 's');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cat  $cat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cat $cat)
    {
        Storage::delete($cat->pic);
        $cat->delete();
        return redirect()->back();
    }
}
