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
            ['message' => 'Migrate folder structure', 'info' => true],
            ['message' => 'Adopt PSR-4 convention', 'info' => true],
            ['message' => 'Shift controller inheritance', 'info' => true],
            ['message' => 'Add user authentication'],
            ['message' => 'Shift model inheritance and trait', 'info' => true],
            ['message' => 'Convert blade output directives', 'info' => true],
            ['message' => 'Update pagination methods', 'info' => true],
            ['message' => 'Convert to new helper methods', 'info' => true],
        );

        $shift = Shift::create([
            'name' => 'Laravel 5.1 Shift',
            'type' => 'Laravel',
            'published_at' => '2015-06-09',
        ]);
        $shift->commits()->createMany(
            ['message' => 'Shift authentication', 'info' => true],
            ['message' => 'Use Validator contract', 'info' => true],
            ['message' => 'Shift Eloquent', 'info' => true],
            ['message' => 'Rename Commands and Handlers', 'info' => true],
            ['message' => 'Shift Service Providers', 'info' => true],
            ['message' => 'Add new EncryptCookie middleware'],
            ['message' => 'Migrate package language files', 'info' => true],
            ['message' => 'Shift `RedirectResponse` to helper'],
        );

        $shift = Shift::create([
            'name' => 'Laravel 5.2 Shift',
            'type' => 'Laravel',
            'published_at' => '2015-12-21',
        ]);
        $shift->commits()->createMany(
            ['message' => 'Remove SelfHandling from Jobs', 'info' => true],
            ['message' => 'Add new exceptions to `$dontReport` property'],
            ['message' => 'Shift middleware', 'info' => true],
            ['message' => 'Shift Authentication', 'info' => true],
            ['message' => 'Convert route helpers'],
            ['message' => 'Migration for `sessions` table'],
            ['message' => 'Convert Input to Request facade', 'info' => true],
            ['message' => 'Shift `RedirectResponse` to helper'],
        );

        $shift = Shift::create([
            'name' => 'Laravel 5.3 Shift',
            'type' => 'Laravel',
            'published_at' => '2016-08-23',
        ]);
        $shift->commits()->createMany(
            ['message' => 'Remove default app folders', 'info' => true],
            ['message' => 'Update `FormRequest` inheritance'],
            ['message' => 'Shift core files'],
            ['message' => 'Remove old providers'],
            ['message' => 'Migrate routes'],
            ['message' => 'Shift asset configuration'],
            ['message' => 'Convert implicit controller routes'],
            ['message' => 'Migration for queue tables'],
        );

        $shift = Shift::create([
            'name' => 'Laravel 5.4 Shift',
            'type' => 'Laravel',
            'published_at' => '2017-01-24',
        ]);
        $shift->commits()->createMany(
            ['message' => 'Shift core files'],
            ['message' => 'Rename collection methods'],
            ['message' => 'Shift Eloquent'],
            ['message' => 'Rename session methods'],
            ['message' => 'Convert container methods'],
            ['message' => 'Convert to `event` helper', 'info' => true],
            ['message' => 'Shift URL facade methods'],
            ['message' => 'Bump Laravel dependencies'],
        );

        $shift = Shift::create([
            'name' => 'Laravel 5.5 Shift',
            'type' => 'Laravel',
            'published_at' => '2017-08-30',
        ]);
        $shift->commits()->createMany(
            ['message' => 'Shift core files'],
            ['message' => 'Shift references to core exceptions'],
            ['message' => 'Shift console commands'],
            ['message' => 'Shift Eloquent'],
            ['message' => 'Shift request methods'],
            ['message' => 'Rename test assertions'],
            ['message' => 'Convert dynamic "with" view variables'],
            ['message' => 'Bump Laravel dependencies'],
        );

        $shift = Shift::create([
            'name' => 'Laravel 5.6 Shift',
            'type' => 'Laravel',
            'published_at' => '2018-02-07',
        ]);
        $shift->commits()->createMany(
            ['message' => 'Shift middleware'],
            ['message' => 'Update Eloquent method visibility'],
            ['message' => 'Shift test files'],
            ['message' => 'Shift log references'],
            ['message' => 'Shift core files'],
            ['message' => 'Convert `bcrypt` to `Hash::make`'],
            ['message' => 'Shift deprecated Resource class'],
            ['message' => 'Bump Laravel dependencies'],
        );

        $shift = Shift::create([
            'name' => 'Laravel 5.7 Shift',
            'type' => 'Laravel',
            'published_at' => '2018-09-04',
        ]);
        $shift->commits()->createMany(
            ['message' => 'Shift bindings', 'info' => true],
            ['message' => 'Shift core files'],
            ['message' => 'Shift middleware'],
            ['message' => 'Shift Route redirects'],
            ['message' => 'Convert Blade `or` to PHP `??`'],
            ['message' => 'Move assets'],
            ['message' => 'Inject new request parameter'],
            ['message' => 'Bump Laravel dependencies'],
        );

        $shift = Shift::create([
            'name' => 'Laravel 5.8 Shift',
            'type' => 'Laravel',
            'published_at' => '2019-02-26',
        ]);
        $shift->commits()->createMany(
            ['message' => 'Shift bindings', 'info' => true],
            ['message' => 'Shift core files'],
            ['message' => 'Convert to `event` helper', 'info' => true],
            ['message' => 'Remove explicit `deleted_at` date cast'],
            ['message' => 'Shift deferred Service Providers'],
            ['message' => 'Shift Markdown directory and methods'],
            ['message' => 'Convert Cache TTL from minutes to seconds', 'info' => true],
            ['message' => 'Shift URL facade methods'],
            ['message' => 'Bump Laravel dependencies'],
        );

        $shift = Shift::create([
            'name' => 'Laravel 6.x Shift',
            'type' => 'Laravel',
            'published_at' => '2019-09-03',
        ]);
        $shift->commits()->createMany(
            ['message' => 'Replace deprecated Array and String helpers', 'info' => true],
            ['message' => 'Leverage `HOME` constant'],
            ['message' => 'Shift deferred Service Providers'],
            ['message' => 'Convert `Input` to `Request` facade', 'info' => true],
            ['message' => 'Shift Lang methods'],
            ['message' => 'Shift to Carbon 2'],
            ['message' => 'Shift assertion methods', 'info' => true],
            ['message' => 'Bump Laravel dependencies'],
        );

        $shift = Shift::create([
            'name' => 'Laravel 7.x Shift',
            'type' => 'Laravel',
            'published_at' => '2020-03-03',
        ]);
        $shift->commits()->createMany(
            ['message' => 'Shift to Throwable'],
            ['message' => 'Add laravel/ui dependency'],
            ['message' => 'Shift Blade "tag components"'],
            ['message' => 'Unindent vendor mail templates'],
            ['message' => 'Shift Eloquent methods'],
            ['message' => 'Convert factory types to states'],
            ['message' => 'Shift test config and references'],
            ['message' => 'Bump Laravel dependencies'],
        );

        $shift = Shift::create([
            'name' => 'Laravel 8.x Shift',
            'type' => 'Laravel',
            'published_at' => '2020-09-08',
        ]);
        $shift->commits()->createMany(
            ['message' => 'Shift core files'],
            ['message' => 'Remove web.config'],
            ['message' => 'Rename `retryAfter` and `timeoutAt'],
            ['message' => 'Set return type of base TestCase methods'],
            ['message' => 'Convert route options to fluent methods', 'info' => true],
            ['message' => 'Shift to class based routes'],
            ['message' => 'Convert deprecated `$dates` property to `$casts`'],
            ['message' => 'Add `uuid` to `failed_jobs` table'],
        );

        $shift = Shift::create([
            'name' => 'Laravel 9.x Shift',
            'type' => 'Laravel',
            'published_at' => '2022-01-25',
        ]);
        $shift->commits()->createMany(
            ['message' => 'Shift core files'],
            ['message' => 'Rename collection methods'],
            ['message' => 'Shift Eloquent'],
            ['message' => 'Rename session methods'],
            ['message' => 'Convert container methods'],
            ['message' => 'Convert to `event` helper', 'info' => true],
            ['message' => 'Shift URL facade methods'],
            ['message' => 'Bump Laravel dependencies'],
        );

        // additional Shifts
        $shift = Shift::create([
            'name' => 'Upgrade Checker',
            'type' => 'Laravel',
        ]);
        $shift->commits()->createMany(
            ['message' => 'Apply code style'],
            ['message' => 'Adopt short array syntax', 'info' => true],
            ['message' => 'Shift bindings', 'info' => true],
            ['message' => 'Convert to new helper methods', 'info' => true],
        );

        $shift = Shift::create([
            'name' => 'Laravel Linter',
            'type' => 'Laravel',
        ]);

        $shift = Shift::create([
            'name' => 'Laravel Fixer',
            'type' => 'Laravel',
        ]);
        $shift->commits()->createMany(
            ['message' => 'Remove unnecessary `$table` property', 'info' => true],
            ['message' => 'Leverage injected request object', 'info' => true],
            ['message' => 'Convert validation rules to array syntax'],
            ['message' => 'Shift to class based route', 'info' => true],
            ['message' => 'Streamline calls to `orderBy`'],
            ['message' => 'Convert to helper methods', 'info' => true],
            ['message' => 'Modernize Blade directives', 'info' => true],
            ['message' => 'Leverage command autoloading', 'info' => true],
        );

        $shift = Shift::create([
            'name' => 'Tests Generator',
            'type' => 'Laravel',
        ]);
        $shift->commits()->createMany(
            ['message' => 'Shift core testing files'],
            ['message' => 'Include helpful testing packages', 'info' => true],
            ['message' => 'Generate model factories'],
            ['message' => 'Generate HTTP tests for controllers'],
            ['message' => 'Generate unit tests for form requests'],
            ['message' => 'Generate tests for console commands'],
            ['message' => 'Configure basic testing environment'],
        );

        $shift = Shift::create([
            'name' => 'Namespace Models Shift',
            'type' => 'Laravel',
        ]);
        $shift->commits()->createMany(
            ['message' => 'Shift bindings', 'info' => true],
            ['message' => 'Namespace models under App\Models'],
        );

        $shift = Shift::create([
            'name' => 'BrowserKit Tests Converter',
            'type' => 'Laravel',
        ]);
        $shift->commits()->createMany(
            ['message' => 'Shift bindings', 'info' => true],
            ['message' => 'Shift core files'],
            ['message' => 'Shift tests'],
            ['message' => 'Bump Laravel dependencies'],
        );

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
        $shift->commits()->createMany(
            ['message' => 'Shift bindings', 'info' => true],
            ['message' => 'Adopt short array syntax', 'info' => true],
            ['message' => 'Shift folder structure', 'info' => true],
            ['message' => 'Shift core files'],
            ['message' => 'Merge config files'],
            ['message' => 'Migrate routes'],
            ['message' => 'Shift Facades'],
            ['message' => 'Bump Laravel dependencies'],
        );

        // Tailwind
        $shift = Shift::create([
            'name' => 'Tailwind 1.x Shift',
            'type' => 'Tailwind',
            'published_at' => '2019-05-13',
        ]);
        $shift->commits()->createMany(
            ['message' => 'Bump Tailwind dependencies'],
            ['message' => 'Upgrade to Laravel Mix 5'],
            ['message' => 'Shift Tailwind config'],
            ['message' => 'Convert `config()` to `theme()`'],
            ['message' => 'Explicitly style previously defaulted elements'],
            ['message' => 'Shift core Tailwind utilities', 'info' => true],
            ['message' => 'Convert max-width utilities', 'info' => true],
            ['message' => 'Convert to Tailwind 1.0 colors'],
        );

        $shift = Shift::create([
            'name' => 'Tailwind 2.x Shift',
            'type' => 'Tailwind',
            'published_at' => '2020-11-18',
        ]);
        $shift->commits()->createMany(
            ['message' => 'Bump Tailwind dependencies'],
            ['message' => 'Add `line-height` for responsive font sizes'],
            ['message' => 'Normalize `@apply` utility names'],
            ['message' => 'Shift Tailwind config'],
            ['message' => 'Shift core Tailwind utilities'],
            ['message' => 'Remove `theme()` array references'],
            ['message' => 'Prefix Tailwind animations'],
            ['message' => 'Convert to Tailwind 2.0 colors'],
        );

        $shift = Shift::create([
            'name' => 'Tailwind 3.x Shift',
            'type' => 'Tailwind',
            'published_at' => '2021-12-09',
        ]);
        $shift->commits()->createMany(
            ['message' => 'Bump Tailwind dependencies'],
            ['message' => 'Configure JIT mode'],
            ['message' => 'Shift Tailwind config'],
            ['message' => 'Rename deprecated `screens` directive to `variants`'],
            ['message' => 'Shift core Tailwind utilities'],
            ['message' => 'Replace `@variants` with `@layer`'],
            ['message' => 'Convert to Tailwind 3.0 colors'],
        );

        $shift = Shift::create([
            'name' => 'Tailwind UI Shift',
            'type' => 'Tailwind',
            'published_at' => '2020-11-18',
        ]);
        $shift->commits()->createMany(
            ['message' => 'Bump Tailwind UI dependencies'],
            ['message' => 'Shift Tailwind config'],
            ['message' => 'Remove custom-forms classes'],
            ['message' => 'Convert content width classes'],
            ['message' => 'Convert to new focus ring utilities'],
            ['message' => 'Configure fractional padding values'],
            ['message' => 'Configure Tailwind UI variants'],
            ['message' => 'Remove transitions'],
        );

        $shift = Shift::create([
            'name' => 'Tailwind Converter',
            'type' => 'Tailwind',
        ]);
        $shift->commits()->createMany(
            ['message' => 'Add Tailwind dependencies'],
            ['message' => 'Convert custom CSS to Tailwind utility classes'],
            ['message' => 'Rename conflicting classes'],
            ['message' => 'Add custom Tailwind config'],
            ['message' => 'Configure build for Tailwind assets'],
            ['message' => 'Remove CSS build assets'],
            ['message' => 'Streamline Tailwind config file'],
        );

        $shift = Shift::create([
            'name' => 'Tailwind Linter',
            'type' => 'Tailwind',
        ]);
        $shift->commits()->createMany(
            ['message' => 'Bump Tailwind dependencies'],
            ['message' => 'Streamline Tailwind config file'],
            ['message' => 'Order utility classes'],
        );

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
        $shift->commits()->createMany(
            ['message' => 'Add Pest dependencies'],
            ['message' => 'Add base Pest file'],
            ['message' => 'Convert test cases'],
            ['message' => 'Remove non-compound imports'],
            ['message' => 'Adopt expectation API'],
            ['message' => 'Optimize uses'],
            ['message' => 'Set return type of base TestCase methods', 'info' => true],
            ['message' => 'Use Pest test runner'],
        );

        $shift = Shift::create([
            'name' => 'CI Generator',
            'type' => 'PHP',
        ]);
        $shift->commits()->createMany(
            ['message' => 'Configure job for linting'],
            ['message' => 'Configure job for code style'],
            ['message' => 'Configure job for code analysis'],
            ['message' => 'Configure job for tests'],
            ['message' => 'Configure job for Dusk'],
        );
    }
}
