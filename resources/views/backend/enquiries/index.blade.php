@extends('layouts.admin')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Projects</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Enquiries</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Enquiries</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body p-0">
            @if(session('success'))
            <div class="alert alert-success" role="alert">{{ session('success') }}</div>
            @endif
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 5%">
                            Sr No.
                        </th>
                        <th style="width: 20%">
                            Project URL
                        </th>
                        <th style="width: 20%">
                            User Name
                        </th>
                        <th style="width: 20%">
                            User Mobile
                        </th>
                        <th style="width: 30%">
                            User Email
                        </th>
                        <th style="width: 25%">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($enquiries as $key => $enq)
                    <tr>
                        <td>
                            {{ $enq->id }}
                        </td>
                        <td>
                            <a target="_blank" href="{{$enq->property_url}}">
                                {{ $enq->property_url }}
                            </a>
                        </td>
                        <td>
                            {{ $enq->name }}
                        </td>
                        <td>
                            {{ $enq->mobile }}
                        </td>
                        <td>
                            {{ $enq->email }}
                        </td>
                        <td class="project-actions text-right">
                            <form class="d-inline-block" action="{{ route('enquiries.destroy',$enq->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash-alt"></i>
                                    {{ __('Delete') }}
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td class="text-center" colspan="6">There are no data available.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->
@endsection