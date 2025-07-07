@extends('layouts.admin')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Artisan Commands</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Artisan Commands</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- System Information -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-info-circle"></i> System Information
                        </h3>
                    </div>
                    <div class="card-body">
                        <div id="system-info">
                            <div class="text-center">
                                <div class="spinner-border text-primary" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                                <p>Loading system information...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Commands -->
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-terminal"></i> Available Commands
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-warning">
                            <i class="fas fa-exclamation-triangle"></i>
                            <strong>Warning:</strong> This feature is only available in local environment for security reasons.
                        </div>

                        <div class="row">
                            @foreach($commands as $key => $command)
                                <div class="col-md-6 mb-3">
                                    <div class="card border-{{ $command['color'] }}">
                                        <div class="card-body">
                                            <h5 class="card-title">
                                                <i class="{{ $command['icon'] }} text-{{ $command['color'] }}"></i>
                                                {{ $command['title'] }}
                                            </h5>
                                            <p class="card-text">{{ $command['description'] }}</p>
                                            <button class="btn btn-{{ $command['color'] }} btn-sm run-command" 
                                                    data-command="{{ $command['command'] }}"
                                                    data-title="{{ $command['title'] }}">
                                                <i class="fas fa-play"></i> Run Command
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Command Output -->
        <div class="row">
            <div class="col-12">
                <div class="card" id="output-card" style="display: none;">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-terminal"></i> Command Output
                        </h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" id="clear-output">
                                <i class="fas fa-trash"></i> Clear
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <pre id="command-output" class="bg-dark text-light p-3" style="max-height: 400px; overflow-y: auto;"></pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Loading Modal -->
<div class="modal fade" id="loadingModal" tabindex="-1" role="dialog" aria-labelledby="loadingModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body text-center">
                <div class="spinner-border text-primary mb-3" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                <p id="loading-text">Executing command...</p>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<!-- Include toastr for notifications -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
$(document).ready(function() {
    console.log('Artisan Commands page loaded');
    
    // Configure toastr
    toastr.options = {
        "closeButton": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "timeOut": "5000"
    };
    
    // Load system information
    loadSystemInfo();
    
    // Handle command execution
    $('.run-command').click(function() {
        console.log('Run command clicked');
        const command = $(this).data('command');
        const title = $(this).data('title');
        
        console.log('Command:', command, 'Title:', title);
        
        if (confirm(`Are you sure you want to run "${title}"?`)) {
            executeCommand(command, title);
        }
    });
    
    // Clear output
    $('#clear-output').click(function() {
        $('#command-output').text('');
        $('#output-card').hide();
    });
    
    function loadSystemInfo() {
        console.log('Loading system info...');
        
        $.ajax({
            url: '{{ route('artisan.system-info') }}',
            method: 'GET',
            timeout: 10000,
            success: function(data) {
                console.log('System info loaded:', data);
                let html = '<table class="table table-sm">';
                for (const [key, value] of Object.entries(data)) {
                    html += `<tr><td><strong>${key}:</strong></td><td>${value}</td></tr>`;
                }
                html += '</table>';
                $('#system-info').html(html);
            },
            error: function(xhr, status, error) {
                console.error('System info load failed:', xhr, status, error);
                let errorMsg = 'Failed to load system information';
                if (xhr.responseJSON && xhr.responseJSON.message) {
                    errorMsg += ': ' + xhr.responseJSON.message;
                }
                $('#system-info').html(`<div class="alert alert-danger">${errorMsg}</div>`);
            }
        });
    }
    
    function executeCommand(command, title) {
        console.log('Executing command:', command);
        
        // Show loading modal
        $('#loading-text').text(`Executing "${title}"...`);
        $('#loadingModal').modal('show');
        
        // Make AJAX request to execute command
        $.ajax({
            url: '{{ route('artisan.execute') }}',
            method: 'POST',
            data: {
                command: command,
                _token: '{{ csrf_token() }}'
            },
            timeout: 60000, // 60 seconds timeout
            success: function(response) {
                console.log('Command response:', response);
                $('#loadingModal').modal('hide');
                
                if (response.success) {
                    showOutput(command, response.output, response.exit_code);
                    toastr.success(response.message || 'Command executed successfully');
                } else {
                    toastr.error(response.message || 'Command execution failed');
                }
            },
            error: function(xhr, status, error) {
                console.error('Command execution failed:', xhr, status, error);
                $('#loadingModal').modal('hide');
                
                let errorMessage = 'Command execution failed';
                if (xhr.responseJSON && xhr.responseJSON.error) {
                    errorMessage = xhr.responseJSON.error;
                } else if (xhr.responseJSON && xhr.responseJSON.message) {
                    errorMessage = xhr.responseJSON.message;
                } else if (status === 'timeout') {
                    errorMessage = 'Command execution timed out';
                }
                
                toastr.error(errorMessage);
            }
        });
    }
    
    function showOutput(command, output, exitCode) {
        const timestamp = new Date().toLocaleString();
        const statusText = exitCode === 0 ? 'SUCCESS' : 'FAILED';
        const statusClass = exitCode === 0 ? 'text-success' : 'text-danger';
        
        let outputHtml = `<div class="mb-2">
            <strong>[${timestamp}]</strong> 
            <span class="text-info">Command:</span> ${command}
            <span class="${statusClass}">Status: ${statusText} (Exit Code: ${exitCode})</span>
        </div>`;
        
        if (output) {
            outputHtml += `<div class="mb-3" style="white-space: pre-wrap;">${output}</div>`;
        } else {
            outputHtml += `<div class="mb-3 text-muted">No output</div>`;
        }
        
        outputHtml += '<hr>';
        
        $('#command-output').prepend(outputHtml);
        $('#output-card').show();
        
        // Scroll to top of output
        $('#command-output').scrollTop(0);
    }
});
</script>
@endpush
