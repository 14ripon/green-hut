<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    // 🔹 List
    public function index()
    {
        $locations = Location::latest()->get();
        return view('admin.locations.index', compact('locations'));
    }

    // 🔹 Create Page
    public function create()
    {
        return view('admin.locations.create');
    }

    // 🔹 Store
    public function store(Request $request)
    {
        $request->validate([
            'city' => 'required',
            'area' => 'required',
            'state' => 'required',
            'country' => 'required',
        ]);

        Location::create($request->all());

        return redirect()->route('locations.index')
            ->with('success', 'Location added successfully');
    }

    // 🔹 Edit Page
    public function edit(Location $location)
    {
        return view('admin.locations.edit', compact('location'));
    }

    // 🔹 Update
    public function update(Request $request, Location $location)
    {
        $location->update($request->all());

        return redirect()->route('locations.index')
            ->with('success', 'Location updated successfully');
    }

    // 🔹 Delete
    public function destroy(Location $location)
    {
        $location->delete();

        return redirect()->route('locations.index')
            ->with('success', 'Location deleted successfully');
    }
}
