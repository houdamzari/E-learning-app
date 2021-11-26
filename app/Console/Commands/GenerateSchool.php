<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\School;

class GenerateSchool extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:schools {number}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'this command lets you generate schools';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $schoolsData = $this->argument('number');

        for ($i = 0; $i < $schoolsData; $i++) {
            School::factory()->create();
        }
    }
}
