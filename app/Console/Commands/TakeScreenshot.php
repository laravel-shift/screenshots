<?php

namespace App\Console\Commands;

use App\Models\Shift;
use Illuminate\Console\Command;
use Spatie\Browsershot\Browsershot;

class TakeScreenshot extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'screenshot:take {shift} {path}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Take a screenshot of the given Shift';

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
        $shift = Shift::findOrFail($this->argument('shift'));

        $html = view('shift.show', [
            'shift' => $shift,
            'view' => 'commits',
        ])->render();

        Browsershot::html($html)
            ->windowSize(1200, 628)
            ->deviceScaleFactor(2)
            ->save($this->argument('path'));

        return 0;
    }
}
