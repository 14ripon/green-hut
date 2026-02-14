<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::latest()->get();
        return view('admin.testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'title' => 'nullable',
            'video_url' => 'nullable|url',
            'testimonial_subject' => 'nullable',
            'testimonial_description' => 'nullable',
            'rating' => 'nullable|integer|min:1|max:5',
            'status' => 'required',
            'thumbnail' => 'nullable|image',
        ]);

        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = $request->file('thumbnail')->store('testimonials', 'public');
        }

        Testimonial::create($data);

        return redirect()->route('testimonials.index')
            ->with('success', 'Testimonial added successfully');
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
    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $data = $request->validate([
            'name' => 'required',
            'title' => 'nullable',
            'video_url' => 'nullable|url',
            'testimonial_subject' => 'nullable',
            'testimonial_description' => 'nullable',
            'rating' => 'nullable|integer|min:1|max:5',
            'thumbnail' => 'nullable|image',
        ]);

        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = $request->file('thumbnail')->store('testimonials', 'public');
        }

        $testimonial->update($data);

        return redirect()->route('testimonials.index')
            ->with('success', 'Testimonial updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        // ✅ Delete thumbnail image if exists
        if ($testimonial->thumbnail && Storage::disk('public')->exists($testimonial->thumbnail)) {
            Storage::disk('public')->delete($testimonial->thumbnail);
        }

        // ✅ Delete database record
        $testimonial->delete();

        return redirect()->route('testimonials.index')
            ->with('success', 'Testimonial deleted successfully');
    }


    public function updateStatus(Request $request, $id)
    {
        $testimonial = Testimonial::findOrFail($id);

        $testimonial->status = $testimonial->status == 1 ? 0 : 1;
        $testimonial->save();

        return response()->json([
            'success' => true,
            'status'  => $testimonial->status
        ]);
    }
}
