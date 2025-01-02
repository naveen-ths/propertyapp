@extends('layouts.admin')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Property Add</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Property Update</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <form id="update_property_form" action="{{ route('property.update', $property->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">General Details</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="property_title">{{ __('Property Title') }} </label>
                            <input 
                                type="text" 
                                value="{{$property->property_title}}"
                                name="property_title" 
                                class="form-control @error('property_title') is-invalid @enderror" 
                                id="property_title" 
                                placeholder="Enter Property name">
                            @error('property_title')
                            <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="property_slug">{{ __('Property Slug') }} </label>
                            <input 
                                type="text" 
                                value="{{$property->property_slug}}"
                                name="property_slug" 
                                class="form-control @error('property_slug') is-invalid @enderror" 
                                id="property_slug" 
                                placeholder="Enter Property Slug">
                            @error('property_slug')
                            <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="property_logo">{{ __('Property Logo') . '*' }}</label>
                            <br>
                            @isset($property->property_logo)
                            <div class="shrink-0 my-2">
                                <span>File Exists: </span>
                                <div class="thumb-preview ">
                                    <a href="{{ Storage::url($property->property_logo) }}">
                                        <img width="40%" src="{{ asset('storage/'.$property->property_logo) }}" alt="..." class="img-thumbnail">
                                    </a>
                                </div>
                            </div>
                            @else
                            <div class="thumb-preview ">
                                <img src="{{ asset('assets/admin/dist/img/noimage.jpg') }}" alt="..."
                                     class="uploaded-img">
                            </div>
                            @endisset
                            <div class="mt-3">
                                <div role="button" class="btn btn-primary btn-sm upload-btn">
                                    <input type="file" class="img-input" name="property_logo" accept="image/png, image/jpeg">
                                </div>
                            </div>
