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
                    <li class="breadcrumb-item active">Properties</li>
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
            <h3 class="card-title">Properties</h3>

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
                            Project Name
                        </th>
                        <th style="width: 20%">
                            Project Image
                        </th>
                        <th style="width: 30%">
                            Project Location
                        </th>
                        <th>
                            Project Price
                        </th>
                        <th style="width: 8%" class="text-center">
                            Status
                        </th>
                        <th style="width: 25%">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($properties as $key => $property)
                    <tr>
                        <td>
                            {{ $property->id }}
                        </td>
                        <td>
                            <a target="_blank" href="{{ route('frontend.property.details', ['slug' => $property->property_slug]) }}">
                                {{ $property->property_title }}
                            </a>
                        </td>
                        <td>
                            @isset ($property->property_logo)
                            <span>
                                <small> | <a href="{{ Storage::url($property->property_logo) }}">File</a></small>
                            </span>
                            @endisset
                        </td>
                        <td>
                            {{ $property->property_location }}
                        </td>
                        <td class="project_progress">
                            <small>
                                {{ $property->property_price }}
                            </small>
                        </td>
                        <td class="project-state">
                            {{ $property->status == 1 ? "Active" : "Inactive" }}
                        </td>
                        <td class="project-actions text-right">
                            <!--                            <a class="btn btn-primary btn-sm" href="{{ route('property.show', $property->id) }}">
                                                            <i class="fas fa-folder">
                                                            </i>
                                                            View
                                                        </a>-->
                            <a class="btn btn-info btn-sm" href="{{ route('property.edit', $property->id) }}">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <form class="d-inline-block" action="{{ route('property.destroy',$property->id) }}" method="POST">
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
                        <td colspan="4">There are no data.</td>
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