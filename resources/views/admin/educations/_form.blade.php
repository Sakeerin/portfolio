@php
    $isEdit = isset($education);
@endphp

<form
    action="{{ $isEdit ? route('admin.educations.update', $education) : route('admin.educations.store') }}"
    method="POST"
    class="space-y-6 max-w-lg mx-auto"
>
    @csrf
    @if($isEdit)
        @method('PUT')
    @endif

    <div>
        <label class="block font-medium">School</label>
        <input type="text" name="school"
            value="{{ old('school', $education->school ?? '') }}"
            class="input input-bordered w-full" required>
        @error('school') <div class="text-red-500 text-xs">{{ $message }}</div> @enderror
    </div>
    <div>
        <label class="block font-medium">Degree</label>
        <input type="text" name="degree"
            value="{{ old('degree', $education->degree ?? '') }}"
            class="input input-bordered w-full" required>
        @error('degree') <div class="text-red-500 text-xs">{{ $message }}</div> @enderror
    </div>
    <div>
        <label class="block font-medium">Major</label>
        <input type="text" name="major"
            value="{{ old('major', $education->major ?? '') }}"
            class="input input-bordered w-full">
        @error('major') <div class="text-red-500 text-xs">{{ $message }}</div> @enderror
    </div>
    <div class="flex gap-4">
        <div class="flex-1">
            <label class="block font-medium">Start Year</label>
            <input type="text" name="start_year"
                value="{{ old('start_year', $education->start_year ?? '') }}"
                class="input input-bordered w-full">
            @error('start_year') <div class="text-red-500 text-xs">{{ $message }}</div> @enderror
        </div>
        <div class="flex-1">
            <label class="block font-medium">End Year</label>
            <input type="text" name="end_year"
                value="{{ old('end_year', $education->end_year ?? '') }}"
                class="input input-bordered w-full">
            @error('end_year') <div class="text-red-500 text-xs">{{ $message }}</div> @enderror
        </div>
    </div>
    <div>
        <button type="submit"
            class="btn btn-primary w-full">{{ $isEdit ? 'Update' : 'Add' }} Education</button>
    </div>
</form>
