@extends('dashboard.layouts.layout')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Quotes</h1>
</div>
<a href="/dashboard/project" class="btn btn-dark btn-sm my-3">
    <span data-feather="skip-back"></span>
    Kembali
</a>
<div class="div col col-lg-6">
  <form action="/dashboard/project/{{ $project->id }}" method="post" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Judul</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" rows="3" value="{{ old('title', $project->title) }}"></input>
        @error('title')
          <div class="invalid-feedback">
              {{ $message}}
          </div>
        @enderror
      </div>
      <div class="mb-3">
          <label for="description" class="form-label">Deskripsi</label>
          <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3" value="{{ old('description', $project->description) }}"></input>
          @error('description')
            <div class="invalid-feedback">
                {{ $message}}
            </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="image" class="form-label">Foto</label>
          <input type="hidden" name="oldImage" value="{{ $project->image }}">
          <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" rows="3" value="{{ old('image', asset('storage/' . $project->image)) }}"></input>
          @error('image')
            <div class="invalid-feedback">
                {{ $message}}
            </div>
          @enderror
        </div>
    <button type="submit" class="btn btn-primary">Edit</button>
  </form>
</div>
@endsection