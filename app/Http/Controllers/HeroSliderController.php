<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HeroSlider;
use Illuminate\Support\Facades\Storage;

class HeroSliderController extends Controller
{
    public function index()
    {
        $sliders = HeroSlider::latest()->get();
        return view('admin.hero-sliders.index', compact('sliders'));
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'title'     => 'required|string|max:255',
            'image'     => 'required|image|mimes:jpg,jpeg,png,webp',
            'alt_text'  => 'nullable|string|max:255',
            'is_active' => 'boolean',
        ]);

        $data['image'] = $request->file('image')
            ->store('hero-sliders', 'public');

        HeroSlider::create($data);

        return redirect()->route('slider-index')
            ->with('success', 'Hero slider created');
    }



    public function edit($id)
    {
        $slider = HeroSlider::findOrFail($id);

        return view('admin.hero-sliders.edit', compact('slider'));
    }

    public function update(Request $request, $id)
    {


        $slider = HeroSlider::findOrFail($id);

        $data = $request->validate([
            'title'     => 'required|string|max:255',
            'alt_text'  => 'nullable|string|max:255',
            'image'     => 'nullable|image|mimes:jpg,jpeg,png,webp',
        ]);

        // update image if new image uploaded
        if ($request->hasFile('image')) {

            // delete old image
            if ($slider->image && Storage::disk('public')->exists($slider->image)) {
                Storage::disk('public')->delete($slider->image);
            }

            // store new image
            $data['image'] = $request->file('image')
                ->store('hero-sliders', 'public');
        }

        // checkbox fix
        $data['is_active'] = $request->has('is_active');

        // update record
        $slider->update($data);

        return redirect()
            ->back()
            ->with('success', 'Item updated successfully');
    }



    public function destroy($id)
    {
        $slider = HeroSlider::findOrFail($id);

        // delete image
        if ($slider->image) {
            Storage::disk('public')->delete($slider->image);
        }

        // delete record
        $slider->delete();

        return redirect()
            ->back()
            ->with('success', 'Item deleted successfully');
    }


    public function toggleStatus($id)
    {
        $slider = HeroSlider::findOrFail($id);

        $slider->is_active = !$slider->is_active;
        $slider->save();

        return response()->json([
            'status' => $slider->is_active,
            'text'   => $slider->is_active ? 'Active' : 'Inactive',
        ]);
    }



}
