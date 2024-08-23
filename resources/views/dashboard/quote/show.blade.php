@extends('dashboard.layouts.layout')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Sebuah Curahan hati</h1>
</div>
<a href="/dashboard/quote" class="btn btn-dark btn-sm my-3">
    <span data-feather="arrow-left"></span>
    Kembali
</a>
<p>"{{ $quotes->quote }}"</p>
@endsection