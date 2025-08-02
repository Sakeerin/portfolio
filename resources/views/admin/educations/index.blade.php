@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto p-6">
    <h1 class="text-2xl font-bold mb-6">Educations</h1>
    <a href="{{ route('admin.educations.create') }}"
       class="bg-green-500 text-white px-4 py-2 rounded mb-4 inline-block">+ Add Education</a>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-2">School</th>
                    <th class="px-4 py-2">Degree</th>
                    <th class="px-4 py-2">Major</th>
                    <th class="px-4 py-2">Start Year</th>
                    <th class="px-4 py-2">End Year</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($educations as $edu)
                    <tr>
                        <td class="border px-4 py-2">{{ $edu->school }}</td>
                        <td class="border px-4 py-2">{{ $edu->degree }}</td>
                        <td class="border px-4 py-2">{{ $edu->major }}</td>
                        <td class="border px-4 py-2">{{ $edu->start_year }}</td>
                        <td class="border px-4 py-2">{{ $edu->end_year }}</td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('admin.educations.edit', $edu) }}"
                               class="text-blue-600 hover:underline mr-2">Edit</a>
                            <form action="{{ route('admin.educations.destroy', $edu) }}" method="POST" class="inline-block"
                                  onsubmit="return confirm('Are you sure you want to delete this education?');">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-600 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-4 py-4 text-center text-gray-500">No education records found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
