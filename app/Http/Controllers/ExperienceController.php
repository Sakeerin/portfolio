<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $experiences = Experience::all();
        return view('admin.experiences.index', compact('experiences'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.experiences.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'position' => 'required',
            'company' => 'required',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
            'description' => 'nullable',
        ]);
        Experience::create($request->all());
        return redirect()->route('admin.experiences.index')->with('success', 'Experience added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Experience $experience)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Experience $experience)
    {
        return view('admin.experiences.edit', compact('experience'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Experience $experience)
    {
        $request->validate([
            'position' => 'required',
            'company' => 'required',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
            'description' => 'nullable',
        ]);
        $experience->update($request->all());
        return redirect()->route('admin.experiences.index')->with('success', 'Experience updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Experience $experience)
    {
        $experience->delete();
        return redirect()->route('admin.experiences.index')->with('success', 'Experience deleted!');
    }
}
