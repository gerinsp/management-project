@extends('layouts.main')

@section('container')
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item">Detail Project</a></li>
        </ol>
    </nav>

    {{-- toash --}}
    <div class="card">
        <div class="card-header">
            Detail Project
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $project->name }}</h5>
            <p class="card-text">{{ $project->detail }}</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
@endsection
