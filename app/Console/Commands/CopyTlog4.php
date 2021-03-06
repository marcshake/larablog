<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CopyTlog4 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'copy:tlog';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Copies all old data';

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
     * @return mixed
     */
    public function handle()
    {
        $data = DB::connection('second')->select('title', 'contents', 'times', 'vis');
    }
}
