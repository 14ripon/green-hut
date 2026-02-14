<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\OthersPageHero;
use App\Models\ScrollingEffectComponent;
use Illuminate\Http\Request;

class LandownerController extends Controller
{
    public function landowner(){
        $otherspagehero = OthersPageHero::where('id', 9)->where('status', 1)->first();
        $scrolling = ScrollingEffectComponent::first();
        return view('frontend.landowner', compact('otherspagehero', 'scrolling'));
    }

}
