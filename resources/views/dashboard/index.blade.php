@extends('layouts.main')

@section('container')
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        </ol>
    </nav>
    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif

    @if (session()->has('gagal'))
        <div class="alert alert-danger col-lg-8" role="alert">
            {{ session('gagal') }}
        </div>
    @endif
    {{-- toash --}}

    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Daftar Project
                    <a href="{{ route('dashboard.create') }}" class="btn btn-sm btn-primary">Create</a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Project</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($projects as $project)
                                <tr>
                                    <th scope="row">
                                        {{ ($projects->currentpage() - 1) * $projects->perpage() + $loop->index + 1 }}</th>
                                    <td>{{ $project->name }}</td>
                                    <td>{{ $project->detail }}</td>
                                    <td>
                                        <a href="/dashboard/{{ $project->id }}"
                                            class="badge btn-info text-decoration-none">Lihat</a>
                                        <a href="/dashboard/{{ $project->id }}/edit"
                                            class="badge btn-warning text-decoration-none">Edit</span></a>
                                        <form action="/dashboard/destroy/{{ $project->id }}" method="post"
                                            class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="badge btn-danger border-0"
                                                onclick="return confirm('Are you sure?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    {{ $projects->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
