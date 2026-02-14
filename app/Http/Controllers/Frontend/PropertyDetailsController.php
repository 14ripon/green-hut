<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyDetailsController extends Controller
{
    public function show(Property $property)
    {
        if (!in_array($property->status, [1,2,3,4])) {
            abort(404);
        }
        $property->load(['location', 'categories', 'media']);
        $relatedProperties = Property::with(['location', 'media'])
            ->where('id', '!=', $property->id)
            ->whereIn('status', [1,2,3,4])
            ->orderBy('id', 'desc')
            ->get();

        return view(
            'frontend.property-details',
            compact('property', 'relatedProperties')
        );
    }

}
