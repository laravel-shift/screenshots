<?php

namespace App\Console\Commands;

use App\Models\Shift;
use Illuminate\Console\Command;
use Spatie\Browsershot\Browsershot;

class TakeScreenshot extends Command
{
    protected $signature = 'screenshot {shift?}';

    protected $description = 'Take screenshot of the given Shift or all Shifts';

    public function handle()
    {
        $shifts = is_null($this->argument('shift')) ? Shift::all()
            : [Shift::findOrFail($this->argument('shift'))];

        foreach ($shifts as $shift) {
            $html = view('shift.show', [
                'shift' => $shift,
                'view' => 'commits',
            ])->render();

            Browsershot::html($html)
                ->windowSize(1200, 628)
                ->deviceScaleFactor(2)
                ->save(public_path('images/screenshots/' . $shift->sku . '.png'));
        }

        return 0;
    }
}
