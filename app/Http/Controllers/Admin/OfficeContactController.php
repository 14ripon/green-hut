<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OfficeContact;
use Illuminate\Http\Request;

class OfficeContactController extends Controller
{
    public function index()
    {
        $contacts = OfficeContact::latest()->get();
        return view('admin.office-contact.index', compact('contacts'));
    }

    public function create()
    {
        return view('admin.office-contact.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
        ]);

        OfficeContact::create($request->all());

        return redirect()->route('office-contact.index')
            ->with('success','Contact added');
    }

    public function edit($id)
    {
        $contact = OfficeContact::findOrFail($id);
        return view('admin.office-contact.edit', compact('contact'));
    }

    public function update(Request $request, $id)
    {
        $contact = OfficeContact::findOrFail($id);
        $contact->update($request->all());

        return redirect()->route('office-contact.index')
            ->with('success','Contact updated');
    }

    public function destroy($id)
    {
        OfficeContact::findOrFail($id)->delete();
        return back()->with('success','Deleted');
    }

    public function statusUpdate(Request $request)
    {
        $contact = OfficeContact::findOrFail($request->id);

        $contact->status = $request->status;
        $contact->save();

        return response()->json([
            'status' => true,
            'message' => 'Status updated successfully'
        ]);
    }

}
