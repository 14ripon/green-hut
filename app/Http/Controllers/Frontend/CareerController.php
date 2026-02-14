<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\OthersPageHero;
use Illuminate\Http\Request;
use App\Models\Career;

class CareerController extends Controller
{
    public function career(){
        $otherspagehero = OthersPageHero::where('id', 7)->where('status', 1)->first();
        $careers = Career::latest()->get();
        return view('frontend.career', compact('otherspagehero','careers'));
    }
}
