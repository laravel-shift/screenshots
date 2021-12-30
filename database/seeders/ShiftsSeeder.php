<?php

namespace Database\Seeders;

use App\Models\Shift;
use Illuminate\Database\Seeder;

class ShiftsSeeder extends Seeder
{
    public function run()
    {
        // Laravel
        $shift = Shift::create([
            'name' => 'Laravel 5.0 Shift',
            'type' => 'Laravel',
            'published_at' => '2015-02-04',
        ]);
        $shift->commits()->createMany(
            ['message' => 'Shift folder structure', 'info' => true],
            ['message' => 'Adopt PSR-4 conventions'],
            ['message' => 'Adopt PHP short array syntax'],
            ['message' => 'Shift controllers', 'info' => true],
            ['message' => 'Shift user authentication', 'info' => true],
            ['message' => 'Shift models', 'info' => true],
        );

        $shift = Shift::create([
            'name' => 'Laravel 5.1 Shift',
            'type' => 'Laravel',
            'published_at' => '2015-06-09',
        ]);

        $shift = Shift::create([
            'name' => 'Laravel 5.2 Shift',
            'type' => 'Laravel',
            'published_at' => '2015-12-21',
        ]);

        $shift = Shift::create([
            'name' => 'Laravel 5.3 Shift',
            'type' => 'Laravel',
            'published_at' => '2016-08-23',
        ]);

        $shift = Shift::create([
            'name' => 'Laravel 5.4 Shift',
            'type' => 'Laravel',
            'published_at' => '2017-01-24',
        ]);

        $shift = Shift::create([
            'name' => 'Laravel 5.5 Shift',
            'type' => 'Laravel',
            'published_at' => '2017-08-30',
        ]);

        $shift = Shift::create([
            'name' => 'Laravel 5.6 Shift',
            'type' => 'Laravel',
            'published_at' => '2018-02-07',
        ]);


        $shift = Shift::create([
            'name' => 'Laravel 5.7 Shift',
            'type' => 'Laravel',
            'published_at' => '2018-09-04',
        ]);

        $shift = Shift::create([
            'name' => 'Laravel 5.8 Shift',
            'type' => 'Laravel',
            'published_at' => '2019-02-26',
        ]);

        $shift = Shift::create([
            'name' => 'Laravel 6.x Shift',
            'type' => 'Laravel',
            'published_at' => '2019-09-03',
        ]);

        $shift = Shift::create([
            'name' => 'Laravel 7.x Shift',
            'type' => 'Laravel',
            'published_at' => '2020-03-03',
        ]);

        $shift = Shift::create([
            'name' => 'Laravel 8.x Shift',
            'type' => 'Laravel',
            'published_at' => '2020-09-08',
        ]);


        // additional Shifts
        $shift = Shift::create([
            'name' => 'Upgrade Checker',
            'type' => 'Laravel',
        ]);

        $shift = Shift::create([
            'name' => 'Laravel Linter',
            'type' => 'Laravel',
        ]);

        $shift = Shift::create([
            'name' => 'Laravel Fixer',
            'type' => 'Laravel',
        ]);

        $shift = Shift::create([
            'name' => 'Tests Generator',
            'type' => 'Laravel',
        ]);

        $shift = Shift::create([
            'name' => 'Namespace Models Shift',
            'type' => 'Laravel',
        ]);

        $shift = Shift::create([
            'name' => 'BrowserKit Tests Converter',
            'type' => 'Laravel',
        ]);

        $shift = Shift::create([
            'name' => 'Namespace Consolidator',
            'type' => 'Laravel',
        ]);

        $shift = Shift::create([
            'name' => 'Dependency Upgrader',
            'type' => 'Laravel',
        ]);


        // Lumen
        $shift = Shift::create([
            'name' => 'Lumen to Laravel Shift',
            'type' => 'Lumen',
        ]);


        // Tailwind
        $shift = Shift::create([
            'name' => 'Tailwind 1.x Shift',
            'type' => 'Tailwind',
            'published_at' => '2019-05-13',
        ]);

        $shift = Shift::create([
            'name' => 'Tailwind 2.x Shift',
            'type' => 'Tailwind',
            'published_at' => '2020-11-18',
        ]);

        $shift = Shift::create([
            'name' => 'Tailwind 3.x Shift',
            'type' => 'Tailwind',
            'published_at' => '2021-12-09',
        ]);

        $shift = Shift::create([
            'name' => 'Tailwind UI Shift',
            'type' => 'Tailwind',
            'published_at' => '2020-11-18',
        ]);

        $shift = Shift::create([
            'name' => 'Tailwind Converter',
            'type' => 'Tailwind',
        ]);

        $shift = Shift::create([
            'name' => 'Tailwind Linter',
            'type' => 'Tailwind',
        ]);

        // PHP
        $shift = Shift::create([
            'name' => 'PSR-2 Shift',
            'type' => 'PHP',
        ]);

        $shift = Shift::create([
            'name' => 'PSR-4 Shift',
            'type' => 'PHP',
        ]);

        $shift = Shift::create([
            'name' => 'MySQL to MySQLi Shift',
            'type' => 'PHP',
        ]);

        $shift = Shift::create([
            'name' => 'PHPUnit 6 Shift',
            'type' => 'PHP',
            'published_at' => '2017-02-03',
        ]);

        $shift = Shift::create([
            'name' => 'PHPUnit 8 Shift',
            'type' => 'PHP',
            'published_at' => '2019-02-01',
        ]);

        $shift = Shift::create([
            'name' => 'PHPUnit 9 Shift',
            'type' => 'PHP',
            'published_at' => '2020-02-07',
        ]);

        $shift = Shift::create([
            'name' => 'Pest Converter',
            'type' => 'PHP',
        ]);

        $shift = Shift::create([
            'name' => 'CI Generator',
            'type' => 'PHP',
        ]);
    }
}
