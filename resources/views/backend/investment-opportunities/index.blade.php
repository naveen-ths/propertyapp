@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Investment Opportunities</h3>
                    <div class="card-tools">
                        <a href="{{ route('investment-opportunities.create') }}" class="btn btn-primary btn-sm">
                            <i class="fas fa-plus"></i> Add New Investment Opportunity
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Location</th>
                                    <th>Price Range</th>
                                    <th>Developer</th>
                                    <th>Rating</th>
                                    <th>Status</th>
                                    <th>Sort Order</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($opportunities as $opportunity)
                                    <tr>
                                        <td>{{ $opportunity->id }}</td>
                                        <td>
                                            @if($opportunity->image_url)
                                                <img src="{{ $opportunity->image_url }}" alt="{{ $opportunity->title }}" class="img-thumbnail" style="width: 60px; height: 60px;">
                                            @else
                                                <span class="text-muted">No Image</span>
                                            @endif
                                        </td>
                                        <td>{{ $opportunity->title }}</td>
                                        <td>{{ $opportunity->location }}</td>
                                        <td>{{ $opportunity->price_range }}</td>
                                        <td>{{ $opportunity->developer_name }}</td>
                                        <td>
                                            <div class="rating">
                                                {!! $opportunity->star_rating !!}
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge badge-{{ $opportunity->status ? 'success' : 'danger' }}">
                                                {{ $opportunity->status ? 'Active' : 'Inactive' }}
                                            </span>
                                        </td>
                                        <td>{{ $opportunity->sort_order }}</td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="{{ route('investment-opportunities.show', $opportunity) }}" class="btn btn-info btn-sm">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a href="{{ route('investment-opportunities.edit', $opportunity) }}" class="btn btn-warning btn-sm">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="{{ route('investment-opportunities.destroy', $opportunity) }}" method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this investment opportunity?')">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="10" class="text-center">No investment opportunities found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="d-flex justify-content-center">
                        {{ $opportunities->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.rating i {
    color: #ffc107;
    font-size: 14px;
}
</style>
@endsection
