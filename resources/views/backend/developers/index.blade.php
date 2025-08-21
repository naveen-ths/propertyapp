@extends('layouts.admin')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Developers Management</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Developers</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {{ session('success') }}
                    </div>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Developers Management</h3>
                        <div class="card-tools">
                            <a href="{{ route('developers.create') }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-plus"></i> Add New Developer
                            </a>
                        </div>
                    </div>
                    
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Logo</th>
                                    <th>Name</th>
                                    <th>Location</th>
                                    <th>Rating</th>
                                    <th>Projects</th>
                                    <th>Sort Order</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($developers as $developer)
                                    <tr>
                                        <td>{{ $developer->id }}</td>
                                        <td>
                                            @if($developer->logo_url)
                                                <img src="{{ $developer->logo_url }}" alt="{{ $developer->name }}" 
                                                     class="img-thumbnail" style="max-width: 50px; max-height: 50px;">
                                            @else
                                                <span class="badge badge-secondary">No Logo</span>
                                            @endif
                                        </td>
                                        <td>
                                            <strong>{{ $developer->name }}</strong>
                                            @if($developer->website_url)
                                                <br><small><a href="{{ $developer->website_url }}" target="_blank" class="text-muted">{{ $developer->website_url }}</a></small>
                                            @endif
                                        </td>
                                        <td>{{ $developer->location }}</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="mr-2">{{ $developer->rating }}</span>
                                                <div>{!! $developer->star_rating !!}</div>
                                            </div>
                                        </td>
                                        <td>{{ $developer->projects_count }}</td>
                                        <td>{{ $developer->sort_order }}</td>
                                        <td>
                                            @if($developer->status)
                                                <span class="badge badge-success">Active</span>
                                            @else
                                                <span class="badge badge-danger">Inactive</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ route('developers.show', $developer) }}" class="btn btn-info btn-sm">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a href="{{ route('developers.edit', $developer) }}" class="btn btn-warning btn-sm">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="{{ route('developers.destroy', $developer) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" 
                                                            onclick="return confirm('Are you sure you want to delete this developer?')">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="9" class="text-center">No developers found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    
                    @if($developers->hasPages())
                        <div class="card-footer clearfix">
                            {{ $developers->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
