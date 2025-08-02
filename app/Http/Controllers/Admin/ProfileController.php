<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\Education;
use App\Models\Skill;
use App\Models\Experience;
use App\Models\Project;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profile = Profile::first();
        
        if (!$profile) {
            // Create a default profile if none exists
            $profile = Profile::create([
                'name' => 'Your Name',
                'title' => 'Your Title',
                'about' => 'About yourself...',
                'email' => 'your.email@example.com',
                'phone' => '',
                'address' => '',
            ]);
        }
        
        return view('portfolio.index', [
            'profile' => $profile,
            'educations' => Education::all(),
            'skills' => Skill::all(),
            'experiences' => Experience::all(),
            'projects' => Project::all(),
        ]);
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
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
