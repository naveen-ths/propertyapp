@extends('layouts.admin')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>City Details</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('cities.index') }}">Cities</a></li>
                    <li class="breadcrumb-item active">{{ $city->title }}</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">City Information</h3>
            <div class="card-tools">
                <a href="{{ route('cities.edit', $city->id) }}" class="btn btn-info btn-sm">
                    <i class="fas fa-edit"></i> Edit
                </a>
                <a href="{{ route('cities.index') }}" class="btn btn-secondary btn-sm">
                    <i class="fas fa-list"></i> Back to List
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <dl class="row">
                        <dt class="col-sm-4">ID:</dt>
                        <dd class="col-sm-8">{{ $city->id }}</dd>
                        
                        <dt class="col-sm-4">Title:</dt>
                        <dd class="col-sm-8">{{ $city->title }}</dd>
                        
                        <dt class="col-sm-4">Slug:</dt>
                        <dd class="col-sm-8"><code>{{ $city->slug }}</code></dd>
                        
                        <dt class="col-sm-4">Status:</dt>
                        <dd class="col-sm-8">
                            @if($city->status)
                                <span class="badge badge-success">Active</span>
                            @else
                                <span class="badge badge-danger">Inactive</span>
                            @endif
                        </dd>
                        
                        <dt class="col-sm-4">Created:</dt>
                        <dd class="col-sm-8">{{ $city->created_at->format('d M Y, h:i A') }}</dd>
                        
                        <dt class="col-sm-4">Updated:</dt>
                        <dd class="col-sm-8">{{ $city->updated_at->format('d M Y, h:i A') }}</dd>
                    </dl>
                </div>
                <div class="col-md-6">
                    <h5>Statistics</h5>
                    <div class="info-box">
                        <span class="info-box-icon bg-info"><i class="fas fa-building"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Total Properties</span>
                            <span class="info-box-number">{{ $city->properties->count() }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if($city->properties->count() > 0)
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Properties in {{ $city->title }}</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Property Title</th>
                            <th>Location</th>
                            <th>Status</th>
                            <th>Created</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($city->properties as $property)
                        <tr>
                            <td>{{ $property->id }}</td>
                            <td>{{ $property->property_title ?? 'N/A' }}</td>
                            <td>{{ $property->property_location ?? 'N/A' }}</td>
                            <td>
                                @if($property->status ?? false)
                                    <span class="badge badge-success">Active</span>
                                @else
                                    <span class="badge badge-danger">Inactive</span>
                                @endif
                            </td>
                            <td>{{ $property->created_at->format('d M Y') }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endif
</section>
@endsection
