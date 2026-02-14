<?php

namespace App\Http\Controllers;
use App\Models\PropertyMedia;
use App\Models\Property;
use Illuminate\Support\Facades\Storage;

class PropertyMediaController extends Controller
{

    public function editMedia(Property $property)
    {
        $property->load('media');

        return view('admin.properties.media_edit', compact('property'));
    }

    public function destroy(PropertyMedia $media)
    {
        // delete file
        if (Storage::disk('public')->exists($media->image)) {
            Storage::disk('public')->delete($media->image);
        }

        // delete db row
        $media->delete();

        return back()->with('success', 'Image deleted successfully');
    }
}
