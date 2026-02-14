<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\MeetingSection;
use App\Models\OfficeContact;
use App\Models\OthersPageHero;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){
        $otherspagehero = OthersPageHero::where('id', 8)->where('status', 1)->first();
        $meeting_content = MeetingSection::first();
        $contacts = OfficeContact::where('status', 1)->latest()->get();
        return view('frontend.contact', compact('meeting_content','contacts','otherspagehero'));
    }
}
