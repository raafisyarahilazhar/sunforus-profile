@extends('dashboard.layouts.layout')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Quotes</h1>
</div>
<a href="/dashboard/quote" class="btn btn-dark btn-sm my-3">
    <span data-feather="skip-back"></span>
    Kembali
</a>
<div class="div col col-lg-6">
  <form action="/dashboard/quote/{{ $quote->id }}" method="post">
    @method('put')
    @csrf
    <div class="mb-3">
      <label for="quote" class="form-label">Curahkan Isi Hatimu</label>
      <input type="text" class="form-control @error ('quote') is-invalid @enderror" id="quote" name="quote" rows="3" value="{{ old('quote', $quote->quote) }}"></input>
      @error('quote')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Edit</button>
  </form>
</div>
@endsection