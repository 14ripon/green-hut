<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Career;

class CareerAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $careers = Career::latest()->get();
        return view('admin.career.index', compact('careers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.career.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'status' => 'required',
            'priority' => 'required',
        ]);

        Career::create($request->all());

        return redirect()->route('career-admin.index')->with('success','Created successfully');
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
    public function edit($id)
    {
        $career = Career::findOrFail($id);
        return view('admin.career.edit', compact('career'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Career $career_admin)
    {
        // ✅ validation
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|in:open,in_progress,pending,closed',
            'priority' => 'required|in:low,medium,high',
        ]);

        // ✅ update data
        $career_admin->update([
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
            'priority' => $request->priority,
            'assigned_to' => auth()->id(), // optional
        ]);

        // ✅ redirect
        return redirect()
            ->route('career-admin.index')
            ->with('success', 'Career updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Career $career_admin)
    {
        $career_admin->delete();

        return redirect()
            ->route('career-admin.index')
            ->with('success', 'Career deleted successfully');
    }
}
