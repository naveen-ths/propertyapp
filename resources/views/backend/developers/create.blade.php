@extends('layouts.admin')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Add New Developer</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('developers.index') }}">Developers</a></li>
                    <li class="breadcrumb-item active">Create</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Developer Information</h3>
                    </div>
                    
                    <form action="{{ route('developers.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="card-body">
                            <div class="row">
                                <!-- Left Column -->
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="name">Developer Name *</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                               id="name" name="name" value="{{ old('name') }}" required>
                                        @error('name')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea class="form-control @error('description') is-invalid @enderror" 
                                                  id="description" name="description" rows="3" 
                                                  placeholder="Enter developer description">{{ old('description') }}</textarea>
                                        @error('description')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="location">Location *</label>
                                                <input type="text" class="form-control @error('location') is-invalid @enderror" 
                                                       id="location" name="location" value="{{ old('location') }}" required>
                                                @error('location')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="rating">Rating *</label>
                                                <input type="number" class="form-control @error('rating') is-invalid @enderror" 
                                                       id="rating" name="rating" value="{{ old('rating', 4) }}" 
                                                       min="0" max="5" step="0.1" required>
                                                @error('rating')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="projects_count">Projects Count *</label>
                                                <input type="number" class="form-control @error('projects_count') is-invalid @enderror" 
                                                       id="projects_count" name="projects_count" value="{{ old('projects_count', 0) }}" 
                                                       min="0" required>
                                                @error('projects_count')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="website_url">Website URL</label>
                                                <input type="url" class="form-control @error('website_url') is-invalid @enderror" 
                                                       id="website_url" name="website_url" value="{{ old('website_url') }}">
                                                @error('website_url')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="phone">Phone</label>
                                                <input type="text" class="form-control @error('phone') is-invalid @enderror" 
                                                       id="phone" name="phone" value="{{ old('phone') }}">
                                                @error('phone')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                                       id="email" name="email" value="{{ old('email') }}">
                                                @error('email')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="sort_order">Sort Order *</label>
                                                <input type="number" class="form-control @error('sort_order') is-invalid @enderror" 
                                                       id="sort_order" name="sort_order" value="{{ old('sort_order', 0) }}" 
                                                       min="0" required>
                                                @error('sort_order')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="custom-control custom-switch mt-4">
                                                    <input type="checkbox" class="custom-control-input" id="status" name="status" value="1" 
                                                           {{ old('status', true) ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="status">Active</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Right Column -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="logo">Developer Logo</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input @error('logo') is-invalid @enderror" 
                                                   id="logo" name="logo" accept="image/*">
                                            <label class="custom-file-label" for="logo">Choose file</label>
                                            @error('logo')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <small class="form-text text-muted">Upload a logo (JPEG, PNG, JPG, GIF - Max: 2MB)</small>
                                    </div>

                                    <div class="form-group">
                                        <label for="logo_url">Or External Logo URL</label>
                                        <input type="url" class="form-control @error('logo_url') is-invalid @enderror" 
                                               id="logo_url" name="logo_url" value="{{ old('logo_url') }}"
                                               placeholder="https://example.com/logo.jpg">
                                        @error('logo_url')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                        <small class="form-text text-muted">Alternatively, provide an external logo URL</small>
                                    </div>
                                </div>
                            </div>

                            <!-- SEO Section -->
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <h5>SEO Settings</h5>
                                    <hr>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="meta_title">Meta Title</label>
                                        <input type="text" class="form-control @error('meta_title') is-invalid @enderror" 
                                               id="meta_title" name="meta_title" value="{{ old('meta_title') }}">
                                        @error('meta_title')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="meta_description">Meta Description</label>
                                        <textarea class="form-control @error('meta_description') is-invalid @enderror" 
                                                  id="meta_description" name="meta_description" rows="3">{{ old('meta_description') }}</textarea>
                                        @error('meta_description')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="meta_keywords">Meta Keywords</label>
                                        <textarea class="form-control @error('meta_keywords') is-invalid @enderror" 
                                                  id="meta_keywords" name="meta_keywords" rows="2" 
                                                  placeholder="keyword1, keyword2, keyword3">{{ old('meta_keywords') }}</textarea>
                                        @error('meta_keywords')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="og_title">Open Graph Title</label>
                                        <input type="text" class="form-control @error('og_title') is-invalid @enderror" 
                                               id="og_title" name="og_title" value="{{ old('og_title') }}">
                                        @error('og_title')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="og_description">Open Graph Description</label>
                                        <textarea class="form-control @error('og_description') is-invalid @enderror" 
                                                  id="og_description" name="og_description" rows="3">{{ old('og_description') }}</textarea>
                                        @error('og_description')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="og_image">Open Graph Image URL</label>
                                        <input type="url" class="form-control @error('og_image') is-invalid @enderror" 
                                               id="og_image" name="og_image" value="{{ old('og_image') }}">
                                        @error('og_image')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Create Developer
                            </button>
                            <a href="{{ route('developers.index') }}" class="btn btn-secondary ml-2">
                                <i class="fas fa-arrow-left"></i> Back to List
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
$(document).ready(function() {
    // Custom file input label update
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName || 'Choose file');
    });
});
</script>
@endpush
@endsection
