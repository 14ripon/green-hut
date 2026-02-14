<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\OthersPageHero;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog(){
        $otherspagehero = OthersPageHero::where('id', 4)->where('status', 1)->first();
        return view('frontend.blog', compact('otherspagehero'));
    }
}
