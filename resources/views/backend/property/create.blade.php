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
                    <li class="breadcrumb-item active">Property Add</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <form id="create_property_form" action="{{ route('property.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
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
                                value="{{old('property_title')}}"
                                name="property_title" 
                                class="form-control @error('property_title') is-invalid @enderror" 
                                id="property_title" 
                                placeholder="Enter Property name">
                            @error('property_title')
                            <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="property_slug">{{ __('Property Slug') }} (Without spaces)</label>
                            <input 
                                type="text" 
                                value="{{old('property_slug')}}"
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
                            <div class="thumb-preview">
<!--                                <img src="{{ asset('assets/admin/dist/img/noimage.jpg') }}" alt="..."
                                     class="uploaded-img">-->
                            </div>

                            <div class="mt-3">
                                <div role="button" class="btn btn-primary btn-sm upload-btn">
                                    <input type="file" class="img-input" id="property_logo" name="property_logo" accept="image/*">
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
                                type="text" 
                                name="property_color"
                                value="{{old('property_color')}}"
                                class="form-control @error('property_color') is-invalid @enderror" 
                                id="property_color">
                            @error('property_color')
                            <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="mobile_no">{{ __('Property Mobile Number') }} </label>
                            <input 
                                type="text" 
                                name="mobile_no"
                                value="{{old('mobile_no')}}"
                                class="form-control @error('mobile_no') is-invalid @enderror" 
                                id="mobile_no">
                            @error('mobile_no')
                            <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Banner Section</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="pre_launch_text">Pre launch Offer Text</label>
                            <input 
                                type="text" 
                                name="pre_launch_text" 
                                value="{{old('pre_launch_text')}}"
                                class="form-control @error('pre_launch_text') is-invalid @enderror" 
                                id="pre_launch_text" 
                                placeholder="Enter Pre launch Offer Text">
                            @error('pre_launch_text')
                            <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="property_location">Property Location</label>
                            <input 
                                type="text" 
                                name="property_location" 
                                value="{{old('property_location')}}"
                                class="form-control @error('property_location') is-invalid @enderror" 
                                id="property_location" 
                                placeholder="Enter Property Location">
                            @error('property_location')
                            <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="by_developer_text">Property By Developer Text</label>
                            <input 
                                type="text" 
                                name="by_developer_text" 
                                value="{{old('by_developer_text')}}"
                                class="form-control @error('by_developer_text') is-invalid @enderror" 
                                id="by_developer_text" 
                                placeholder="Enter Developer By Text">
                            @error('by_developer_text')
                            <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="property_exclusive_text">Property Exclusive Text</label>
                            <input 
                                type="text" 
                                name="property_exclusive_text" 
                                value="{{old('property_exclusive_text')}}"
                                class="form-control @error('property_exclusive_text') is-invalid @enderror" 
                                id="property_exclusive_text" 
                                placeholder="Enter Property Exclusive Text">
                            @error('property_exclusive_text')
                            <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="property_price">Property Start Price Text</label>
                            <input 
                                type="text" 
                                name="property_price" 
                                value="{{old('property_price')}}"
                                class="form-control @error('property_price') is-invalid @enderror" 
                                id="property_price" 
                                placeholder="Enter Property Price">
                            @error('property_price')
                            <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="banner-photo-add">Banner Images</label>
                            <input type="file" name="banners[]" multiple id="banner-photo-add" accept="image/*">
                            <p class="help-block"><i>Select multiple images</i></p>
                            <div class="banners"></div>

                        </div>

                        <div class="form-group">
                            <label for="banner_content">Left Side Banner buttons</label>
                            <div id="summernote"></div>
                            <textarea 
                                class="summernote @error('banner_content') is-invalid @enderror" 
                                style="height:150px" 
                                name="banner_content" 
                                id="banner_content" 
                                placeholder="Banner content">{{old('banner_content')}}</textarea>
                            @error('banner_content')
                            <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">About Project Section</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="property_short_desc">About us Subtitle</label>
                            <textarea 
                                class="form-control @error('property_short_desc') is-invalid @enderror" 
                                style="height:150px" 
                                name="property_short_desc" 
                                id="property_short_desc" 
                                placeholder="Property Short description">{{old('property_short_desc')}}</textarea>
                            @error('property_short_desc')
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
                                placeholder="Property description">{{old('property_desc')}}</textarea>
                            @error('property_desc')
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
                                placeholder="Property highlights">{{old('property_highlights')}}</textarea>
                            @error('property_highlights')
                            <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="property_video_url">Property Video URL(Youtube embeded code):</label>
                            <input 
                                type="text" 
                                name="property_video_url" 
                                value="{{old('property_video_url')}}"
                                class="form-control @error('property_video_url') is-invalid @enderror" 
                                id="property_video_url" 
                                placeholder="Enter Property video URL">
                            @error('property_video_url')
                            <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Price Section</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="complete_costing_details">{{ __('Complete Costing Details ') . '*' }}</label>
                            <br>
                            <div class="complete-costing-preview"></div>

                            <div class="mt-3">
                                <div role="button" class="btn btn-primary btn-sm upload-btn">
                                    <input type="file" class="img-input" id="complete_costing_details" name="complete_costing_details" accept="image/*">
                                </div>
                            </div>
