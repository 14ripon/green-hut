<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\Location;
use App\Models\Category;
use App\Models\PropertyMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $properties = Property::with(['location','categories','media'])->latest()->get();
        return view('admin.properties.index', compact('properties'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $locations  = Location::where('status', 1)->get();
        $categories = Category::all();
        return view('admin.properties.create', compact('locations', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'location_id' => 'required',
            'categories' => 'required|array',
        ]);

        $property = Property::create($request->except('categories'));

        $property->categories()->sync($request->categories);

        if ($request->hasFile('images')) {
            foreach ($request->images as $image) {
                $path = $image->store('properties','public');

                PropertyMedia::create([
                    'property_id' => $property->id,
                    'image' => $path
                ]);
            }
        }

        return redirect()->route('properties.index')->with('success','Property Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Property $property)
    {
        $property->load(['categories', 'media']);

        $locations  = Location::where('status', 1)->get();
        $categories = Category::all();

        return view('admin.properties.edit', compact(
            'property',
            'locations',
            'categories'
        ));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Property $property)
    {
        $request->validate([
            'title' => 'required',
            'location_id' => 'required|exists:locations,id',
        ]);

        // 1️⃣ Update main property
        $property->update(
            $request->except('categories', 'images')
        );

        // 2️⃣ Update categories (pivot)
        if ($request->has('categories')) {
            $property->categories()->sync($request->categories);
        }

        // 3️⃣ Add new images (old images remain)
        if ($request->hasFile('images')) {
            foreach ($request->images as $image) {
                $path = $image->store('properties', 'public');

                PropertyMedia::create([
                    'property_id' => $property->id,
                    'image' => $path,
                ]);
            }
        }

        return redirect()
            ->route('properties.index')
            ->with('success', 'Property updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Property $property)
    {
        // 1️⃣ Delete images from storage
        foreach ($property->media as $media) {
            if (Storage::disk('public')->exists($media->image)) {
                Storage::disk('public')->delete($media->image);
            }
        }

        // 2️⃣ Delete media records
        $property->media()->delete();

        // 3️⃣ Delete property (pivot + FK auto handle)
        $property->delete();

        return back()->with('success', 'Property and images deleted successfully');
    }
}
