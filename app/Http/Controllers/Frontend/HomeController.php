<?php

namespace App\Http\Controllers\Frontend;
use App\Models\ExploreSlider;
use App\Models\ScrollingEffectComponent;

use App\Http\Controllers\Controller;
use App\Models\HeroSlider;
use App\Models\ScrollingText;
use App\Models\Testimonial;
use App\Models\Property;
use App\Models\MeetingSection;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $sliders = HeroSlider::where('is_active', 1)->latest()->get();
        $scrolling = ScrollingEffectComponent::first();
        $tickers = ScrollingText::latest()->get();
//        $properties = Property::with(['location', 'categories', 'media'])->where('status', 1)->latest()->get();
        $properties = Property::with(['location','media'])
            ->whereIn('status', [1,2,3,4]) // Active, Upcoming, Ongoing
            ->latest()->get();
        $properties_four_view = Property::with(['location','media'])
            ->whereIn('status', [1,2,3,4]) // Active, Upcoming, Ongoing
            ->latest()->limit(4)->get();
        $testimonials = Testimonial::where('status', 1)->latest()->get();

        Property::where('status', Property::STATUS_UPCOMING)->get();

        $explores_sliders = ExploreSlider::where('status', 1)->latest()->get();
        $meeting_content = MeetingSection::first();



        return view('frontend.index' , compact('sliders', 'scrolling','tickers','properties','properties_four_view','testimonials','explores_sliders','meeting_content'));

    }
}
