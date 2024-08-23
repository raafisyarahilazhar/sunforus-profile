@extends('dashboard.layouts.layout')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Karya</h1>
</div>
<a href="/dashboard/quote" class="btn btn-dark btn-sm my-3">
    <span data-feather="skip-back"></span>
    Kembali
</a>
<div class="div col col-lg-6">
  <form action="/dashboard/project" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Judul</label>
      <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" rows="3" value="{{ old('title') }}"></input>
      @error('title')
        <div class="invalid-feedback">
            {{ $message}}
        </div>
      @enderror
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Deskripsi</label>
        <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3" value="{{ old('description') }}"></input>
        @error('description')
          <div class="invalid-feedback">
              {{ $message}}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">Foto</label>
        <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" rows="3" value="{{ old('image') }}"></input>
        @error('image')
          <div class="invalid-feedback">
              {{ $message}}
          </div>
        @enderror
      </div>
    <button type="submit" class="btn btn-primary">Tambah</button>
  </form>
</div>
@endsection