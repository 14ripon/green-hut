<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mails = Contact::latest()->paginate(6);
        return view('admin.mails.inbox', compact('mails'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'nullable|email',
            'preferred_time' => 'nullable',
        ]);

        Contact::create($request->all());
    
        return back()->with('success', 'Thank you for contact us, We will Reaply Soon!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $mail = Contact::findOrFail($id);
        if ($mail->status == 1) {
            $mail->status = 0;
            $mail->save();
        }
        return view('admin.mails.mail-details', compact('mail'));
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
        //
    }









    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return redirect()->route('mails.index')->with('success', 'Moved to trash');
    }

    public function trash()
    {
        $mails = Contact::onlyTrashed()->latest()->paginate(6);

        return view('admin.mails.trash', compact('mails'));
    }
    
    public function forceDelete($id)
    {
        $contact = Contact::onlyTrashed()->findOrFail($id);
        $contact->forceDelete();

        return redirect()->route('mails.trash')->with('success', 'Deleted permanently');
    }


    public function showTrash($id)
    {
        $mail = Contact::onlyTrashed()->findOrFail($id);
        return view('admin.mails.trash-details', compact('mail'));
    }



    public function bulkDelete(Request $request)
    {
        if ($request->ids) {

            Contact::whereIn('id', $request->ids)->delete();

            return back()->with('success', 'Selected items moved to trash');
        }

        return back()->with('error', 'No items selected');
    }


}
