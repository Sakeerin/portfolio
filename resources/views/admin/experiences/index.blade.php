@extends('layouts.app')
@section('content')
<div class="max-w-4xl mx-auto p-6">
    <h1 class="text-2xl font-bold mb-6">Experiences</h1>
    <a href="{{ route('admin.experiences.create') }}" class="bg-green-500 text-white px-4 py-2 rounded mb-4 inline-block">+ Add Experience</a>
    <ul>
        @foreach($experiences as $exp)
            <li class="mb-4 border-b pb-2">
                <div class="font-semibold">{{ $exp->position }} at {{ $exp->company }}</div>
                <div class="text-sm text-gray-500">{{ $exp->start_date }} - {{ $exp->end_date }}</div>
                <div>{{ $exp->description }}</div>
                <a href="{{ route('admin.experiences.edit', $exp) }}" class="text-blue-600 mr-2">Edit</a>
                <form action="{{ route('admin.experiences.destroy', $exp) }}" method="POST" class="inline-block">
                    @csrf @method('DELETE')
                    <button class="text-red-600">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</div>
@endsection
