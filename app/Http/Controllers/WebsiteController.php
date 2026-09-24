<?php

namespace App\Http\Controllers;

use App\Models\Website;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = $request->filter;
        if ($filter) {
            $websites = Website::where('filter', $filter)->get();
        } else {
            $websites = Website::all();
        }
        return view('websites', compact('websites'));
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
            'image' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:2000',
            'filter' => 'required|string',
        ]);

        $imageName = time() . '.' . $request->image->extension();

        $request->image->storeAs('images', $imageName, 'public');

        $newProject = new Website;
        $newProject->title = $validate['title'];
        $newProject->description = $validate['description'];
        $newProject->filter = $validate['filter'];
        $newProject->image = $imageName;
        $newProject->save();

        return redirect()->route('websites');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $website = Website::findorfail($id);
        return view('projects.show')->with('website', $website);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $website = Website::findorfail($id);
        return view('projects.edit')->with('website', $website);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = $request->validate([
            'title' => 'required|string|max:20',
            'description' => 'required|string|max:400',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg|max:2000',
            'filter' => 'required|string',
        ]);

        $Project = Website::findorfail($id);
        $Project->update($validate);
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();

            $request->image->storeAs('images', $imageName, 'public');

            $Project->image = $imageName;
        }

        $Project->save();
        return redirect()->route('websites');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( Request $request, Website $website, string $id)
    {
         $website = Website::findOrFail($id);
         $websiteError = $request->confirmation === $website->title;
        if (!$websiteError) {
            return back()->with('error', 'Project name does not match.');
        }
        Website::destroy($id);
        return redirect()->route('websites');
    }
}
