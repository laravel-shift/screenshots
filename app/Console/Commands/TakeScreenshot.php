<?php

namespace App\Console\Commands;

use App\Models\Shift;
use Illuminate\Console\Command;
use Spatie\Browsershot\Browsershot;
use Spatie\Image\Image;

class TakeScreenshot extends Command
{
    protected $signature = 'screenshot {shift?}';

    protected $description = 'Take screenshot of the given Shift or all Shifts';

    public function handle()
    {
        $shifts = is_null($this->argument('shift')) ? Shift::all()
            : [Shift::where('sku', $this->argument('shift'))->firstOrFail()];

        foreach ($shifts as $shift) {
            $filename = $shift->slug.'.png';
            $this->line('Generating: '.$filename);

            $html = view('shift.show', ['shift' => $shift])->render();

            $path = public_path('images/screenshots/'.$filename);
            Browsershot::html($html)
                ->windowSize(1200, 628)
                ->deviceScaleFactor(2)
                ->save($path);
            Image::load($path)
                ->optimize()
                ->save();
        }

        return 0;
    }
}
