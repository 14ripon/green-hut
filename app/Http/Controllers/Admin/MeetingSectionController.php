<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MeetingSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MeetingSectionController extends Controller
{
    public function index()
    {
        $meeting_content = MeetingSection::first();
        $hasData = !is_null($meeting_content);
        return view('admin.meeting_sections.index', compact('meeting_content','hasData'));
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image',
            'bg_image' => 'nullable|image',
            'map_embed' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('meeting', 'public');
        }

        if ($request->hasFile('bg_image')) {
            $data['bg_image'] = $request->file('bg_image')->store('meeting', 'public');
        }

        MeetingSection::create($data);

        return redirect()->route('meeting-sections.index')->with('success','Created successfully');
    }


    public function update(Request $request, MeetingSection $meetingSection)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp',
            'bg_image' => 'nullable|image|mimes:jpg,jpeg,png,webp',
            'map_embed' => 'nullable|string',
        ]);

        /** -------------------------
         *  LEFT IMAGE UPDATE
         * --------------------------*/
        if ($request->hasFile('image')) {

            // Delete old image if exists
            if ($meetingSection->image && Storage::disk('public')->exists($meetingSection->image)) {
                Storage::disk('public')->delete($meetingSection->image);
            }

            // Store new image
            $data['image'] = $request->file('image')->store('meeting', 'public');
        }

        /** -------------------------
         *  BACKGROUND IMAGE UPDATE
         * --------------------------*/
        if ($request->hasFile('bg_image')) {

            // Delete old bg image if exists
            if ($meetingSection->bg_image && Storage::disk('public')->exists($meetingSection->bg_image)) {
                Storage::disk('public')->delete($meetingSection->bg_image);
            }

            // Store new bg image
            $data['bg_image'] = $request->file('bg_image')->store('meeting', 'public');
        }

        // Update DB
        $meetingSection->update($data);

        return redirect()
            ->route('meeting-sections.index')
            ->with('success', 'Updated successfully');
    }


}
