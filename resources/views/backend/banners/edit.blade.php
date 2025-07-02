@extends('layouts.admin')

@section('title', 'Homepage Banner Management')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Homepage Banner</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Banner Management</li>
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
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Homepage Banner Settings</h3>
                        </div>

                        <form action="{{ route('admin.banner.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="title">Banner Title *</label>
                                            <input type="text" class="form-control @error('title') is-invalid @enderror"
                                                id="title" name="title" value="{{ old('title', $banner->title) }}"
                                                required>
                                            @error('title')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                                                rows="3" placeholder="Enter banner description">{{ old('description', $banner->description) }}</textarea>
                                            @error('description')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="button_text">Button Text</label>
                                                    <input type="text"
                                                        class="form-control @error('button_text') is-invalid @enderror"
                                                        id="button_text" name="button_text"
                                                        value="{{ old('button_text', $banner->button_text) }}">
                                                    @error('button_text')
                                                        <span class="invalid-feedback">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="button_url">Button URL</label>
                                                    <input type="url"
                                                        class="form-control @error('button_url') is-invalid @enderror"
                                                        id="button_url" name="button_url"
                                                        value="{{ old('button_url', $banner->button_url) }}">
                                                    @error('button_url')
                                                        <span class="invalid-feedback">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="status"
                                                    name="status" value="1"
                                                    {{ old('status', $banner->status) ? 'checked' : '' }}>
                                                <label class="custom-control-label" for="status">Active Banner</label>
                                            </div>
                                            <small class="form-text text-muted">Turn off to hide the banner from the
                                                homepage</small>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="image">Banner Image</label>
                                            <div class="custom-file">
                                                <input type="file"
                                                    class="custom-file-input @error('image') is-invalid @enderror"
                                                    id="image" name="image" accept="image/*">
                                                <label class="custom-file-label" for="image">Choose file</label>
                                                @error('image')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <small class="form-text text-muted">Upload a new image (JPEG, PNG, JPG, GIF -
                                                Max: 2MB)</small>
                                        </div>

                                        @if ($banner->image_url)
                                            <div class="form-group">
                                                <label>Current Image</label>
                                                <div class="text-center">
                                                    <img src="{{ $banner->image_url }}" alt="Banner Image"
                                                        class="img-fluid img-thumbnail" style="max-height: 200px;">
                                                </div>
                                            </div>
                                        @endif

                                        <div class="form-group">
                                            <label for="image_url">Or External Image URL</label>
                                            <input type="url"
                                                class="form-control @error('image_url') is-invalid @enderror" id="image_url"
                                                name="image_url" value="{{ old('image_url', $banner->image_url) }}"
                                                placeholder="https://example.com/image.jpg">
                                            @error('image_url')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                            <small class="form-text text-muted">Alternatively, provide an external image
                                                URL</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save"></i> Update Banner
                                </button>
                                <a href="{{ route('dashboard') }}" class="btn btn-secondary ml-2">
                                    <i class="fas fa-arrow-left"></i> Back to Dashboard
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
