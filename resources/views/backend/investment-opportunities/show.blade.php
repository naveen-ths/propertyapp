@extends('layouts.admin')

@section('title', 'Investment Opportunity Details')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Investment Opportunity Details</h3>
            <div class="card-tools">
                <a href="{{ route('investment-opportunities.edit', $opportunity->id) }}" class="btn btn-primary">
                    <i class="fas fa-edit"></i> Edit
                </a>
                <a href="{{ route('investment-opportunities.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Back to List
                </a>
            </div>
        </div>
        
        <div class="card-body">
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label><strong>Title:</strong></label>
                        <p>{{ $opportunity->title }}</p>
                    </div>
                    
                    <div class="form-group">
                        <label><strong>Slug:</strong></label>
                        <p>{{ $opportunity->slug }}</p>
                    </div>
                    
                    <div class="form-group">
                        <label><strong>Description:</strong></label>
                        <p>{{ $opportunity->description ?: 'No description provided' }}</p>
                    </div>
                    
                    @if($opportunity->image)
                    <div class="form-group">
                        <label><strong>Image:</strong></label>
                        <div class="mt-2">
                            <img src="{{ $opportunity->image_url }}" alt="{{ $opportunity->title }}" class="img-thumbnail" width="300">
                        </div>
                    </div>
                    @endif
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><strong>Location:</strong></label>
                                <p>{{ $opportunity->location }}</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><strong>Property Type:</strong></label>
                                <p>{{ $opportunity->property_type ?: 'Not specified' }}</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><strong>Price Range:</strong></label>
                                <p>{{ $opportunity->price_range ?: 'Not specified' }}</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><strong>Investment Rating:</strong></label>
                                <p>
                                    {!! $opportunity->star_rating !!}
                                    ({{ $opportunity->investment_rating }}/5.0)
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label><strong>Developer Name:</strong></label>
                        <p>{{ $opportunity->developer_name ?: 'Not specified' }}</p>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><strong>Contact Phone:</strong></label>
                                <p>{{ $opportunity->contact_phone ?: 'Not provided' }}</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><strong>Contact Email:</strong></label>
                                <p>{{ $opportunity->contact_email ?: 'Not provided' }}</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label><strong>Property URL:</strong></label>
                        <p>
                            @if($opportunity->property_url)
                                <a href="{{ $opportunity->property_url }}" target="_blank">{{ $opportunity->property_url }}</a>
                            @else
                                Not provided
                            @endif
                        </p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="form-group">
                        <label><strong>Sort Order:</strong></label>
                        <p>{{ $opportunity->sort_order }}</p>
                    </div>
                    
                    <div class="form-group">
                        <label><strong>Status:</strong></label>
                        <p>
                            @if($opportunity->status)
                                <span class="badge badge-success">Active</span>
                            @else
                                <span class="badge badge-secondary">Inactive</span>
                            @endif
                        </p>
                    </div>
                    
                    <div class="form-group">
                        <label><strong>Created At:</strong></label>
                        <p>{{ $opportunity->created_at->format('M d, Y h:i A') }}</p>
                    </div>
                    
                    <div class="form-group">
                        <label><strong>Updated At:</strong></label>
                        <p>{{ $opportunity->updated_at->format('M d, Y h:i A') }}</p>
                    </div>
                    
                    <hr>
                    <h5>SEO Settings</h5>
                    
                    <div class="form-group">
                        <label><strong>Meta Title:</strong></label>
                        <p>{{ $opportunity->meta_title ?: 'Not set' }}</p>
                    </div>
                    
                    <div class="form-group">
                        <label><strong>Meta Description:</strong></label>
                        <p>{{ $opportunity->meta_description ?: 'Not set' }}</p>
                    </div>
                    
                    <div class="form-group">
                        <label><strong>Meta Keywords:</strong></label>
                        <p>{{ $opportunity->meta_keywords ?: 'Not set' }}</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="card-footer">
            <a href="{{ route('investment-opportunities.edit', $opportunity->id) }}" class="btn btn-primary">
                <i class="fas fa-edit"></i> Edit
            </a>
            <a href="{{ route('investment-opportunities.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back to List
            </a>
            <button type="button" class="btn btn-danger" onclick="deleteOpportunity({{ $opportunity->id }})">
                <i class="fas fa-trash"></i> Delete
            </button>
        </div>
    </div>
</div>

<script>
function deleteOpportunity(id) {
    if (confirm('Are you sure you want to delete this investment opportunity?')) {
        const form = document.createElement('form');
        form.method = 'POST';
        form.action = `/admin/investment-opportunities/${id}`;
        
        const csrfToken = document.createElement('input');
        csrfToken.type = 'hidden';
        csrfToken.name = '_token';
        csrfToken.value = '{{ csrf_token() }}';
        
        const methodInput = document.createElement('input');
        methodInput.type = 'hidden';
        methodInput.name = '_method';
        methodInput.value = 'DELETE';
        
        form.appendChild(csrfToken);
        form.appendChild(methodInput);
        
        document.body.appendChild(form);
        form.submit();
    }
}
</script>
@endsection
