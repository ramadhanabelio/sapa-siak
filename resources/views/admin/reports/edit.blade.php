@extends('layouts.app')

@section('title', 'Update Status')

@section('content')
    <div class="pagetitle">
        <h1>Update Status</h1>
        <nav class="mt-2">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.reports.index') }}">Daftar Pengaduan Masyarakat</a>
                </li>
                <li class="breadcrumb-item active">Update Status</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Update Status</h5>
                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        <form action="{{ route('admin.reports.update', $report->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="status" class="form-label">Status Pengaduan</label>
                                <select name="status" class="form-select" required>
                                    <option value="pending" {{ $report->status == 'pending' ? 'selected' : '' }}>Pending
                                    </option>
                                    <option value="proses" {{ $report->status == 'proses' ? 'selected' : '' }}>Proses
                                    </option>
                                    <option value="selesai" {{ $report->status == 'selesai' ? 'selected' : '' }}>Selesai
                                    </option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ route('admin.reports.index') }}" class="btn btn-secondary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
