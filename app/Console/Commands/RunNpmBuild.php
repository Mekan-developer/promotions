<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class RunNpmBuild extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'npm:build';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run npm build command';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Running npm build...');
        exec('npm run build', $output, $returnCode);

        // Output results
        $this->info(implode("\n", $output));

        if ($returnCode !== 0) {
            $this->error('npm build failed');
        } else {
            $this->info('npm build completed successfully');
        }
    }
}
