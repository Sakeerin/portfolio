@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto p-6">
    <h1 class="text-2xl font-bold mb-6">Edit Skill</h1>
    
    <form action="{{ route('admin.skills.update', $skill) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Skill Name</label>
            <input type="text" name="name" id="name" value="{{ old('name', $skill->name) }}" 
                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" required>
            @error('name')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        
        <div class="mb-4">
            <label for="category" class="block text-sm font-medium text-gray-700 mb-2">Category</label>
            <select name="category" id="category" 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" required>
                <option value="">Select Category</option>
                <option value="Programming Languages" {{ old('category', $skill->category) == 'Programming Languages' ? 'selected' : '' }}>Programming Languages</option>
                <option value="Frameworks" {{ old('category', $skill->category) == 'Frameworks' ? 'selected' : '' }}>Frameworks</option>
                <option value="Databases" {{ old('category', $skill->category) == 'Databases' ? 'selected' : '' }}>Databases</option>
                <option value="Tools" {{ old('category', $skill->category) == 'Tools' ? 'selected' : '' }}>Tools</option>
                <option value="Other" {{ old('category', $skill->category) == 'Other' ? 'selected' : '' }}>Other</option>
            </select>
            @error('category')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        
        <div class="flex gap-4">
            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
                Update Skill
            </button>
            <a href="{{ route('admin.skills.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
                Cancel
            </a>
        </div>
    </form>
</div>
@endsection 