<!--                            <input 
                                type="file" 
                                value="{{old('property_logo')}}"
                                name="property_logo" 
                                class="form-control @error('property_logo') is-invalid @enderror" 
                                id="property_logo" >-->
                            @error('complete_costing_details')
                            <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="cloneData">
                                <div class="row">
                                    <div class="col-md-2">
                                        <label for="flat_type">Flat type</label>
                                        <input 
                                            type="text" 
                                            name="flat_type[]" 
                                            class="form-control @error('flat_type') is-invalid @enderror" 
                                            id="flat_type" 
                                            placeholder="Enter Flat Type">
                                        @error('flat_type')
                                        <div class="form-text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-2">
                                        <label for="carpet_area">Carpet Area</label>
                                        <input 
                                            type="text" 
                                            name="carpet_area[]" 
                                            class="form-control @error('carpet_area') is-invalid @enderror" 
                                            id="carpet_area" 
                                            placeholder="Enter carpet area">
                                        @error('carpet_area')
                                        <div class="form-text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-2">
                                        <label for="flat_price">Price</label>
                                        <input 
                                            type="text" 
                                            name="flat_price[]" 
                                            class="form-control @error('flat_price') is-invalid @enderror" 
                                            id="flat_price" 
                                            placeholder="Enter Flat Price">
                                        @error('flat_price')
                                        <div class="form-text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-3">
                                        <label for="floor_image">Floor Image</label>
                                        <input 
                                            type="file" 
                                            accept="image/*"
                                            name="floor_image[]"
                                            class="form-control @error('floor_image') is-invalid @enderror" 
                                            id="floor_image" >
                                        @error('floor_image')
                                        <div class="form-text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <button type="button" id="addRow" class="btn btn-primary add-price mt-2">Add New</button>
                        </div>
                    </div>
                </div>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Site and Floor Plan Section</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="master_plan_image">{{ __('Master Plan Image') . '*' }}</label>
                            <br>
                            <div class="master_plan_image_preview"></div>

                            <div class="mt-3">
                                <div role="button" class="btn btn-primary btn-sm upload-btn">
                                    <input type="file" accept="image/*" class="img-input" id="master_plan_image" name="master_plan_image">
                                </div>
                            </div>
                            @error('master_plan_image')
                            <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label for="property_brochure">Property brochure</label>
                    <input 
                        type="text" 
                        name="property_brochure" 
                        value="{{old('property_brochure')}}"
                        class="form-control @error('property_brochure') is-invalid @enderror" 
                        id="property_brochure" 
                        placeholder="Enter Property brochure URL">
                    @error('property_brochure')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>


                <!--                <div class="form-group">
                                    <label for="latitude">Latitude</label>
                                    <input 
                                        type="text" 
                                        name="latitude" 
                                        value="{{old('latitude')}}"
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
                                        value="{{old('longitude')}}"
                                        class="form-control @error('longitude') is-invalid @enderror" 
                                        id="longitude" >
                                    @error('longitude')
                                    <div class="form-text text-danger">{{ $message }}</div>
                                    @enderror
                                </div>-->
                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status"  id="status" class="form-control custom-select">
                        <option selected="" disabled="">Select one</option>
                        <option value="1" {{ "1" === old('status') ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ "0" === old('status') ? 'selected' : '' }}>Inactive</option>
                    </select>
                    @error('status')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- /.card-body -->
                <!-- /.card -->
            </div>
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Sidebar Section Content</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--                                        <div class="form-group">
                                                                    <label for="banner_1">Banner 1</label>
                                                                    <div class="mt-3">
                                                                        <div role="button" class="btn btn-primary btn-sm upload-btn">
                                                                            <input type="file" class="img-input @error('banner_1') is-invalid @enderror" id="banner_1" name="banners[]">
                                                                        </div>
                                                                    </div>
                                                                    @error('banner_1')
                                                                    <div class="form-text text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="banner_2">Banner 2</label>
                                                                    <div class="mt-3">
                                                                        <div role="button" class="btn btn-primary btn-sm upload-btn">
                                                                            <input type="file" class="img-input @error('banner_2') is-invalid @enderror" id="banner_2" name="banners[]">
                                                                        </div>
                                                                    </div>
                                                                    @error('banner_2')
                                                                    <div class="form-text text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="banner_3">Banner 3</label>
                                                                    <div class="mt-3">
                                                                        <div role="button" class="btn btn-primary btn-sm upload-btn">
                                                                            <input type="file" class="img-input @error('banner_3') is-invalid @enderror" id="banner_3" name="banners[]">
                                                                        </div>
                                                                    </div>
                                                                    @error('banner_3')
                                                                    <div class="form-text text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                                <div class="banners"></div>
                                                                <div class="form-group">
                                                                    <label for="banner_content">Banner content</label>
                                                                    <div id="summernote"></div>
                                                                    <textarea 
                                                                        class="summernote @error('banner_content') is-invalid @enderror" 
                                                                        style="height:150px" 
                                                                        name="banner_content" 
                                                                        id="banner_content" 
                                                                        placeholder="Banner content">{{old('banner_content')}}</textarea>
                                                                    @error('banner_content')
                                                                    <div class="form-text text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>-->
                        <div class="form-group">
                            <label for="sidebar_content">Sidebar Register Content</label>
                            <div id="summernote"></div>
                            <textarea 
                                class="summernote @error('sidebar_content') is-invalid @enderror" 
                                style="height:150px" 
                                name="sidebar_content" 
                                id="sidebar_content" 
                                placeholder="Banner content">{{old('sidebar_content')}}</textarea>
                            @error('sidebar_content')
                            <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Amenities Section</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="property_amenities">Amenities (Enter with comma seprated like: swimming pool, kids pool )</label>
                            <input 
                                type="text" 
                                name="property_amenities" 
                                value="{{old('property_amenities')}}"
                                class="form-control @error('property_amenities') is-invalid @enderror" 
                                id="property_amenities" 
                                placeholder="Enter Property amenities in comma format">
                            @error('property_amenities')
                            <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Upload Gallery Image</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="gallery-photo-add">Select multiple images for gallery</label>

                            <input type="file" accept="image/*" class="form-control" name="gallery[]" multiple id="gallery-photo-add">
                        </div>
                        <div class="gallery"></div>
                    </div>
                </div>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Location Section</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="map_embed_url">Property Map URL</label>
                            <input 
                                type="text" 
                                name="map_embed_url" 
                                value="{{old('map_embed_url')}}"
                                class="form-control @error('map_embed_url') is-invalid @enderror" 
                                id="map_embed_url">
                            @error('map_embed_url')
                            <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="location_text">Locations Text</label>
                            <div class="cloneData1">
                                <div class="row mb-2">
                                    <div class="col-md-10">
                                        <input 
                                            type="text" 
                                            name="location_text[]" 
                                            class="form-control @error('location_text') is-invalid @enderror" 
                                            id="location_text" 
                                            placeholder="Enter Near Location Details">
                                        @error('location_text')
                                        <div class="form-text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <button type="button" id="addRow1" class="btn btn-primary add-location mt-2">Add New</button>
                        </div>
                    </div>
                </div>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Virtual Site Tour Section</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="virtual_site_tour">Property virtual site tour Image:</label>
                            <br>
                            <div class="thumb-preview-tour">
                            </div>

                            <div class="mt-3">
                                <div role="button" class="btn btn-primary btn-sm upload-btn">
                                    <input type="file" class="img-input" id="virtual_site_tour" name="virtual_site_tour" accept="image/*">
                                </div>
                            </div>
                            @error('virtual_site_tour')
                            <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Developer Details Section</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="builder_name">Developer Name</label>
                            <input 
                                type="text" 
                                value="{{old('builder_name')}}"
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
                                placeholder="Developer About">{{old('about_developer')}}</textarea>
                            @error('about_developer')
                            <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="property_rera_no">Property Rera No.</label>
                            <input 
                                type="text" 
                                name="property_rera_no" 
                                value="{{old('property_rera_no')}}"
                                class="form-control @error('property_rera_no') is-invalid @enderror" 
                                id="property_rera_no" 
                                placeholder="Enter Property Rera No.">
                            @error('property_rera_no')
                            <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Footer Section</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="property_footer_content">Property Footer Content</label>
                            <!--<div id="summernote"></div>-->
                            <textarea 
                                class="summernote @error('property_footer_content') is-invalid @enderror" 
                                style="height:150px" 
                                name="property_footer_content" 
                                id="property_footer_content" 
                                placeholder="Property Content">{{old('property_footer_content')}}</textarea>
                            @error('property_footer_content')
                            <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="card card-primary">
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
                                value="{{old('meta_title')}}"
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
                                value="{{old('meta_keywords')}}"
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
                                value="{{old('meta_description')}}"
                                class="form-control @error('meta_description') is-invalid @enderror" 
                                id="meta_description" >
                            @error('meta_description')
                            <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="social_meta_tags">Social Meta Tags</label>
                            <textarea 
                                class="form-control @error('social_meta_tags') is-invalid @enderror" 
                                style="height:150px" 
                                name="social_meta_tags" 
                                id="social_meta_tags" >{{old('social_meta_tags')}}</textarea>
                            @error('social_meta_tags')
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
            <div class="col-12 mb-2">
                <a href="#" class="btn btn-secondary">Cancel</a>
                <input type="submit" value="Submit" class="btn btn-success float-right">
            </div>
        </div>
    </form>
