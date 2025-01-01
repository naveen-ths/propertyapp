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
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header border-0">
                            <h3 class="card-title">Latest Property Query</h3>
                            <div class="card-tools">
                                <a href="#" class="btn btn-tool btn-sm">
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
                                        <th>Added at</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Arun</td>
                                        <td>
                                            Property 1
                                        </td>
                                        <td>
                                            1234567980
                                        </td>
                                        <td>
                                            25/12/2024
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Arun</td>
                                        <td>
                                            Property 1
                                        </td>
                                        <td>
                                            1234567980
                                        </td>
                                        <td>
                                            25/12/2024
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Arun</td>
                                        <td>
                                            Property 1
                                        </td>
                                        <td>
                                            1234567980
                                        </td>
                                        <td>
                                            25/12/2024
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Arun</td>
                                        <td>
                                            Property 1
                                        </td>
                                        <td>
                                            1234567980
                                        </td>
                                        <td>
                                            25/12/2024
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Arun</td>
                                        <td>
                                            Property 1
                                        </td>
                                        <td>
                                            1234567980
                                        </td>
                                        <td>
                                            25/12/2024
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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