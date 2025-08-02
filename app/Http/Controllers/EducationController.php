<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $educations = Education::orderByDesc('start_year')->get();
        return view('admin.educations.index', compact('educations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.educations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'school' => 'required|string|max:255',
            'degree' => 'required|string|max:255',
            'major' => 'nullable|string|max:255',
            'start_year' => 'nullable|string|max:10',
            'end_year' => 'nullable|string|max:10',
        ]);

        Education::create($validated);

        return redirect()->route('admin.educations.index')
            ->with('success', 'Education added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Education $education)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Education $education)
    {
        return view('admin.educations.edit', compact('education'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Education $education)
    {
        $validated = $request->validate([
            'school' => 'required|string|max:255',
            'degree' => 'required|string|max:255',
            'major' => 'nullable|string|max:255',
            'start_year' => 'nullable|string|max:10',
            'end_year' => 'nullable|string|max:10',
        ]);

        $education->update($validated);

        return redirect()->route('admin.educations.index')
            ->with('success', 'Education updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Education $education)
    {
        $education->delete();

        return redirect()->route('admin.educations.index')
            ->with('success', 'Education deleted successfully!');
    }
}
