@extends('layouts.app')

@section('title', 'Daftar Galeri')

@section('content')
    <div class="pagetitle">
        <h1>Daftar Galeri</h1>
        <nav class="mt-2">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Daftar Galeri</li>
            </ol>
        </nav>
    </div>

    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="card recent-sales overflow-auto">
                    <div class="card-body">
                        <h5 class="card-title d-flex justify-content-between align-items-center">
                            Daftar Galeri
                            <a href="{{ route('admin.galleries.create') }}" class="btn btn-sm btn-primary">+ Tambah</a>
                        </h5>

                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        @endif

                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Gambar</th>
                                    <th>Judul</th>
                                    <th>Deskripsi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($galleries as $gallery)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td><img src="{{ asset('storage/' . $gallery->image) }}" width="80"
                                                class="img-thumbnail"></td>
                                        <td>{{ $gallery->title }}</td>
                                        <td>{{ $gallery->desc }}</td>
                                        <td>
                                            <a href="{{ route('admin.galleries.edit', $gallery->id) }}"
                                                class="badge bg-warning text-dark text-decoration-none">Edit</a>
                                            <form action="{{ route('admin.galleries.destroy', $gallery->id) }}"
                                                method="POST" class="d-inline"
                                                onsubmit="return confirm('Yakin hapus data ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button class="badge bg-danger border-0" type="submit">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
