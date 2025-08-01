@extends('layouts.app')

@section('title', 'Tambah Galeri')

@section('content')
    <div class="pagetitle">
        <h1>Tambah Galeri</h1>
        <nav class="mt-2">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.galleries.index') }}">Daftar Galeri</a>
                </li>
                <li class="breadcrumb-item active">Tambah Galeri</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tambah Galeri</h5>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('admin.galleries.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="image" class="form-label">Gambar</label>
                                <input type="file" class="form-control" name="image" required>
                            </div>
                            <div class="mb-3">
                                <label for="title" class="form-label">Judul</label>
                                <input type="text" class="form-control" name="title" value="{{ old('title') }}"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="desc" class="form-label">Deskripsi</label>
                                <textarea name="desc" class="form-control" rows="3">{{ old('desc') }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ route('admin.galleries.index') }}" class="btn btn-secondary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
