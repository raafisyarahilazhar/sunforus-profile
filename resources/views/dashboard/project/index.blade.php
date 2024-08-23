@extends('dashboard.layouts.layout')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Karya Kita</h1>
</div>
<a href="project/create" class="btn btn-primary btn-sm my-3">
    <span data-feather="plus-square"></span>
    Tambah Karya
</a>
@if (session()->has('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div> 
@endif
@if (session()->has('delete'))
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{ session('delete') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif
<div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Gambar</th>
          <th scope="col">Judul</th>
          <th scope="col">Deskripsi</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($projects as $project)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    <img src="{{ asset('storage/' . $project->image) }}" class="img-thumbnail" alt="{{ $project->title }}" width="100" height="150">
                </td>
                <td>{{ $project->title }}</td>
                <td>{{ $project->description }}</td>
                <td>
                    <a href="/dashboard/project/{{ $project->id }}" class="btn btn-info">
                        <span data-feather="eye"></span>
                    </a>
                    <a href="/dashboard/project/{{ $project->id }}/edit" class="btn btn-warning">
                        <span data-feather="edit"></span>
                    </a>
                    <form action="/dashboard/project/{{ $project->id }}" method="post" class="d-inline">
                      @method('delete')
                      @csrf
                      <button class="btn btn-danger border-0" onclick="return confirm('Anda yakin untuk menghapusnya?')">
                        <span data-feather="trash-2"></span>
                      </button>
                    </form>
                </td>
            </tr>
          @endforeach
      </tbody>
    </table>
  </div>
@endsection