<?php

namespace App\Http\Controllers;
use App\Models\ScrollingEffectComponent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ScrollingEffectComponentController extends Controller
{
    // READ (List)
    public function index()
    {
        $scrolling = ScrollingEffectComponent::first();
        $hasData = !is_null($scrolling);
        return view('admin.scrolling.index', compact('scrolling','hasData'));
    }

    // CREATE (Form)
    public function create()
    {
        return view('scrolling.create');
    }

    // STORE
    public function store(Request $request)
    {
        $data = $request->validate([
            'image'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
            'video'       => 'nullable|file|mimes:mp4,mov,avi,webm|max:51200', // 50MB
            'alt_text'    => 'nullable|string',
            'description' => 'nullable|string',
        ]);

        // Image upload
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('scrolling/images', 'public');
        }

        // Video upload
        if ($request->hasFile('video')) {
            $data['video'] = $request->file('video')->store('scrolling/videos', 'public');
        }

        ScrollingEffectComponent::create($data);

        return redirect()
            ->route('scrolling.index')
            ->with('success', 'Created successfully');
    }

    // EDIT
    public function edit($id)
    {
        $item = ScrollingEffectComponent::findOrFail($id);
        return view('scrolling.edit', compact('item'));
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $item = ScrollingEffectComponent::findOrFail($id);

        $data = $request->validate([
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
            'alt_text' => 'nullable|string',
            'description' => 'nullable|string',
            'video' => 'nullable|string',
        ]);

        // ✅ Image update logic
        if ($request->hasFile('image')) {

            // delete old image
            if ($item->image && Storage::disk('public')->exists($item->image)) {
                Storage::disk('public')->delete($item->image);
            }
            if ($request->hasFile('image')) {
                $data['image'] = $request->file('image')->store('scrolling', 'public');
            }


            // store new image
            $data['image'] = $request->file('image')->store('scrolling', 'public');
        }

        $item->update($data);

        return redirect()
            ->route('scrolling.index')
            ->with('success', 'Updated successfully');
    }

    // DELETE
//    public function destroy($id)
//    {
//        ScrollingEffectComponent::delete($id);
//        return redirect()->route('scrolling.index')->with('success','Deleted');
//    }
}
