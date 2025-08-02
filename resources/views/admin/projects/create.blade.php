@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto p-6">
    <h1 class="text-2xl font-bold mb-6">Add Project</h1>
    @include('admin.projects._form')
    <a href="{{ route('admin.projects.index') }}" class="text-green-600 hover:underline mt-6 inline-block">&larr; Back to list</a>
</div>
@endsection
