@extends('layouts.admin')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header border-0">
                            <h3 class="card-title">Latest Property Query</h3>
                            <div class="card-tools">
                                <a href="{{ route('enquiries.index') }}" class="btn btn-tool btn-sm" title="View All Enquiries">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('enquiries.export') }}" class="btn btn-tool btn-sm" title="Download Excel">
                                    <i class="fas fa-download"></i>
                                </a>
                                <a href="#" class="btn btn-tool btn-sm">
                                    <i class="fas fa-bars"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-striped table-valign-middle">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Property</th>
                                        <th>Mobile</th>
                                        <th>Email</th>
                                        <th>Added at</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($enquiries as $key => $enq)
                                    <tr>
                                        <td>
                                            {{ $enq->name }}
                                        </td>
                                        <td>
                                            <a target="_blank" href="{{$enq->property_url}}">
                                                {{ $enq->property_url }}
                                            </a>
                                        </td>
                                        <td>
                                            {{ $enq->mobile }}
                                        </td>
                                        <td>
                                            {{ $enq->email }}
                                        </td>
                                        <td>
                                            {{ $enq->created_at }}
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td class="text-center" colspan="5">There are no data available.</td>
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
                                        Showing {{ $enquiries->firstItem() ?? 0 }} to {{ $enquiries->lastItem() ?? 0 }} of {{ $enquiries->total() }} results
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-7">
                                    <div class="dataTables_paginate paging_simple_numbers float-right">
                                        {{ $enquiries->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    @endsection