<!--                            <input 
                                type="file" 
                                value="{{old('property_logo')}}"
                                name="property_logo" 
                                class="form-control @error('property_logo') is-invalid @enderror" 
                                id="property_logo" >-->
                            @error('property_logo')
                            <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="property_color">{{ __('Property Theme color') }} </label>
                            <input 
                                type="color" 
                                class="form-control col-sm-1 @error('property_color') is-invalid @enderror" 
                                id="bgcolor">
                            <input type="hidden" id="property_color" value="{{$property->property_color}}" name="property_color" />
                            @error('property_color')
                            <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="property_location">Property Location</label>
                            <input 
                                type="text" 
                                name="property_location" 
                                value="{{$property->property_location}}"
                                class="form-control @error('property_location') is-invalid @enderror" 
                                id="property_location" 
                                placeholder="Enter Property Location">
                            @error('property_location')
                            <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="property_price">Property Price</label>
                            <input 
                                type="text" 
                                name="property_price" 
                                value="{{$property->property_price}}"
                                class="form-control @error('property_price') is-invalid @enderror" 
                                id="property_price" 
                                placeholder="Enter Property Price">
                            @error('property_price')
                            <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="property_brochure">Property brochure</label>
                            <input 
                                type="text" 
                                name="property_brochure" 
                                value="{{$property->property_brochure}}"
                                class="form-control @error('property_brochure') is-invalid @enderror" 
                                id="property_brochure" 
                                placeholder="Enter Property brochure URL">
                            @error('property_brochure')
                            <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="property_video_url">Property Video URL:</label>
                            <input 
                                type="text" 
                                name="property_video_url" 
                                value="{{$property->property_video_url}}"
                                class="form-control @error('property_video_url') is-invalid @enderror" 
                                id="property_video_url" 
                                placeholder="Enter Property video URL">
                            @error('property_video_url')
                            <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="virtual_site_tour">Property virtual site tour link:</label>
                            <input 
                                type="text" 
                                name="virtual_site_tour" 
                                value="{{$property->virtual_site_tour}}"
                                class="form-control @error('virtual_site_tour') is-invalid @enderror" 
                                id="virtual_site_tour" 
                                placeholder="Enter virtual site tour">
                            @error('virtual_site_tour')
                            <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="property_rera_no">Property Rera No.</label>
                            <input 
                                type="text" 
                                name="property_rera_no" 
                                value="{{$property->property_rera_no}}"
                                class="form-control @error('property_rera_no') is-invalid @enderror" 
                                id="property_rera_no" 
                                placeholder="Enter Property Rera No.">
                            @error('property_rera_no')
                            <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="banner_content">Banner content</label>
                            <!--<div id="summernote"></div>-->
                            <textarea 
                                class="summernote @error('banner_content') is-invalid @enderror" 
                                style="height:150px" 
                                name="banner_content" 
                                id="banner_content" >{{$property->banner_content}}</textarea>
                            @error('banner_content')
                            <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="property_desc">Project Description</label>
                            <!--<div id="summernote"></div>-->
                            <textarea 
                                class="summernote @error('property_desc') is-invalid @enderror" 
                                style="height:150px" 
                                name="property_desc" 
                                id="property_desc" 
                                placeholder="Property description">{{$property->property_desc}}</textarea>
                            @error('property_desc')
                            <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="property_short_desc">Project Short Description</label>
                            <textarea 
                                class="form-control @error('property_short_desc') is-invalid @enderror" 
                                style="height:150px" 
                                name="property_short_desc" 
                                id="property_short_desc" >{{$property->property_short_desc}}</textarea>
                            @error('property_short_desc')
                            <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="property_highlights">Project Highlights</label>
                            <!--<div id="summernote"></div>-->
                            <textarea 
                                class="summernote @error('property_highlights') is-invalid @enderror" 
                                style="height:150px" 
                                name="property_highlights" 
                                id="property_highlights" 
                                placeholder="Property highlights">{{$property->property_highlights}}</textarea>
                            @error('property_highlights')
                            <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="builder_name">Developer Name</label>
                            <input 
                                type="text" 
                                value="{{$property->builder_name}}"
                                name="builder_name" 
                                class="form-control @error('builder_name') is-invalid @enderror" 
                                id="builder_name" 
                                placeholder="Enter Developer Name">
                            @error('builder_name')
                            <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="about_developer">Developer About</label>
                            <textarea 
                                class="summernote @error('about_developer') is-invalid @enderror" 
                                style="height:150px" 
                                name="about_developer" 
                                id="about_developer" 
                                placeholder="Developer About">{{$property->about_developer}}</textarea>
                            @error('about_developer')
                            <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="map_embed_url">Property Map URL</label>
                            <input 
                                type="text" 
                                name="map_embed_url" 
                                value="{{$property->map_embed_url}}"
                                class="form-control @error('map_embed_url') is-invalid @enderror" 
                                id="map_embed_url">
                            @error('map_embed_url')
                            <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="latitude">Latitude</label>
                            <input 
                                type="text" 
                                name="latitude" 
                                value="{{$property->latitude}}"
                                class="form-control @error('latitude') is-invalid @enderror" 
                                id="latitude">
                            @error('latitude')
                            <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="longitude">Longitude</label>
                            <input 
                                type="text" 
                                name="longitude" 
                                value="{{$property->longitude}}"
                                class="form-control @error('longitude') is-invalid @enderror" 
                                id="longitude" >
                            @error('longitude')
                            <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status"  id="status" class="form-control custom-select">
                                <option selected="" disabled="">Select one</option>
                                <option value="1" {{ "1" == $property->status ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ "0" == $property->status ? 'selected' : '' }}>Inactive</option>
                            </select>
                            @error('status')
                            <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Upload Banners</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="banner_1">Banner 1</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input 
                                        type="file" 
                                        name="banners[]" 
                                        class="custom-file-input @error('banner_1') is-invalid @enderror" 
                                        id="banner_1" >
                                    <label class="custom-file-label" for="banner_1">Choose file</label>
                                </div>
                            </div>
                            @error('banner_1')
                            <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="banner_2">Banner 2</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input 
                                        type="file" 
                                        name="banners[]" 
                                        class="custom-file-input @error('banner_2') is-invalid @enderror" 
                                        id="banner_2" >
                                    <label class="custom-file-label" for="banner_2">Choose file</label>
                                </div>
                            </div>
                            @error('banner_1')
                            <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="banner_3">Banner 3</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input 
                                        type="file" 
                                        name="banners[]" 
                                        class="custom-file-input @error('banner_3') is-invalid @enderror" 
                                        id="banner_3" >
                                    <label class="custom-file-label" for="banner_3">Choose file</label>
                                </div>
                            </div>
                            @error('banner_3')
                            <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="row">
                                @isset($slides[0]->image)
                                <div class="thumb-preview col-sm-4">
                                    <span>Banner 1: </span><br />
                                    <img width="40%" src="{{ asset('storage/'.$slides[0]->image) }}" alt="..."
                                         class="uploaded-img">
                                </div>
                                @else
                                <div class="thumb-preview col-sm-4">
                                    <span>Banner 1: </span><br />
                                    <img src="{{ asset('assets/admin/dist/img/noimage.jpg') }}" alt="..."
                                         class="uploaded-img">
                                </div>
                                @endisset
                                @isset($slides[1]->image)
                                <div class="thumb-preview col-sm-4">
                                    <span>Banner 2: </span><br />
                                    <img width="40%" src="{{ asset('storage/'.$slides[1]->image) }}" alt="..."
                                         class="uploaded-img">
                                </div>
                                @else
                                <div class="thumb-preview col-sm-4">
                                    <span>Banner 2: </span><br />
                                    <img src="{{ asset('assets/admin/dist/img/noimage.jpg') }}" alt="..."
                                         class="uploaded-img">
                                </div>
                                @endisset
                                @isset($slides[2]->image)
                                <div class="thumb-preview col-sm-4">
                                    <span>Banner 3: </span><br />
                                    <img width="40%" src="{{ asset('storage/'.$slides[2]->image) }}" alt="..."
                                         class="uploaded-img">
                                </div>
                                @else
                                <div class="thumb-preview col-sm-4">
                                    <span>Banner 3: </span><br />
                                    <img src="{{ asset('assets/admin/dist/img/noimage.jpg') }}" alt="..."
                                         class="uploaded-img">
                                </div>
                                @endisset
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="banner_content">Banner content</label>
                            <!--<div id="summernote"></div>-->
                            <textarea 
                                class="summernote @error('banner_content') is-invalid @enderror" 
                                style="height:150px" 
                                name="banner_content" 
                                id="banner_content" 
                                placeholder="Banner content">{{$property->banner_content}}</textarea>
                            @error('banner_content')
                            <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="sidebar_content">Sidebar Register Content</label>
                            <!--<div id="summernote"></div>-->
                            <textarea 
                                class="summernote @error('sidebar_content') is-invalid @enderror" 
                                style="height:150px" 
                                name="sidebar_content" 
                                id="sidebar_content" 
                                placeholder="Banner content">{{$property->sidebar_content}}</textarea>
                            @error('sidebar_content')
                            <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Meta Details</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="meta_title">Meta Title</label>
                            <input 
                                type="text" 
                                name="meta_title" 
                                value="{{$property->meta_title}}"
                                class="form-control @error('meta_title') is-invalid @enderror" 
                                id="meta_title" >
                            @error('meta_title')
                            <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="meta_keywords">Meta Keywords</label>
                            <input 
                                type="text" 
                                name="meta_keywords" 
                                value="{{$property->meta_keywords}}"
                                class="form-control @error('meta_keywords') is-invalid @enderror" 
                                id="meta_keywords" >
                            @error('meta_keywords')
                            <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="meta_description">Meta Description</label>
                            <input 
                                type="text" 
                                name="meta_description" 
                                value="{{$property->meta_description}}"
                                class="form-control @error('meta_description') is-invalid @enderror" 
                                id="meta_description" >
                            @error('meta_description')
                            <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="property_footer_content">Property Footer Content</label>
                            <!--<div id="summernote"></div>-->
                            <textarea 
                                class="summernote @error('property_footer_content') is-invalid @enderror" 
                                style="height:150px" 
                                name="property_footer_content" 
                                id="property_footer_content" 
                                placeholder="Property Content">{{$property->property_footer_content}}</textarea>
                            @error('property_footer_content')
                            <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <a href="#" class="btn btn-secondary">Cancel</a>
                <input type="submit" value="Update details" class="btn btn-success float-right">
            </div>
        </div>
    </form>
</section>
@endsection