@php
    $isEdit = isset($project);
@endphp

<form
    action="{{ $isEdit ? route('admin.projects.update', $project) : route('admin.projects.store') }}"
    method="POST"
    enctype="multipart/form-data"
    class="space-y-6 max-w-lg mx-auto"
>
    @csrf
    @if($isEdit)
        @method('PUT')
    @endif

    <div>
        <label class="block font-medium">Title</label>
        <input type="text" name="title"
            value="{{ old('title', $project->title ?? '') }}"
            class="input input-bordered w-full" required>
        @error('title') <div class="text-red-500 text-xs">{{ $message }}</div> @enderror
    </div>
    <div>
        <label class="block font-medium">Description</label>
        <textarea name="description" rows="4"
            class="input input-bordered w-full"
            required>{{ old('description', $project->description ?? '') }}</textarea>
        @error('description') <div class="text-red-500 text-xs">{{ $message }}</div> @enderror
    </div>
    <div>
        <label class="block font-medium">Image</label>
        <input type="file" name="image" class="file-input w-full">
        @if($isEdit && $project->image)
            <img src="{{ asset('storage/' . $project->image) }}" alt="Project Image" class="h-16 mt-2 rounded">
        @endif
        @error('image') <div class="text-red-500 text-xs">{{ $message }}</div> @enderror
    </div>
    <div>
        <label class="block font-medium">Link</label>
        <input type="url" name="link"
            value="{{ old('link', $project->link ?? '') }}"
            class="input input-bordered w-full">
        @error('link') <div class="text-red-500 text-xs">{{ $message }}</div> @enderror
    </div>
    <div>
        <label class="block font-medium">Technologies <span class="text-gray-400 text-xs">(comma separated)</span></label>
        <input type="text" name="technologies"
            value="{{ old('technologies', $isEdit && $project->technologies ? implode(', ', $project->technologies) : '') }}"
            class="input input-bordered w-full">
        @error('technologies') <div class="text-red-500 text-xs">{{ $message }}</div> @enderror
    </div>
    <div>
        <button type="submit"
            class="btn btn-primary w-full">{{ $isEdit ? 'Update' : 'Add' }} Project</button>
    </div>
</form>
