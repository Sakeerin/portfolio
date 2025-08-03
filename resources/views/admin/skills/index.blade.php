@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto p-6">
    <h1 class="text-2xl font-bold mb-6">Skills</h1>
    <a href="{{ route('admin.skills.create') }}"
       class="bg-green-500 text-white px-4 py-2 rounded mb-4 inline-block">+ Add Skill</a>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-2">Name</th>
                    <th class="px-4 py-2">Category</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($skills as $skill)
                    <tr>
                        <td class="border px-4 py-2">{{ $skill->name }}</td>
                        <td class="border px-4 py-2">{{ $skill->category }}</td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('admin.skills.edit', $skill) }}"
                               class="text-blue-600 hover:underline mr-2">Edit</a>
                            <form action="{{ route('admin.skills.destroy', $skill) }}" method="POST" class="inline-block"
                                  onsubmit="return confirm('Are you sure you want to delete this skill?');">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-600 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="px-4 py-4 text-center text-gray-500">No skills found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection 