<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ChairmanMessages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ChairmanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chairmen = ChairmanMessages::first();
        return view('admin.chairman.index', compact('chairmen'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $chairman = ChairmanMessages::findOrFail($id);

        $data = $request->except('photo'); // photo বাদ দিয়ে data নিলাম

        if ($request->hasFile('photo')) {

            // ✅ 1. Old photo delete (if exists)
            if ($chairman->photo && Storage::disk('public')->exists($chairman->photo)) {
                Storage::disk('public')->delete($chairman->photo);
            }

            // ✅ 2. New photo upload
            $data['photo'] = $request->file('photo')
                ->store('chairman', 'public');
        }

        // ✅ 3. Update data
        $chairman->update($data);

        return redirect()->route('chairman.index')
            ->with('success', 'Chairman updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
