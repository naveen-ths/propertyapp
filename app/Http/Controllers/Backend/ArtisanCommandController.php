<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Symfony\Component\Console\Output\BufferedOutput;

class ArtisanCommandController extends Controller
{
    /**
     * Display the artisan commands page.
     */
    public function index()
    {
        // Only allow access in local environment
        if (!App::environment('local')) {
            abort(403, 'This feature is only available in local environment.');
        }

        // Define available commands
        $commands = [
            'migrate' => [
                'title' => 'Run Migrations',
                'description' => 'Run database migrations',
                'command' => 'migrate',
                'icon' => 'fas fa-database',
                'color' => 'primary'
            ],
            'migrate:fresh' => [
                'title' => 'Fresh Migration',
                'description' => 'Drop all tables and re-run migrations',
                'command' => 'migrate:fresh --seed',
                'icon' => 'fas fa-sync-alt',
                'color' => 'warning'
            ],
            'db:seed' => [
                'title' => 'Seed Database',
                'description' => 'Run database seeders',
                'command' => 'db:seed',
                'icon' => 'fas fa-seedling',
                'color' => 'success'
            ],
            'cache:clear' => [
                'title' => 'Clear Cache',
                'description' => 'Clear application cache',
                'command' => 'cache:clear',
                'icon' => 'fas fa-trash-alt',
                'color' => 'info'
            ],
            'config:clear' => [
                'title' => 'Clear Config',
                'description' => 'Clear configuration cache',
                'command' => 'config:clear',
                'icon' => 'fas fa-cogs',
                'color' => 'info'
            ],
            'route:clear' => [
                'title' => 'Clear Routes',
                'description' => 'Clear route cache',
                'command' => 'route:clear',
                'icon' => 'fas fa-route',
                'color' => 'info'
            ],
            'view:clear' => [
                'title' => 'Clear Views',
                'description' => 'Clear compiled view files',
                'command' => 'view:clear',
                'icon' => 'fas fa-eye',
                'color' => 'info'
            ],
            'storage:link' => [
                'title' => 'Storage Link',
                'description' => 'Create symbolic link for storage',
                'command' => 'storage:link',
                'icon' => 'fas fa-link',
                'color' => 'secondary'
            ],
            'settings:initialize' => [
                'title' => 'Initialize Settings',
                'description' => 'Initialize default website settings',
                'command' => 'settings:initialize',
                'icon' => 'fas fa-cog',
                'color' => 'primary'
            ],
            'queue:work' => [
                'title' => 'Queue Worker',
                'description' => 'Start processing queue jobs',
                'command' => 'queue:work --timeout=60',
                'icon' => 'fas fa-tasks',
                'color' => 'success'
            ],
        ];

        return view('backend.artisan.index', compact('commands'));
    }

    /**
     * Execute an artisan command.
     */
    public function execute(Request $request)
    {
        // Only allow access in local environment
        if (!App::environment('local')) {
            return response()->json(['error' => 'This feature is only available in local environment.'], 403);
        }

        $request->validate([
            'command' => 'required|string',
        ]);

        $command = $request->input('command');

        try {
            // Create a buffered output to capture the command output
            $output = new BufferedOutput();
            
            // Execute the artisan command
            $exitCode = Artisan::call($command, [], $output);
            
            // Get the output content
            $result = $output->fetch();
            
            // Log the command execution
            Log::info("Artisan command executed: {$command}", [
                'exit_code' => $exitCode,
                'output' => $result
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Command executed successfully',
                'output' => $result,
                'exit_code' => $exitCode
            ]);

        } catch (\Exception $e) {
            Log::error("Artisan command failed: {$command}", [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Command execution failed',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Get system information.
     */
    public function systemInfo()
    {
        // Only allow access in local environment
        if (!App::environment('local')) {
            abort(403, 'This feature is only available in local environment.');
        }

        $info = [
            'Environment' => App::environment(),
            'PHP Version' => PHP_VERSION,
            'Laravel Version' => app()->version(),
            'Database' => config('database.default'),
            'Cache Driver' => config('cache.default'),
            'Queue Driver' => config('queue.default'),
            'Storage Disk' => config('filesystems.default'),
            'Debug Mode' => config('app.debug') ? 'Enabled' : 'Disabled',
            'App URL' => config('app.url'),
            'Timezone' => config('app.timezone'),
        ];

        return response()->json($info);
    }
}
