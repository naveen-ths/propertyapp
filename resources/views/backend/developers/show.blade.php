@extends('layouts.admin')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Developer Details</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('developers.index') }}">Developers</a></li>
                    <li class="breadcrumb-item active">{{ $developer->name }}</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ $developer->name }}</h3>
                        <div class="card-tools">
                            <a href="{{ route('developers.edit', $developer) }}" class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                @if($developer->description)
                                    <p><strong>Description:</strong></p>
                                    <p>{{ $developer->description }}</p>
                                @endif
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><strong>Location:</strong> {{ $developer->location }}</p>
                                        <p><strong>Rating:</strong> {{ $developer->rating }} ({!! $developer->star_rating !!})</p>
                                        <p><strong>Projects Count:</strong> {{ $developer->projects_count }}</p>
                                    </div>
                                    <div class="col-md-6">
                                        @if($developer->website_url)
                                            <p><strong>Website:</strong> <a href="{{ $developer->website_url }}" target="_blank">{{ $developer->website_url }}</a></p>
                                        @endif
                                        @if($developer->phone)
                                            <p><strong>Phone:</strong> {{ $developer->phone }}</p>
                                        @endif
                                        @if($developer->email)
                                            <p><strong>Email:</strong> <a href="mailto:{{ $developer->email }}">{{ $developer->email }}</a></p>
                                        @endif
                                    </div>
                                </div>
                                
                                <p><strong>Sort Order:</strong> {{ $developer->sort_order }}</p>
                                <p><strong>Status:</strong> 
                                    @if($developer->status)
                                        <span class="badge badge-success">Active</span>
                                    @else
                                        <span class="badge badge-danger">Inactive</span>
                                    @endif
                                </p>
                                <p><strong>Slug:</strong> {{ $developer->slug }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                @if($developer->logo_url)
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Logo</h3>
                        </div>
                        <div class="card-body text-center">
                            <img src="{{ $developer->logo_url }}" alt="{{ $developer->name }}" 
                                 class="img-fluid" style="max-height: 200px;">
                        </div>
                    </div>
                @endif
                
                @if($developer->meta_title || $developer->meta_description || $developer->meta_keywords)
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">SEO Information</h3>
                        </div>
                        <div class="card-body">
                            @if($developer->meta_title)
                                <p><strong>Meta Title:</strong><br>{{ $developer->meta_title }}</p>
                            @endif
                            @if($developer->meta_description)
                                <p><strong>Meta Description:</strong><br>{{ $developer->meta_description }}</p>
                            @endif
                            @if($developer->meta_keywords)
                                <p><strong>Meta Keywords:</strong><br>{{ $developer->meta_keywords }}</p>
                            @endif
                            @if($developer->og_title)
                                <p><strong>OG Title:</strong><br>{{ $developer->og_title }}</p>
                            @endif
                            @if($developer->og_description)
                                <p><strong>OG Description:</strong><br>{{ $developer->og_description }}</p>
                            @endif
                            @if($developer->og_image)
                                <p><strong>OG Image:</strong><br><a href="{{ $developer->og_image }}" target="_blank">{{ $developer->og_image }}</a></p>
                            @endif
                        </div>
                    </div>
                @endif
            </div>
        </div>
        
        <div class="row">
            <div class="col-12">
                <a href="{{ route('developers.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Back to List
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
