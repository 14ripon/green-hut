<?php

namespace App\Http\Controllers\Admin;

use App\Models\ExploreSlider;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;




class ExploreSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = ExploreSlider::orderBy('sort_order')->get();
        return view('admin.explore_sliders.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.explore_sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

//        if (!$request->hasFile('media')) {
//            dd('Media file not received');
//        }
        $request->validate([
            'title' => 'nullable|string|max:255',
            'media' => 'required|file',
            'status' => 'nullable|boolean',
        ]);

        $path = $request->file('media')
            ->store('explore_sliders', 'public');

        ExploreSlider::create([
            'title' => $request->title,
            'media_type' => $request->media_type,
            'media_path' => $path,
            'status' => $request->status ?? 1,
            'sort_order' => $request->sort_order ?? 0,
        ]);

        return redirect()
            ->route('explore-sliders.index')
            ->with('success', 'Slider created successfully');
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
    public function edit($id)
    {
        $exploreSlider = ExploreSlider::findOrFail($id);

        return view('admin.explore_sliders.edit', compact('exploreSlider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ExploreSlider $exploreSlider)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'media_type' => 'required|in:image,video',
            'media' => 'nullable|file',
            'sort_order' => 'nullable|integer',
            'status' => 'nullable|boolean',
        ]);

        if ($request->hasFile('media')) {
            Storage::disk('public')->delete($exploreSlider->media_path);
            $exploreSlider->media_path =
                $request->file('media')->store('explore_sliders', 'public');
        }

        $exploreSlider->update([
            'title' => $request->title,
            'media_type' => $request->media_type,
            'status' => $request->status ?? 1,
            'sort_order' => $request->sort_order ?? 0,
        ]);

        return redirect()
            ->route('explore-sliders.index')
            ->with('success', 'Slider updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ExploreSlider $exploreSlider)
    {
        Storage::disk('public')->delete($exploreSlider->media_path);
        $exploreSlider->delete();

        return back()->with('success', 'Slider deleted');
    }
}
