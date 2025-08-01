@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav class="mt-2">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="">Master Data</a>
                </li>
            </ol>
        </nav>
    </div>

    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-xxl-4 col-md-6">
                        <a href="{{ route('admin.reports.index') }}" class="text-decoration-none">
                            <div class="card info-card sales-card">
                                <div class="card-body">
                                    <h5 class="card-title">Pengaduan Masyarakat</h5>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-exclamation-octagon"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $totalReports }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xxl-4 col-md-6">
                        <a href="{{ route('admin.galleries.index') }}" class="text-decoration-none">
                            <div class="card info-card sales-card">
                                <div class="card-body">
                                    <h5 class="card-title">Galeri</h5>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-image"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $totalGalleries }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
