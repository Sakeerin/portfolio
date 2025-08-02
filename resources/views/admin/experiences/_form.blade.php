@php
    $isEdit = isset($experience);
@endphp

<form
    action="{{ $isEdit ? route('admin.experiences.update', $experience) : route('admin.experiences.store') }}"
    method="POST"
    class="space-y-6 max-w-lg mx-auto"
>
    @csrf
    @if($isEdit)
        @method('PUT')
    @endif

    <div>
        <label class="block font-medium">Position</label>
        <input type="text" name="position"
            value="{{ old('position', $experience->position ?? '') }}"
            class="input input-bordered w-full" required>
        @error('position') <div class="text-red-500 text-xs">{{ $message }}</div> @enderror
    </div>
    <div>
        <label class="block font-medium">Company</label>
        <input type="text" name="company"
            value="{{ old('company', $experience->company ?? '') }}"
            class="input input-bordered w-full" required>
        @error('company') <div class="text-red-500 text-xs">{{ $message }}</div> @enderror
    </div>
    <div class="flex gap-4">
        <div class="flex-1">
            <label class="block font-medium">Start Date</label>
            <input type="date" name="start_date"
                value="{{ old('start_date', $experience->start_date ?? '') }}"
                class="input input-bordered w-full">
            @error('start_date') <div class="text-red-500 text-xs">{{ $message }}</div> @enderror
        </div>
        <div class="flex-1">
            <label class="block font-medium">End Date</label>
            <input type="date" name="end_date"
                value="{{ old('end_date', $experience->end_date ?? '') }}"
                class="input input-bordered w-full">
            @error('end_date') <div class="text-red-500 text-xs">{{ $message }}</div> @enderror
        </div>
    </div>
    <div>
        <label class="block font-medium">Description</label>
        <textarea name="description" rows="4"
            class="input input-bordered w-full">{{ old('description', $experience->description ?? '') }}</textarea>
        @error('description') <div class="text-red-500 text-xs">{{ $message }}</div> @enderror
    </div>
    <div>
        <button type="submit"
            class="btn btn-primary w-full">{{ $isEdit ? 'Update' : 'Add' }} Experience</button>
    </div>
</form>
