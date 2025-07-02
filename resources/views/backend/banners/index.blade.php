@extends('layouts.admin')

@section('title', 'Banner Management')

@section('content')
<div class="content-wrapper">
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Banner Management</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Banners</li>
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
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">All Banners</h3>
                            <div class="card-tools">
                                <a href="{{ route('banners.create') }}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-plus"></i> Add New Banner
                                </a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            @if($banners->count() > 0)
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Section Position</th>
                                            <th>Sort Order</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($banners as $banner)
                                            <tr>
                                                <td>{{ $banner->id }}</td>
                                                <td>
                                                    @if($banner->image_url)
                                                        <img src="{{ $banner->image_url }}" alt="{{ $banner->title }}" 
                                                             class="img-thumbnail" style="width: 60px; height: 40px; object-fit: cover;">
                                                    @else
                                                        <span class="text-muted">No Image</span>
                                                    @endif
                                                </td>
                                                <td>{{ Str::limit($banner->title, 30) }}</td>
                                                <td>
                                                    <span class="badge badge-info">{{ ucfirst($banner->section_position) }}</span>
                                                </td>
                                                <td>{{ $banner->sort_order }}</td>
                                                <td>
                                                    @if($banner->status)
                                                        <span class="badge badge-success">Active</span>
                                                    @else
                                                        <span class="badge badge-danger">Inactive</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a href="{{ route('banners.show', $banner) }}" 
                                                           class="btn btn-info btn-sm">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                        <a href="{{ route('banners.edit', $banner) }}" 
                                                           class="btn btn-warning btn-sm">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <form action="{{ route('banners.destroy', $banner) }}" 
                                                              method="POST" style="display: inline-block;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm" 
                                                                    onclick="return confirm('Are you sure you want to delete this banner?')">
                                                                <i class="fas fa-trash"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @else
                                <div class="text-center p-5">
                                    <i class="fas fa-image fa-3x text-muted mb-3"></i>
                                    <h5 class="text-muted">No banners found</h5>
                                    <p class="text-muted">Start by creating your first banner.</p>
                                    <a href="{{ route('banners.create') }}" class="btn btn-primary">
                                        <i class="fas fa-plus"></i> Create Banner
                                    </a>
                                </div>
                            @endif
                        </div>
                        <!-- /.card-body -->
                        @if($banners->hasPages())
                            <div class="card-footer clearfix">
                                {{ $banners->links() }}
                            </div>
                        @endif
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@push('scripts')
<script>
    // Add any custom JavaScript here
</script>
@endpush
