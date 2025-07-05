@extends('layouts.admin')

@section('title', 'Edit Investment Opportunity')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edit Investment Opportunity</h3>
            <div class="card-tools">
                <a href="{{ route('investment-opportunities.index') }}" class="btn btn-primary">
                    <i class="fas fa-arrow-left"></i> Back to List
                </a>
            </div>
        </div>
        
        <form action="{{ route('investment-opportunities.update', $opportunity->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="title">Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" 
                                   id="title" name="title" value="{{ old('title', $opportunity->title) }}" required>
                            @error('title')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="slug">Slug <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('slug') is-invalid @enderror" 
                                   id="slug" name="slug" value="{{ old('slug', $opportunity->slug) }}" required>
                            @error('slug')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" 
                                      id="description" name="description" rows="4">{{ old('description', $opportunity->description) }}</textarea>
                            @error('description')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" 
                                   id="image" name="image" accept="image/*">
                            @error('image')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                            @if($opportunity->image)
                                <div class="mt-2">
                                    <img src="{{ $opportunity->image_url }}" alt="Current Image" class="img-thumbnail" width="200">
                                </div>
                            @endif
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="location">Location <span class="text-danger">*</span></label>
                                    <select class="form-control @error('location') is-invalid @enderror" 
                                            id="location" name="location" required>
                                        <option value="">Select Location</option>
                                        <option value="Mumbai" {{ old('location', $opportunity->location) == 'Mumbai' ? 'selected' : '' }}>Mumbai</option>
                                        <option value="Pune" {{ old('location', $opportunity->location) == 'Pune' ? 'selected' : '' }}>Pune</option>
                                        <option value="Bangalore" {{ old('location', $opportunity->location) == 'Bangalore' ? 'selected' : '' }}>Bangalore</option>
                                    </select>
                                    @error('location')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="property_type">Property Type</label>
                                    <select class="form-control @error('property_type') is-invalid @enderror" 
                                            id="property_type" name="property_type">
                                        <option value="">Select Property Type</option>
                                        <option value="Residential" {{ old('property_type', $opportunity->property_type) == 'Residential' ? 'selected' : '' }}>Residential</option>
                                        <option value="Commercial" {{ old('property_type', $opportunity->property_type) == 'Commercial' ? 'selected' : '' }}>Commercial</option>
                                        <option value="Mixed" {{ old('property_type', $opportunity->property_type) == 'Mixed' ? 'selected' : '' }}>Mixed</option>
                                    </select>
                                    @error('property_type')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="price_range">Price Range</label>
                                    <input type="text" class="form-control @error('price_range') is-invalid @enderror" 
                                           id="price_range" name="price_range" value="{{ old('price_range', $opportunity->price_range) }}" 
                                           placeholder="e.g., ₹50L - ₹1Cr">
                                    @error('price_range')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="investment_rating">Investment Rating</label>
                                    <select class="form-control @error('investment_rating') is-invalid @enderror" 
                                            id="investment_rating" name="investment_rating">
                                        <option value="5.0" {{ old('investment_rating', $opportunity->investment_rating) == '5.0' ? 'selected' : '' }}>5.0 Stars</option>
                                        <option value="4.5" {{ old('investment_rating', $opportunity->investment_rating) == '4.5' ? 'selected' : '' }}>4.5 Stars</option>
                                        <option value="4.0" {{ old('investment_rating', $opportunity->investment_rating) == '4.0' ? 'selected' : '' }}>4.0 Stars</option>
                                        <option value="3.5" {{ old('investment_rating', $opportunity->investment_rating) == '3.5' ? 'selected' : '' }}>3.5 Stars</option>
                                        <option value="3.0" {{ old('investment_rating', $opportunity->investment_rating) == '3.0' ? 'selected' : '' }}>3.0 Stars</option>
                                    </select>
                                    @error('investment_rating')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="developer_name">Developer Name</label>
                            <input type="text" class="form-control @error('developer_name') is-invalid @enderror" 
                                   id="developer_name" name="developer_name" value="{{ old('developer_name', $opportunity->developer_name) }}">
                            @error('developer_name')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="contact_phone">Contact Phone</label>
                                    <input type="text" class="form-control @error('contact_phone') is-invalid @enderror" 
                                           id="contact_phone" name="contact_phone" value="{{ old('contact_phone', $opportunity->contact_phone) }}">
                                    @error('contact_phone')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="contact_email">Contact Email</label>
                                    <input type="email" class="form-control @error('contact_email') is-invalid @enderror" 
                                           id="contact_email" name="contact_email" value="{{ old('contact_email', $opportunity->contact_email) }}">
                                    @error('contact_email')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="property_url">Property URL</label>
                            <input type="url" class="form-control @error('property_url') is-invalid @enderror" 
                                   id="property_url" name="property_url" value="{{ old('property_url', $opportunity->property_url) }}">
                            @error('property_url')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="sort_order">Sort Order</label>
                            <input type="number" class="form-control @error('sort_order') is-invalid @enderror" 
                                   id="sort_order" name="sort_order" value="{{ old('sort_order', $opportunity->sort_order) }}" min="0">
                            @error('sort_order')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="status" name="status" 
                                       value="1" {{ old('status', $opportunity->status) ? 'checked' : '' }}>
                                <label class="form-check-label" for="status">
                                    Active
                                </label>
                            </div>
                        </div>
                        
                        <hr>
                        <h5>SEO Settings</h5>
                        
                        <div class="form-group">
                            <label for="meta_title">Meta Title</label>
                            <input type="text" class="form-control @error('meta_title') is-invalid @enderror" 
                                   id="meta_title" name="meta_title" value="{{ old('meta_title', $opportunity->meta_title) }}">
                            @error('meta_title')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="meta_description">Meta Description</label>
                            <textarea class="form-control @error('meta_description') is-invalid @enderror" 
                                      id="meta_description" name="meta_description" rows="3">{{ old('meta_description', $opportunity->meta_description) }}</textarea>
                            @error('meta_description')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="meta_keywords">Meta Keywords</label>
                            <textarea class="form-control @error('meta_keywords') is-invalid @enderror" 
                                      id="meta_keywords" name="meta_keywords" rows="3">{{ old('meta_keywords', $opportunity->meta_keywords) }}</textarea>
                            @error('meta_keywords')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('investment-opportunities.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>

<script>
document.getElementById('title').addEventListener('input', function() {
    const title = this.value;
    const slug = title.toLowerCase()
        .replace(/[^a-z0-9 -]/g, '')
        .replace(/\s+/g, '-')
        .replace(/-+/g, '-');
    document.getElementById('slug').value = slug;
});
</script>
@endsection
