<?php

namespace romanzipp\EnvDiff\Console\Commands;

use Illuminate\Console\Command;
use Dotenv\Exception\InvalidPathException;
use romanzipp\EnvDiff\Services\DiffService;

class DiffEnvFiles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'env:diff
                            {files? : Specify environment files, overriding config}
                            {--values : Display existing environment values}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a visual Diff of .env and .env.example files';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $service = app(DiffService::class);

        $files = config('env-diff.files') ?: ['.env'];
        #$files = $service->scanDirForEnvs();

        if ($overrideFiles = $this->argument('files')) {
            $files = explode(',', $overrideFiles);
        }

        if (true === $this->option('values')) {
            $service->config['show_values'] = true;
        }

        $service->add($files);

        /*if ($service->missingFilesExists()) {
            $this->call('env:actualize');
        }*/

        $service->displayTable();
    }
}
