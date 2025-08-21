@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Add New Investment Opportunity</h3>
                    <div class="card-tools">
                        <a href="{{ route('investment-opportunities.index') }}" class="btn btn-secondary btn-sm">
                            <i class="fas fa-arrow-left"></i> Back to List
                        </a>
                    </div>
                </div>

                <form action="{{ route('investment-opportunities.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Title <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="slug">Slug</label>
                                    <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug') }}">
                                    <small class="form-text text-muted">Leave blank to auto-generate from title</small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="location">Location <span class="text-danger">*</span></label>
                                    <select class="form-control" id="location" name="location" required>
                                        <option value="">Select Location</option>
                                        <option value="mumbai" {{ old('location') == 'mumbai' ? 'selected' : '' }}>Mumbai</option>
                                        <option value="pune" {{ old('location') == 'pune' ? 'selected' : '' }}>Pune</option>
                                        <option value="bangalore" {{ old('location') == 'bangalore' ? 'selected' : '' }}>Bangalore</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="property_type">Property Type</label>
                                    <input type="text" class="form-control" id="property_type" name="property_type" value="{{ old('property_type') }}" placeholder="e.g., 2,3 BHK Apartment">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="price_range">Price Range</label>
                                    <input type="text" class="form-control" id="price_range" name="price_range" value="{{ old('price_range') }}" placeholder="e.g., ₹ 1.50 Cr - 2.75 Cr">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="developer_name">Developer Name</label>
                                    <input type="text" class="form-control" id="developer_name" name="developer_name" value="{{ old('developer_name') }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="investment_rating">Investment Rating</label>
                                    <select class="form-control" id="investment_rating" name="investment_rating">
                                        <option value="5.0" {{ old('investment_rating') == '5.0' ? 'selected' : '' }}>5.0</option>
                                        <option value="4.5" {{ old('investment_rating') == '4.5' ? 'selected' : '' }}>4.5</option>
                                        <option value="4.0" {{ old('investment_rating') == '4.0' ? 'selected' : '' }}>4.0</option>
                                        <option value="3.5" {{ old('investment_rating') == '3.5' ? 'selected' : '' }}>3.5</option>
                                        <option value="3.0" {{ old('investment_rating') == '3.0' ? 'selected' : '' }}>3.0</option>
                                        <option value="2.5" {{ old('investment_rating') == '2.5' ? 'selected' : '' }}>2.5</option>
                                        <option value="2.0" {{ old('investment_rating') == '2.0' ? 'selected' : '' }}>2.0</option>
                                        <option value="1.5" {{ old('investment_rating') == '1.5' ? 'selected' : '' }}>1.5</option>
                                        <option value="1.0" {{ old('investment_rating') == '1.0' ? 'selected' : '' }}>1.0</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="sort_order">Sort Order</label>
                                    <input type="number" class="form-control" id="sort_order" name="sort_order" value="{{ old('sort_order', 0) }}" min="0">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select class="form-control" id="status" name="status">
                                        <option value="1" {{ old('status', '1') == '1' ? 'selected' : '' }}>Active</option>
                                        <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Inactive</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="contact_phone">Contact Phone</label>
                                    <input type="text" class="form-control" id="contact_phone" name="contact_phone" value="{{ old('contact_phone') }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="contact_email">Contact Email</label>
                                    <input type="email" class="form-control" id="contact_email" name="contact_email" value="{{ old('contact_email') }}">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="property_url">Property URL</label>
                            <input type="url" class="form-control" id="property_url" name="property_url" value="{{ old('property_url') }}" placeholder="https://example.com/property-details">
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="4">{{ old('description') }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" class="form-control-file" id="image" name="image" accept="image/*">
                            <small class="form-text text-muted">Upload image (JPEG, PNG, JPG, GIF, WEBP). Max size: 2MB</small>
                        </div>

                        <!-- SEO Section -->
                        <div class="card mt-4">
                            <div class="card-header">
                                <h5 class="card-title mb-0">SEO Settings</h5>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="meta_title">Meta Title</label>
                                    <input type="text" class="form-control" id="meta_title" name="meta_title" value="{{ old('meta_title') }}">
                                </div>

                                <div class="form-group">
                                    <label for="meta_description">Meta Description</label>
                                    <textarea class="form-control" id="meta_description" name="meta_description" rows="3">{{ old('meta_description') }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="meta_keywords">Meta Keywords</label>
                                    <textarea class="form-control" id="meta_keywords" name="meta_keywords" rows="2">{{ old('meta_keywords') }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Create Investment Opportunity</button>
                        <a href="{{ route('investment-opportunities.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
// Auto-generate slug from title
document.getElementById('title').addEventListener('input', function() {
    const title = this.value;
    const slug = title.toLowerCase()
        .replace(/[^a-z0-9 -]/g, '')
        .replace(/\s+/g, '-')
        .replace(/-+/g, '-')
        .trim('-');
    document.getElementById('slug').value = slug;
});
</script>
@endsection
