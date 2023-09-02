@extends('layouts.app')

@section('title', 'Create Projects')

@section('content')
    <h1>Create Project</h1>
    <hr>
    <form method="POST" action="{{ route('admin.projects.store') }}">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="mb-3">
                    <label for="title" class="form-label">Tiitle</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}"
                        placeholder="Insert title" required>
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label for="description" class="form-label">Project Description</label>
                    <textarea class="form-control" id="description" name="description" rows="10">{{ old('description') }}</textarea>
                </div>
            </div>
            <div class="col-11">
                <div class="mb-3">
                    <label for="image" class="form-label">Cover Image</label>
                    <input type="url" class="form-control" id="image" name="image" value="{{ old('image') }}"
                        placeholder="Enter a valid url">
                </div>
            </div>
            <div class="col-1">
                <img src="{{ old('image', 'https://marcolanci.it/utils/placeholder.jpg') }}" alt="Preview"
                    class="img-fluid" id="image-preview">
            </div>
        </div>
        <hr>
        <div class="d-flex justify-content-end mt-4">
            <button class="btn btn-success">
                <i class="fas fa-floppy-disk me-2"></i>Save
            </button>

        </div>
    </form>
@endsection

@section('scripts')
    <script>
        const placeholder = 'https://marcolanci.it/utils/placeholder.jpg';
        const imageField = document.getElementById('image');
        const previewField = document.getElementById('image-preview');

        imageField.addEventListener('input', () => {
            previewField.src = imageField.value || placeholder;
        })
    </script>
@endsection
