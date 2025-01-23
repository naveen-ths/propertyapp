@extends('layouts.admin')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Property Update</h1>
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
                            <label for="property_slug">{{ __('Property Slug') }} (Without spaces)</label>
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
                                        <img width="40%" src="{{ asset('assets/img/property/propertylogo/'.$property->property_logo) }}" alt="..." class="uploaded-img img-thumbnail">
                                    </a>
                                </div>
                            </div>
                            @else
                            <div class="thumb-preview ">
                                <img src="{{ asset('assets/admin/dist/img/noimage.jpg') }}" alt="..."
                                     class="uploaded-img img-thumbnail">
                            </div>
                            @endisset
                            <div class="mt-3">
                                <div role="button" class="btn btn-primary btn-sm upload-btn">
                                    <input type="file" class="img-input" id="property_logo" name="property_logo" accept="image/png, image/jpeg">
                                </div>
                            </div>
                            @error('property_logo')
                            <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="property_favicon">{{ __('Property Favicon') . '*' }}</label>
                            <br>
                            @isset($property->property_favicon)
                            <div class="shrink-0 my-2">
                                <span>File Exists: </span>
                                <div class="thumb-preview ">
                                    <a href="{{ Storage::url($property->property_favicon) }}">
                                        <img width="40%" src="{{ asset('assets/img/property/propertyfavicon/'.$property->property_favicon) }}" alt="..." class="uploaded-img img-thumbnail">
                                    </a>
                                </div>
                            </div>
                            @else
                            <div class="favicon-preview">
                                <img src="{{ asset('assets/admin/dist/img/noimage.jpg') }}" alt="..."
                                     class="uploaded-img img-thumbnail">
                            </div>
                            @endisset
                            <div class="mt-3">
                                <div role="button" class="btn btn-primary btn-sm upload-btn">
                                    <input type="file" class="img-input" id="property_favicon" name="property_favicon" accept="image/*">
                                </div>
                            </div>
                            @error('property_favicon')
                            <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="property_color">{{ __('Property Theme color') }} </label>
                            <input 
                                type="text" 
                                value="{{$property->property_color}}"
                                name="property_color"
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
                                value="{{$property->mobile_no}}"
                                class="form-control @error('mobile_no') is-invalid @enderror" 
                                id="mobile_no">
                            @error('mobile_no')
                            <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
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
                                value="{{$property->pre_launch_text}}"
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
                                value="{{$property->property_location}}"
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
                                value="{{$property->by_developer_text}}"
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
                                value="{{$property->property_exclusive_text}}"
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
                                value="{{$property->property_price}}"
                                class="form-control @error('property_price') is-invalid @enderror" 
                                id="property_price" 
                                placeholder="Enter Property Price">
                            @error('property_price')
                            <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="banner-photo-add">Banner Images (Select mutiple images to upload images)</label>
                            <input type="file" accept="image/*" class="form-control" name="banners[]" multiple id="banner-photo-add">
                            <div class="col-lg-12 col-md-12 col-xs-12 xol-sm-12">
                                <output id="list"></output>
                            </div>
                            <div class="banners">
                                <div class="row">
                                @forelse ($slides as $key => $slide)
                                <div class="thumb-preview col-sm-4">
                                    <a href="javascript:void(0)" data-url="{{ route('property.bannerdelete', $slide->id) }}" class="btn btn-danger remove-banner">Delete</a>
                                    <img width="100%" src="{{ asset('assets/img/property/banners/'.$slide->image) }}" alt="..."
                                         class="uploaded-img">
                                </div>
                                @empty
                                <p>No Images Found.</p>
                                @endforelse
                            </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="banner_content">Left Side Banner buttons</label>
                            <div id="summernote"></div>
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
                                placeholder="Property Short description">{{$property->property_short_desc}}</textarea>
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
                                placeholder="Property description">{{$property->property_desc}}</textarea>
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
                                placeholder="Property highlights">{{$property->property_highlights}}</textarea>
                            @error('property_highlights')
                            <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="property_video_url">Property Video URL(Youtube embeded code):</label>
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
                                    <input type="file" accept="image/*" class="img-input" id="complete_costing_details" name="complete_costing_details">
                                </div>
                            </div>
                            @error('complete_costing_details')
                            <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <table class="table table-striped table-borderless border micro-price-table table-pricing">
                                <thead>
                                    <tr>
                                        <th scope="col" class="border border-bottom-0 mb-w">Type</th>
                                        <th scope="col" class="border border-bottom-0 mb-w">Carpet Area</th>
                                        <th scope="col" class="border border-bottom-0 border-right-0">Price</th>
                                        <th scope="col">Image:</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (!empty($floors)) {
                                        foreach ($floors as $floor) :
                                          if(isset($floor['flat_type'])) :
                                            ?>
                                              <tr> 
                                                <td class="border border-left-0 border-top-0 border-bottom-0 price-type"><?= $floor['flat_type'] ?></td> 
                                                <td class="border border-left-0 border-top-0 border-bottom-0 price-carpet"><?= $floor['carpet_area']; ?><small class="d-inline-block d-md-none">(Carpet Area)</small></td> 
                                                <td class="price-amt"><i class="mi mi-rs-light"></i> <?= $floor['flat_price']; ?></td>
                                                <td><img width="40%" src="{{ asset('assets/img/property/floorimage/'.$floor->image) }}" alt="..."></td>
                                              </tr>
                                          <?php endif;
                                        endforeach;
                                    }
                                    ?>
                                </tbody>
                            </table>
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
                            @isset($property->master_plan_image)
                            <div class="shrink-0 my-2">
                                <span>File Exists: </span>
                                <div class="thumb-preview ">
                                    <a href="{{ Storage::url($property->master_plan_image) }}">
                                        <img width="40%" src="{{ asset('assets/img/property/masterplanimage/'.$property->master_plan_image) }}" alt="..." class="img-thumbnail">
                                    </a>
                                </div>
                            </div>
                            @else
                            <div class="thumb-preview ">
                                <img src="{{ asset('assets/admin/dist/img/noimage.jpg') }}" alt="..."
                                     class="uploaded-img">
                            </div>
                            @endisset
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
                        value="{{$property->property_brochure}}"
                        class="form-control @error('property_brochure') is-invalid @enderror" 
                        id="property_brochure" 
                        placeholder="Enter Property brochure URL">
                    @error('property_brochure')
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
                        <div class="form-group">
                            <label for="sidebar_content">Sidebar Register Content</label>
                            <div id="summernote"></div>
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
                                value="{{$property->property_amenities}}"
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
                            <div class="row">
                              @forelse ($gallery as $key => $ga)
                            <div class="thumb-preview-gallery col-sm-4">
                                <span>Gallery: </span><br />
                                <a href="javascript:void(0)" data-url="{{ route('property.gallerydelete', $ga->id) }}" class="btn btn-danger remove-gallery">Delete</a>
                                <img width="40%" src="{{ asset('assets/img/property/gallery/'.$ga->image) }}" alt="..."
                                     class="uploaded-img">
                            </div>
                            @empty
                            <p>No Images Found.</p>
                            @endforelse
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
                                value="{{$property->map_embed_url}}"
                                class="form-control @error('map_embed_url') is-invalid @enderror" 
                                id="map_embed_url">
                            @error('map_embed_url')
                            <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="location_text">Locations Text</label>
                            <?php
                            $locationText = $property->location_text;
                            $locationTextArray = [];
                            if (!empty($locationText)) {
                              $locationTextArray = explode(",", $locationText);
                            }
                            ?>
                            <?php
                            $filteredArray = array_filter($locationTextArray, fn($value) => !is_null($value) && $value !== ' ');
                            foreach ($filteredArray as $key => $l) {
                              ?>
                              <div class="row location-box">
                                  <div class="col-sm-9 my-2">
                                      <?= $l; ?> 
                                  </div>
                                  <div class="col-sm-2 my-2">
                                      <a href="javascript:void(0)" data-val="<?= $l; ?>" data-id="{{ $property->id }}" class="btn btn-danger remove-location">Delete</a>
                                  </div>
                                  <input type="hidden" name="location_text[]" value="<?= $l; ?>" >
                              </div>
                              <?php
                            }
                            ?>
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
                            <label for="virtual_site_tour">Property virtual site tour image:</label>
                            @isset($property->virtual_site_tour)
                            <div class="shrink-0 my-2">
                                <span>File Exists: </span>
                                <div class="thumb-preview-tour">
                                    <a href="{{ Storage::url($property->virtual_site_tour) }}">
                                        <img width="40%" src="{{ asset('assets/img/property/virtualsitetour/'.$property->virtual_site_tour) }}" alt="..." class="uploaded-img img-thumbnail">
                                    </a>
                                </div>
                            </div>
                            @else
                            <div class="thumb-preview-tour">
                                <img src="{{ asset('assets/admin/dist/img/noimage.jpg') }}" alt="..."
                                     class="uploaded-img img-thumbnail">
                            </div>
                            @endisset

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
                                placeholder="Property Content">{{$property->property_footer_content}}</textarea>
                            @error('property_footer_content')
                            <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
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
                            <label for="social_meta_tags">Social Meta Tags</label>
                            <textarea 
                                class="form-control  @error('social_meta_tags') is-invalid @enderror" 
                                style="height:150px" 
                                name="social_meta_tags" 
                                id="social_meta_tags" >{{$property->social_meta_tags}}</textarea>
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
            <div class="col-12">
                <a href="#" class="btn btn-secondary">Cancel</a>
                <input type="submit" value="Update details" class="btn btn-success float-right">
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
                  var id = $(input.files[i]).attr('id') || 1;
                  console.log("ID",id)
                    var reader = new FileReader();
                    reader.onload = function (event) {
                        $($.parseHTML('<img class="img-fluid mr-2" width="200px" />')).attr({
                            'src' : event.target.result,
                            'data-id' : "img-" + id
                        }).appendTo(placeToInsertImagePreview);
                    }
                    reader.readAsDataURL(input.files[i]);
                }
            }
        };
        var singleImagesPreview = function (input, placeToInsertImagePreview) {
        console.log(input, placeToInsertImagePreview)
            if (input.files) {
                    var reader = new FileReader();
                    reader.onload = function (event) {
                       $(placeToInsertImagePreview).attr("src", event.target.result);
//                        $($.parseHTML('<img class="img-fluid mr-2" width="200px" />')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                    }
                    reader.readAsDataURL(input.files[0]);
            }
        };
        
        function deleteImage() { 
            var index = Array.from(document.getElementById('list').children).indexOf(event.target.parentNode)
            document.querySelector("#list").removeChild( document.querySelectorAll('#list span')[index]);
            totalFiles.splice(index, 1);
            console.log(totalFiles)
        }

        var totalFiles = [];
        function handleFileSelect(evt) {
            var files = evt.target.files; // FileList object

            // Loop through the FileList and render image files as thumbnails.
            for (var i = 0, f; f = files[i]; i++) {

              // Only process image files.
              if (!f.type.match('image.*')) {
                continue;
              }

              totalFiles.push(f)

              var reader = new FileReader();

              // Closure to capture the file information.
              reader.onload = (function(theFile) {
                return function(e) {
                  // Render thumbnail.
                  var span = document.createElement('span');
                  span.innerHTML = ['<img width=100 class="thumb" src="', e.target.result,
                                    '" title="', escape(theFile.name), '"/>', "<button onclick='deleteImage()'>delete</button>"].join('');

                  document.getElementById('list').insertBefore(span, null);
                };
              })(f);

              // Read in the image file as a data URL.
              reader.readAsDataURL(f);
            }
          }
        $('#property_logo').on('change', function () {
            singleImagesPreview(this, '.thumb-preview .uploaded-img');
        });
         $('#property_favicon').on('change', function () {
            singleImagesPreview(this, '.favicon-preview .uploaded-img');
        });
        $('#virtual_site_tour').on('change', function () {
            singleImagesPreview(this, '.thumb-preview-tour .uploaded-img');
        });
        $('#gallery-photo-add').on('change', function () {
            imagesPreview(this, 'div.gallery');
        });
//        $('#banner-photo-add').on('change', function () {
//            handleFileSelect(this, 'div.banners');
//        });
          document.getElementById('banner-photo-add').addEventListener('change', handleFileSelect, false);
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

        $.ajaxSetup({
            beforeSend: function(xhr) {
                xhr.setRequestHeader('X-CSRF-TOKEN', $('input[name="_token"]').val());
            }
        });

        /*------------------------------------------
        --------------------------------------------
        When click user on Delete Button
        --------------------------------------------
        --------------------------------------------*/
        $(document).on('click', '.remove-banner', function() {

            var userURL = $(this).data('url');
            var trObj = $(this);

            if (confirm("Are you sure you want to delete this banner?") == true) {
                $.ajax({
                    url: userURL,
                    type: 'DELETE',
                    dataType: 'json',
                    success: function(data) {
//                        alert(data.success);
                        trObj.closest(".thumb-preview").remove();
                    }
                });
            }
        });
        $(document).on('click', '.remove-gallery', function() {

            var userURL = $(this).data('url');
            var trObj = $(this);

            if (confirm("Are you sure you want to delete this banner?") == true) {
                $.ajax({
                    url: userURL,
                    type: 'DELETE',
                    dataType: 'json',
                    success: function(data) {
//                        alert(data.success);
                        trObj.closest(".thumb-preview-gallery").remove();
                    }
                });
            }
        });
        $(document).on('click', '.remove-location', function() {

            var p_id = $(this).data('id');
            var location = $(this).data('val');
            var trObj = $(this);

            if (confirm("Are you sure you want to delete this location?") == true) {
                $.ajax({
                    url: "<?php echo route('property.locationdelete') ?>",
                    type: 'PATCH',
                    data:{
                      'location': location,
                      'p_id': p_id
                    },
                    dataType: 'json',
                    success: function(data) {
//                        alert(data.success);
                        trObj.closest(".location-box").remove();
                    }
                });
            }
        });
        
       

    });
</script>
@endsection