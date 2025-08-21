@extends('layouts.admin')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">How It Works Item Details</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('how-it-works.index') }}">How It Works</a></li>
                    <li class="breadcrumb-item active">View</li>
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
                        <h3 class="card-title">How It Works Item Details</h3>
                        <div class="card-tools">
                            <a href="{{ route('how-it-works.index') }}" class="btn btn-secondary btn-sm">
                                <i class="fas fa-arrow-left"></i> Back to List
                            </a>
                            <a href="{{ route('how-it-works.edit', $howItWork) }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="info-box">
                                    <span class="info-box-icon bg-info">
                                        <i class="{{ $howItWork->icon }}"></i>
                                    </span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Icon</span>
                                        <span class="info-box-number">{{ $howItWork->icon }}</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="info-box">
                                    <span class="info-box-icon bg-success">
                                        <i class="fas fa-heading"></i>
                                    </span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Title</span>
                                        <span class="info-box-number">{{ $howItWork->title }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="info-box">
                                    <span class="info-box-icon bg-warning">
                                        <i class="fas fa-sort-numeric-up"></i>
                                    </span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Sort Order</span>
                                        <span class="info-box-number">{{ $howItWork->sort_order }}</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="info-box">
                                    <span class="info-box-icon {{ $howItWork->status ? 'bg-success' : 'bg-danger' }}">
                                        <i class="fas {{ $howItWork->status ? 'fa-check' : 'fa-times' }}"></i>
                                    </span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Status</span>
                                        <span class="info-box-number">
                                            <span class="badge {{ $howItWork->status ? 'bg-success' : 'bg-danger' }}">
                                                {{ $howItWork->status ? 'Active' : 'Inactive' }}
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Description</h4>
                                    </div>
                                    <div class="card-body">
                                        <p class="mb-0">{{ $howItWork->description }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="info-box">
                                    <span class="info-box-icon bg-info">
                                        <i class="fas fa-calendar-plus"></i>
                                    </span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Created At</span>
                                        <span class="info-box-number">{{ $howItWork->created_at->format('M d, Y H:i') }}</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="info-box">
                                    <span class="info-box-icon bg-secondary">
                                        <i class="fas fa-calendar-edit"></i>
                                    </span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Updated At</span>
                                        <span class="info-box-number">{{ $howItWork->updated_at->format('M d, Y H:i') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Preview</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="box_how text-center">
                                            <i class="{{ $howItWork->icon }}" style="font-size: 3rem; color: #007bff;"></i>
                                            <h3>{{ $howItWork->title }}</h3>
                                            <p>{{ $howItWork->description }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <a href="{{ route('how-it-works.edit', $howItWork) }}" class="btn btn-primary">
                                <i class="fas fa-edit"></i> Edit Item
                            </a>
                            <a href="{{ route('how-it-works.index') }}" class="btn btn-secondary">
                                <i class="fas fa-list"></i> Back to List
                            </a>
                            <button type="button" class="btn btn-danger" onclick="confirmDelete()">
                                <i class="fas fa-trash"></i> Delete Item
                            </button>
                        </div>

                        <form id="deleteForm" action="{{ route('how-it-works.destroy', $howItWork) }}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
function confirmDelete() {
    if (confirm('Are you sure you want to delete this How It Works item? This action cannot be undone.')) {
        document.getElementById('deleteForm').submit();
    }
}
</script>
@endsection
