@extends('layouts.portfolio')
@section('content')
<div class="max-w-5xl mx-auto p-6">
    <div class="flex flex-col md:flex-row mb-6">
        @if($profile?->photo)
            <img src="{{ asset('storage/'.$profile->photo) }}" class="w-32 h-32 rounded-full mr-6 object-cover">
        @endif
        <div>
            <h1 class="text-3xl font-bold">{{ $profile->name ?? '' }}</h1>
            <div class="text-xl text-gray-600 mb-2">{{ $profile->title ?? '' }}</div>
            <div class="mb-2">{{ $profile->about ?? '' }}</div>
            <div class="text-sm text-gray-500">
                {{ $profile->email ?? '' }} | {{ $profile->phone ?? '' }} | {{ $profile->address ?? '' }}
            </div>
        </div>
    </div>

    <h2 class="text-2xl font-bold mb-4">Education</h2>
    <ul class="mb-6">
        @foreach($educations as $edu)
            <li>
                <span class="font-semibold">{{ $edu->school }}</span> ({{ $edu->start_year }} - {{ $edu->end_year }})<br>
                {{ $edu->degree }} {{ $edu->major }}
            </li>
        @endforeach
    </ul>

    <h2 class="text-2xl font-bold mb-4">Skills</h2>
    <ul class="flex flex-wrap gap-2 mb-6">
        @foreach($skills as $skill)
            <li class="bg-green-100 px-3 py-1 rounded text-xs">{{ $skill->name }} <span class="text-gray-500">({{ $skill->category }})</span></li>
        @endforeach
    </ul>

    <h2 class="text-2xl font-bold mb-4">Experience</h2>
    <ul class="mb-6">
        @foreach($experiences as $exp)
            <li class="mb-3">
                <span class="font-semibold">{{ $exp->position }}</span> at {{ $exp->company }} ({{ $exp->start_date }} - {{ $exp->end_date }})<br>
                <span class="text-gray-600">{{ $exp->description }}</span>
            </li>
        @endforeach
    </ul>

    <h2 class="text-2xl font-bold mb-4">Projects</h2>
    <div class="grid md:grid-cols-2 gap-6">
        @foreach($projects as $project)
            <div class="bg-white rounded shadow p-4">
                @if($project->image)
                    <img src="{{ asset('storage/'.$project->image) }}" class="w-full h-32 object-cover rounded mb-2">
                @endif
                <h3 class="font-semibold text-lg">{{ $project->title }}</h3>
                <p>{{ $project->description }}</p>
                @if($project->link)
                    <a href="{{ $project->link }}" class="text-green-700 hover:underline" target="_blank">View Project</a>
                @endif
                <div class="flex flex-wrap gap-1 mt-2">
                    @foreach($project->technologies ?? [] as $tech)
                        <span class="px-2 py-1 bg-green-100 text-green-800 rounded text-xs">{{ $tech }}</span>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
