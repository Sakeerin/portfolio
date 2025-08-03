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
    public function edit()
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
        
        return view('admin.profile.edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $profile = Profile::first();
        
        if (!$profile) {
            return redirect()->route('admin.profile.edit')
                ->with('error', 'Profile not found!');
        }
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'about' => 'required|string',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('photo')) {
            // Delete old photo if exists
            if ($profile->photo) {
                \Storage::disk('public')->delete($profile->photo);
            }
            
            // Store new photo
            $photoPath = $request->file('photo')->store('profile-photos', 'public');
            $validated['photo'] = $photoPath;
        }

        $profile->update($validated);

        return redirect()->route('admin.profile.edit')
            ->with('success', 'Profile updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
