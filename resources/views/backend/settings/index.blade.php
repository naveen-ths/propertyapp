@extends('layouts.admin')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Website Settings</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Settings</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Website Configuration</h3>
                        <div class="card-tools">
                            <a href="{{ route('settings.initialize') }}" class="btn btn-info btn-sm">
                                <i class="fas fa-sync"></i> Initialize Default Settings
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

                        @if(session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif

                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <form action="{{ route('settings.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            @if($settings->isNotEmpty())
                            <!-- Settings Tabs -->
                            <ul class="nav nav-tabs" id="settingsTabs" role="tablist">
                                @foreach($settings as $group => $groupSettings)
                                <li class="nav-item">
                                    <a class="nav-link @if($loop->first) active @endif" 
                                       id="{{ $group }}-tab" 
                                       data-toggle="tab" 
                                       href="#{{ $group }}" 
                                       role="tab" 
                                       aria-controls="{{ $group }}" 
                                       aria-selected="{{ $loop->first ? 'true' : 'false' }}">
                                        {{ ucfirst($group) }}
                                    </a>
                                </li>
                                @endforeach
                            </ul>

                            <div class="tab-content mt-3" id="settingsTabContent">
                                @foreach($settings as $group => $groupSettings)
                                <div class="tab-pane fade @if($loop->first) show active @endif" 
                                     id="{{ $group }}" 
                                     role="tabpanel" 
                                     aria-labelledby="{{ $group }}-tab">

                                    <div class="row">
                                        @foreach($groupSettings as $setting)
                                        <div class="col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="{{ $setting->key }}" class="form-label">
                                                    {{ $setting->label }}
                                                    @if($setting->description)
                                                    <i class="fas fa-info-circle text-muted" 
                                                       data-toggle="tooltip" 
                                                       title="{{ $setting->description }}"></i>
                                                    @endif
                                                </label>

                                                @if($setting->type === 'textarea')
                                                <textarea name="settings[{{ $setting->key }}]" 
                                                          id="{{ $setting->key }}" 
                                                          class="form-control" 
                                                          rows="3">{{ old("settings.{$setting->key}", $setting->value) }}</textarea>

                                                @elseif($setting->type === 'image')
                                                @if($setting->value)
                                                <div class="mb-2">
                                                    @if(str_starts_with($setting->value, 'settings/'))
                                                    <img src="{{ asset('storage/' . $setting->value) }}" 
                                                         alt="{{ $setting->label }}" 
                                                         class="img-thumbnail" 
                                                         style="max-width: 200px; max-height: 100px;">
                                                    @else
                                                    <img src="{{ asset($setting->value) }}" 
                                                         alt="{{ $setting->label }}" 
                                                         class="img-thumbnail" 
                                                         style="max-width: 200px; max-height: 100px;">
                                                    @endif
                                                </div>
                                                @endif
                                                <input type="file" 
                                                       name="settings[{{ $setting->key }}]" 
                                                       id="{{ $setting->key }}" 
                                                       class="form-control" 
                                                       accept="image/*">
                                                <small class="form-text text-muted">Leave empty to keep current image</small>

                                                @else
                                                <input type="{{ $setting->type === 'url' ? 'url' : ($setting->type === 'email' ? 'email' : 'text') }}" 
                                                       name="settings[{{ $setting->key }}]" 
                                                       id="{{ $setting->key }}" 
                                                       class="form-control" 
                                                       value="{{ old("settings.{$setting->key}", $setting->value) }}">
                                                @endif

                                                @if($setting->description)
                                                <small class="form-text text-muted">{{ $setting->description }}</small>
                                                @endif
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                @endforeach
                            </div>

                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save"></i> Save Settings
                                </button>
                                <a href="{{ route('dashboard') }}" class="btn btn-secondary">
                                    <i class="fas fa-arrow-left"></i> Back to Dashboard
                                </a>
                            </div>
                            @else
                            <div class="text-center py-5">
                                <p class="text-muted">No settings found. Click the button below to initialize default settings.</p>
                                <a href="{{ route('settings.initialize') }}" class="btn btn-primary">
                                    <i class="fas fa-plus"></i> Initialize Default Settings
                                </a>
                            </div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
  $(document).ready(function () {
      // Initialize tooltips
      $('[data-toggle="tooltip"]').tooltip();

      // Auto-hide alerts after 5 seconds
      setTimeout(function () {
          $('.alert').fadeOut('slow');
      }, 5000);

      // Initialize tabs
      $('#settingsTabs a').on('click', function (e) {
          e.preventDefault();
          $(this).tab('show');
      });
  });
</script>
@endpush
