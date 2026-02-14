<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ChairmanMessages;
use App\Models\OthersPageHero;
use App\Models\Team;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    // Our Team Page
    public function ourTeam(){
//        $teams = Team::with('social')->latest()->get();
        $teams = Team::with('social')->where('status', 1)->orderBy('id', 'asc')->get();
        $otherspagehero = OthersPageHero::where('id', 1)->where('status', 1)->first();
        return view('frontend.about.our-team', compact('teams','otherspagehero'));
    }

    // Privacy Policy Page
    public function privacyPolicy(){
        $otherspagehero = OthersPageHero::where('id', 2)->where('status', 1)->first();
        return view('frontend.about.privacy-policy', compact('otherspagehero'));
    }

    // Chairmans Message
    public function chairmansMessage(){
        $otherspagehero = OthersPageHero::where('id', 3)->where('status', 1)->first();
        $chairman= ChairmanMessages::where('id',1)->where('status', 1)->first();

        return view('frontend.about.chairmans-message', compact('otherspagehero','chairman'));
    }
}
