@extends('layouts.app')

@section('title', 'Edit Galeri')

@section('content')
    <div class="pagetitle">
        <h1>Edit Galeri</h1>
        <nav class="mt-2">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.galleries.index') }}">Galeri</a>
                </li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Form Edit Galeri</h5>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('admin.galleries.update', $gallery->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="image" class="form-label">Gambar</label><br>
                                <img src="{{ asset('storage/' . $gallery->image) }}" width="120"
                                    class="img-thumbnail mb-2">
                                <input type="file" class="form-control" name="image">
                                <small class="text-muted">Kosongkan jika tidak ingin mengganti gambar</small>
                            </div>
                            <div class="mb-3">
                                <label for="title" class="form-label">Judul</label>
                                <input type="text" class="form-control" name="title" value="{{ $gallery->title }}"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="desc" class="form-label">Deskripsi</label>
                                <textarea name="desc" class="form-control" rows="3">{{ $gallery->desc }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('admin.galleries.index') }}" class="btn btn-secondary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
