@extends('layouts.app')

@section('title', 'Create Projects')

@section('content')
    <header class="d-flex justify-content-between align-items-center">
        <h1>Create Msodification</h1>
        <a href="{{ route('admin.projects.index') }}" class="btn bn-sm btn-secondary">
            <i class="fas fa-arrow-left me-2"></i>
            Go back
        </a>
    </header>
    <hr>
    <form method="POST" action="{{ route('admin.projects.update', $project) }}">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-12">
                <div class="mb-3">
                    <label for="title" class="form-label">Tiitle</label>
                    <input type="text" class="form-control" id="title" name="title"
                        value="{{ old('title', $project->title) }}" placeholder="Insert title" required>
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label for="description" class="form-label">Project Description</label>
                    <textarea class="form-control" id="description" name="description" rows="10">{{ old('description', $project->description) }}</textarea>
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label for="url" class="form-label">Project Link</label>
                    <input type="url" class="form-control" id="url" name="url" value="{{ $project->url }}">
                </div>
            </div>
            <div class="col-11">
                <div class="mb-3">
                    <label for="image" class="form-label">Cover Image</label>
                    <input type="url" class="form-control" id="image" name="image"
                        value="{{ old('image', $project->image) }}" placeholder="Enter a valid url">
                </div>
            </div>
            <div class="col-1">
                <img src="{{ old('image', $project->imaage ?? 'https://marcolanci.it/utils/placeholder.jpg') }}"
                    alt="Preview" class="img-fluid" id="image-preview">
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
    @vite('resources/js/image-preview')
@endsection
