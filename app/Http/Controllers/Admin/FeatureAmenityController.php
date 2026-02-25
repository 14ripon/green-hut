<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FeatureAmenity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;


class FeatureAmenityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = FeatureAmenity::latest()->get();
        
        return view('admin.feature_amenity.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.feature_amenity.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name'   => [
                    'required',
                    'string',
                    'max:255',
                    Rule::unique((new FeatureAmenity)->getTable(), 'name')
                ],
                'icon'   => 'required|mimes:png,jpg,jpeg,svg|max:2048',
            ],
            [
                'name.required' => 'Feature name is required.',
                'name.unique'   => 'This feature already exists.',
                'icon.required' => 'Icon image is required.',
            ]
        );

        // Image store
        $path = $request->file('icon')
            ->store('features_amenity', 'public');


        FeatureAmenity::create([
            'name'   => $request->name,
            'icon'   => $path,
            'status' => $request->status,
        ]);

        return redirect()
            ->route('features-amenities.index')
            ->with('success', 'Feature created successfully.');
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
    public function edit(string $id)
    {
        $item = FeatureAmenity::findOrFail($id);

        return view('admin.feature_amenity.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FeatureAmenity $features_amenity)
    {
        $request->validate([
            'name' => 'nullable|string|max:255',
            'icon' => 'nullable|file|mimes:png,jpg,jpeg,svg|max:2048',
        ]);

        $path = $features_amenity->icon; // old image

        if ($request->hasFile('icon')) {

            // delete old image if exists
            if ($features_amenity->icon && 
                Storage::disk('public')->exists($features_amenity->icon)) {

                Storage::disk('public')->delete($features_amenity->icon);
            }

            // store new image
            $path = $request->file('icon')
                    ->store('features_amenity', 'public');
        }

        $features_amenity->update([
            'name' => $request->name,
            'icon' => $path,
            'status' => $request->status,
        ]);

        return redirect()
            ->route('features-amenities.index')
            ->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FeatureAmenity $features_amenity)
    {
        if ($features_amenity->icon &&
            Storage::disk('public')->exists($features_amenity->icon)) {

            Storage::disk('public')->delete($features_amenity->icon);
        }

        $features_amenity->delete();

        return redirect()
            ->route('features-amenities.index')
            ->with('success', 'Deleted Successfully');
    }


}
