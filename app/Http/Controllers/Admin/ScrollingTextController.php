<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ScrollingText;
use Illuminate\Http\Request;

class ScrollingTextController extends Controller
{
    public function index()
    {
        $texts = ScrollingText::latest()->get();
        return view('admin.scrolling_text.index', compact('texts'));
    }

    public function create()
    {
        return view('admin.scrolling_text.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'scrolling_text' => 'required|string|max:255',
        ]);

        ScrollingText::create([
            'scrolling_text' => $request->scrolling_text,
            'status' => $request->status ?? 1,
        ]);

        return redirect()->route('scrolling-text.index')->with('success', 'Created successfully');
    }

    public function edit($id)
    {
        $text = ScrollingText::findOrFail($id);
        return view('admin.scrolling_text.edit', compact('text'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'scrolling_text' => 'required|string|max:255',
        ]);

        $text = ScrollingText::findOrFail($id);
        $text->update([
            'scrolling_text' => $request->scrolling_text,
            'status' => $request->status,
        ]);

        return redirect()->route('scrolling-text.index')->with('success', 'Updated successfully');
    }

    public function destroy($id)
    {
        ScrollingText::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Deleted successfully');
    }

    public function toggleStatus($id)
    {
        $text = ScrollingText::findOrFail($id);
        $text->status = !$text->status;
        $text->save();

        return response()->json(['status' => $text->status]);
    }
}
