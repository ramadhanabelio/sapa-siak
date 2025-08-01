@extends('layouts.app')

@section('title', 'Daftar Pengaduan Masyarakat')

@section('content')
    <div class="pagetitle">
        <h1>Daftar Pengaduan Masyarakat</h1>
        <nav class="mt-2">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Daftar Pengaduan Masyarakat</li>
            </ol>
        </nav>
    </div>

    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="card recent-sales overflow-auto">
                    <div class="card-body">
                        <h5 class="card-title">Daftar Pengaduan Masyarakat</h5>

                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Telepon</th>
                                    <th>Subjek</th>
                                    <th>Pesan</th>
                                    <th>Bukti</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reports as $report)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}.</td>
                                        <td>{{ $report->name }}</td>
                                        <td>{{ $report->email }}</td>
                                        <td>{{ $report->phone }}</td>
                                        <td>{{ $report->subject }}</td>
                                        <td>{{ $report->message }}</td>
                                        <td class="text-center">
                                            @if ($report->image)
                                                <span class="badge bg-info text-dark text-decoration-none"
                                                    style="cursor: pointer" data-bs-toggle="modal"
                                                    data-bs-target="#imageModal{{ $report->id }}">
                                                    Lihat Gambar
                                                </span>

                                                <!-- Modal -->
                                                <div class="modal fade" id="imageModal{{ $report->id }}" tabindex="-1"
                                                    aria-labelledby="imageModalLabel{{ $report->id }}"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-sm">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title"
                                                                    id="imageModalLabel{{ $report->id }}">Bukti
                                                                </h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Tutup"></button>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                                <img src="{{ Storage::url($report->image) }}"
                                                                    alt="Lampiran Gambar" class="img-fluid rounded shadow"
                                                                    style="max-height: 300px; object-fit: cover;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @else
                                                <span class="badge bg-secondary">Tidak Ada</span>
                                            @endif
                                        </td>
                                        <td>
                                            @php
                                                switch ($report->status) {
                                                    case 'pending':
                                                        $badgeClass = 'bg-secondary';
                                                        $label = 'Pending';
                                                        break;
                                                    case 'proses':
                                                        $badgeClass = 'bg-primary';
                                                        $label = 'Diproses';
                                                        break;
                                                    case 'selesai':
                                                        $badgeClass = 'bg-success';
                                                        $label = 'Selesai';
                                                        break;
                                                    default:
                                                        $badgeClass = 'bg-dark';
                                                        $label = ucfirst($report->status);
                                                }
                                            @endphp
                                            <span class="badge {{ $badgeClass }}">{{ $label }}</span>
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.reports.edit', $report->id) }}"
                                                class="badge bg-warning text-dark text-decoration-none">
                                                Update Status
                                            </a>
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
