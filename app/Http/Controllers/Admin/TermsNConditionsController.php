<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;

class TermsNConditionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $page_content = Page::findOrFail($id);
        return view('admin.terms.edit', compact('page_content'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'page_name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'content' => 'required',
        ]);

        $page_content = Page::findOrFail($id);

        $page_content->update([
            'page_name' => $request->page_name,
            'title' => $request->title,
            'content' => $request->content, //error this line but why?
        ]);

    
        return redirect()->route('admin-terms.edit',$id)
                        ->with('success', 'Page updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
