@extends('layouts.admin')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Cities</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Cities</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Manage Cities</h3>
            <div class="card-tools">
                <a href="{{ route('cities.create') }}" class="btn btn-primary btn-sm">
                    <i class="fas fa-plus"></i> Add New City
                </a>
            </div>
        </div>
        <div class="card-body p-0">
            @if(session('success'))
                <div class="alert alert-success" role="alert">{{ session('success') }}</div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger" role="alert">{{ session('error') }}</div>
            @endif
            
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 5%">ID</th>
                        <th style="width: 25%">Title</th>
                        <th style="width: 25%">Slug</th>
                        <th style="width: 15%">Status</th>
                        <th style="width: 15%">Properties Count</th>
                        <th style="width: 15%">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($cities as $city)
                    <tr>
                        <td>{{ $city->id }}</td>
                        <td>{{ $city->title }}</td>
                        <td>{{ $city->slug }}</td>
                        <td>
                            @if($city->status)
                                <span class="badge badge-success">Active</span>
                            @else
                                <span class="badge badge-danger">Inactive</span>
                            @endif
                        </td>
                        <td>{{ $city->properties->count() }}</td>
                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('cities.show', $city->id) }}">
                                <i class="fas fa-eye"></i> View
                            </a>
                            <a class="btn btn-info btn-sm" href="{{ route('cities.edit', $city->id) }}">
                                <i class="fas fa-pencil-alt"></i> Edit
                            </a>
                            <form class="d-inline-block" action="{{ route('cities.destroy', $city->id) }}" method="POST" 
                                  onsubmit="return confirm('Are you sure you want to delete this city?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td class="text-center" colspan="6">No cities found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        <!-- Pagination -->
        <div class="card-footer clearfix">
            <div class="row">
                <div class="col-sm-12 col-md-5">
                    <div class="dataTables_info" role="status" aria-live="polite">
                        Showing {{ $cities->firstItem() ?? 0 }} to {{ $cities->lastItem() ?? 0 }} of {{ $cities->total() }} results
                    </div>
                </div>
                <div class="col-sm-12 col-md-7">
                    <div class="dataTables_paginate paging_simple_numbers float-right">
                        {{ $cities->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
