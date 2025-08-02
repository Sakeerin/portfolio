@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto p-6">
    <h1 class="text-2xl font-bold mb-6">Projects</h1>
    <a href="{{ route('admin.projects.create') }}"
       class="bg-green-500 text-white px-4 py-2 rounded mb-4 inline-block">+ Add Project</a>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-2">Image</th>
                    <th class="px-4 py-2">Title</th>
                    <th class="px-4 py-2">Technologies</th>
                    <th class="px-4 py-2">Link</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($projects as $project)
                    <tr>
                        <td class="border px-4 py-2">
                            @if($project->image)
                                <img src="{{ asset('storage/' . $project->image) }}" class="h-10 w-20 object-cover rounded">
                            @else
                                <span class="text-gray-400">No image</span>
                            @endif
                        </td>
                        <td class="border px-4 py-2">{{ $project->title }}</td>
                        <td class="border px-4 py-2">
                            @foreach($project->technologies ?? [] as $tech)
                                <span class="px-2 py-1 bg-green-100 rounded text-xs mr-1">{{ $tech }}</span>
                            @endforeach
                        </td>
                        <td class="border px-4 py-2">
                            @if($project->link)
                                <a href="{{ $project->link }}" target="_blank" class="text-green-600 hover:underline">Visit</a>
                            @else
                                <span class="text-gray-400">-</span>
                            @endif
                        </td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('admin.projects.edit', $project) }}"
                               class="text-blue-600 hover:underline mr-2">Edit</a>
                            <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" class="inline-block"
                                  onsubmit="return confirm('Are you sure you want to delete this project?');">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-600 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-4 py-4 text-center text-gray-500">No projects found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
