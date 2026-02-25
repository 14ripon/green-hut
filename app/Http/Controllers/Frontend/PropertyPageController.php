<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\OthersPageHero;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyPageController extends Controller
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
            'frontend.projects.property-details',
            compact('property', 'relatedProperties')
        );
    }


    public function categorywiseview($status)
{
    
    $properties = Property::with(['location','media'])
        ->where('status', $status)   // changable Status
        ->latest()
        ->get();
        if($status == 2){
            $otherspagehero = OthersPageHero::where('id', 15)->where('status', 1)->first();
            return view('frontend.projects.category', compact('otherspagehero', 'properties'));
        }elseif($status == 3){
            $otherspagehero = OthersPageHero::where('id', 11)->where('status', 1)->first();
            return view('frontend.projects.category', compact('otherspagehero', 'properties'));
        }elseif($status == 4){
            $otherspagehero = OthersPageHero::where('id', 16)->where('status', 1)->first();
            return view('frontend.projects.category', compact('otherspagehero', 'properties'));
        }else{
            return redirect()->route('home')->with('error', 'Page not found');
        }

    
}






    

}