</section>
<script>
    $(document).on("change", "#bgcolor", function () {
        $('#property_color').val($(this).val());
    });
    $(function () {
        // Multiple images preview in browser
        var imagesPreview = function (input, placeToInsertImagePreview) {
            if (input.files) {
                var filesAmount = input.files.length;
                for (i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();
                    reader.onload = function (event) {
                        $($.parseHTML('<img class="img-fluid mr-2" width="200px" />')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                    }
                    reader.readAsDataURL(input.files[i]);
                }
            }
        };

        $('#property_logo').on('change', function () {
            imagesPreview(this, 'div.thumb-preview');
        });
        $('#virtual_site_tour').on('change', function () {
            imagesPreview(this, 'div.thumb-preview-tour');
        });
        $('#gallery-photo-add').on('change', function () {
            imagesPreview(this, 'div.gallery');
        });
        $('#banner-photo-add').on('change', function () {
            imagesPreview(this, 'div.banners');
        });
        $("#addRow").on('click', function () {
            let $cloneData = $('.cloneData .row:first').clone();
            $cloneData.append('<div class="col-sm-2"><button type="button" class="btn btn-danger button-remove mt-4">Remove</button>');
            $cloneData.appendTo(".cloneData");
        });

        // remove row
        $(document).on("click", ".button-remove", function () {
            $(this).closest(".row").remove();
        });

        $("#addRow1").on('click', function () {
            let $cloneData = $('.cloneData1 .row:first').clone();
            $cloneData.append('<div class="col-sm-2"><button type="button" class="btn btn-danger button-remove1">Remove</button>');
            $cloneData.appendTo(".cloneData1");
        });

        // remove row
        $(document).on("click", ".button-remove1", function () {
            $(this).closest(".row").remove();
        });
    });
</script>
@endsection