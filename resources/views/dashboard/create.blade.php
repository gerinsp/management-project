@extends('layouts.main')

@section('container')
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item">Create Project</a></li>
        </ol>
    </nav>

    {{-- toash --}}
    <h3 class="my-3">Create Project</h3 class="my-3">

    <div class="col-lg-8">
        <form method="POST" action="{{ route('dashboard.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label ">Project Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    required autofocus value="{{ old('name') }}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="detail" class="form-label ">Deskripsi</label>
                <input type="text" class="form-control @error('detail') is-invalid @enderror" id="detail"
                    name="detail" required autofocus value="{{ old('detail') }}">
                @error('detail')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button class="btn btn-primary" type="submit">Submit</button>
        </form>
    </div>
@endsection
