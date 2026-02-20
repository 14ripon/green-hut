<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Land;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Mail;
use App\Mail\LandReplyMail;





class LandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mails = Land::latest()->paginate(10);
        return view('admin.lands.index', compact('mails'));
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
        $request->validate([
            'locality' => 'required',
            'address' => 'required',
            'size_in_katha' => 'required|numeric',
            'road_width' => 'required|numeric',
            'category' => 'required',
            'facing' => 'required',
            'owner_name' => 'required',
            'contact_number' => 'required',
            'email' => 'required|email'
        ]);

        Land::create($request->all());

        return redirect()->route('landowner')
            ->with('success', 'Send successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $mail = Land::findOrFail($id);
        if ($mail->status == 1) {
            $mail->status = 0;
            $mail->save();
        }
        return view('admin.lands.show', compact('mail'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Land $land)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Land $land)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $land = Land::findOrFail($id);
        $land->delete();

        return redirect()->route('lands.index')
                        ->with('success', 'Land deleted successfully.');
    }




    // Reply Page
    public function reply(Land $land)
    {
        return view('admin.lands.reply', compact('land'));
    }

    // Send reply
    public function sendReply(Request $request, Land $land)
    {
        $request->validate([
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        Mail::to($land->email)->send(
            new LandReplyMail($request->subject, $request->message, $land)
        );

        return redirect()->route('lands.show', $land->id)
            ->with('success', 'Reply email sent successfully.');
    }











}
