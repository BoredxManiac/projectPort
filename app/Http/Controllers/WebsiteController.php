<?php

namespace App\Http\Controllers;

use App\Models\Website;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $websites = Website::all();
        return view('websites')->with('websites', $websites);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $validate = $request->validate([
            'title' => 'required|string|max:20',
            'description' => 'required|string|max:400',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:2000'
        ]);

        $imageName = time() . '.' . $request->image->extension();

        $request->image->storeAs('images', $imageName, 'public');

        $newProject = new Website;
        $newProject->title = $validate['title'];
        $newProject->description = $validate['description'];
        $newProject->image = $imageName;
        $newProject->save();

        return redirect()->route('websites');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $websites = Website::findorfail($id);
        return view('websites')->with('websites', $websites);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('projects.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = $request->validate([
            'title' => 'required|string|max:20',
            'description' => 'required|string|max:400',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:2000'
        ]);

        $newProject = new Website;

        $newProject->title = $validate['title'];
        $newProject->description = $validate['description'];

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();

            $request->image->storeAs('images', $imageName, 'public');

            $newProject->image = $imageName;
        }

        $newProject->save();
        return redirect()->route('websites');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Website::destroy($id);
        return redirect()->route('home');
    }
}
