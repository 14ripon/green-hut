<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HeroSlider;
use App\Models\OthersPageHero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class OthersPageHeroController extends Controller
{
    public function index()
    {
        $heroes = OthersPageHero::latest()->get();
        return view('admin.others_page_hero.index', compact('heroes'));
    }

    public function create()
    {
        return view('others-page-hero');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'     => 'required|string',
            'sub_title' => 'nullable|string',
            'image'     => 'nullable|image|mimes:jpg,jpeg,png,webp',
            'alt_text'  => 'nullable|string',
            'status'    => 'required|boolean',
        ]);

        $data = $request->only(['title','sub_title','alt_text','status']);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')
                ->store('others_page_hero', 'public');
        }

        OthersPageHero::create($data);
        return redirect()->route('others-page-hero.index')
            ->with('success', 'Hero created successfully');
    }

    public function edit($id)
    {
        $hero = OthersPageHero::findOrFail($id);
        return view('admin.others_page_hero.edit', compact('hero'));
    }

    public function update(Request $request, $id)
    {
        $hero = OthersPageHero::findOrFail($id);

        $request->validate([
            'title'     => 'required|string',
            'sub_title' => 'nullable|string',
            'image'     => 'nullable|image|mimes:jpg,jpeg,png,webp',
            'alt_text'  => 'nullable|string',
        ]);

        $data = $request->only(['title','sub_title','alt_text']);

        if ($request->hasFile('image')) {
            if ($hero->image) {
                Storage::disk('public')->delete($hero->image);
            }

            $data['image'] = $request->file('image')
                ->store('others_page_hero', 'public');
        }

        $hero->update($data);

        return redirect()->route('others-page-hero.index')
            ->with('success', 'Hero updated successfully');
    }

    public function destroy($id)
    {
        $hero = OthersPageHero::findOrFail($id);

        if ($hero->image) {
            Storage::disk('public')->delete($hero->image);
        }

        $hero->delete();

        return back()->with('success', 'Hero deleted');
    }



    public function toggleStatus(OthersPageHero $hero)
    {
        $hero->status = !$hero->status;
        $hero->save();

        return response()->json([
            'success' => true,
            'status'  => $hero->status,
        ]);
    }

}
