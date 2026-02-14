<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::with('social')->latest()->get();
        return view('admin.team.index', compact('teams'));
    }

    public function create()
    {
        return view('admin.team.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:150',
            'title' => 'nullable|string|max:150',
            'image' => 'nullable|image',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->image->store('teams', 'public');
        }

        $team = Team::create([
            'name' => $request->name,
            'title' => $request->title,
            'image' => $imagePath,
            'alt_text' => $request->alt_text,
            'status' => $request->status ?? 1,
        ]);

        $team->social()->create([
            'facebook' => $request->facebook,
            'linkedin' => $request->linkedin,
            'whats_app' => $request->whats_app,
            'phone' => $request->phone,
            'status' => $request->status ?? 1,
        ]);

        return redirect()->route('teams.index')->with('success','Team created');
    }

    public function edit($id)
    {
        $team = Team::with('social')->findOrFail($id);
        return view('admin.team.edit', compact('team'));
    }

    public function update(Request $request, $id)
    {
        $team = Team::findOrFail($id);

        // update basic fields
        $team->update([
            'name'     => $request->name,
            'title'    => $request->title,
            'alt_text' => $request->alt_text,
            'status'   => $request->status,
        ]);

        // ✅ image replace + delete old
        if ($request->hasFile('image')) {

            // delete old image if exists
            if ($team->image && Storage::disk('public')->exists($team->image)) {
                Storage::disk('public')->delete($team->image);
            }

            // upload new image
            $team->image = $request->image->store('teams', 'public');
            $team->save();
        }

        // update or create social links
        $team->social()->updateOrCreate(
            ['team_id' => $team->id],
            $request->only('facebook', 'linkedin', 'whats_app', 'phone', 'status')
        );

        return redirect()->route('teams.index')
            ->with('success', 'Team updated successfully');
    }


    public function destroy($id)
    {
        $team = Team::findOrFail($id);

        // delete image if exists
        if ($team->image && Storage::disk('public')->exists($team->image)) {
            Storage::disk('public')->delete($team->image);
        }

        // delete team (social auto delete via cascade)
        $team->delete();

        return redirect()->route('teams.index')
            ->with('success', 'Team deleted successfully');
    }

    public function toggleStatus(Request $request)
    {
        $team = Team::findOrFail($request->id);

        $team->status = !$team->status;
        $team->save();

        return response()->json([
            'success' => true,
            'status'  => $team->status
        ]);
    }



}
