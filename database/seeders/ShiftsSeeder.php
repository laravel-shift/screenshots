<?php

namespace Database\Seeders;

use App\Models\Shift;
use Illuminate\Database\Seeder;

class ShiftsSeeder extends Seeder
{
    public function run(): void
    {
        // Laravel
        $shift = Shift::create([
            'name' => 'Laravel 5.0 Shift',
            'sku' => '50',
            'type' => 'Laravel',
            'slug' => 'upgrade-laravel-50-pr',
            'published_at' => '2015-02-04',
        ]);
        $shift->commits()->createMany([
            ['message' => 'Migrate folder structure', 'info' => true],
            ['message' => 'Adopt PSR-4 convention', 'info' => true],
            ['message' => 'Shift controller inheritance', 'info' => true],
            ['message' => 'Add user authentication'],
            ['message' => 'Shift model inheritance and trait', 'info' => true],
            ['message' => 'Convert blade output directives', 'info' => true],
            ['message' => 'Update pagination methods', 'info' => true],
            ['message' => 'Convert to new helper methods', 'info' => true],
        ]);

        $shift = Shift::create([
            'name' => 'Laravel 5.1 Shift',
            'sku' => '51',
            'type' => 'Laravel',
            'slug' => 'upgrade-laravel-51-pr',
            'published_at' => '2015-06-09',
        ]);
        $shift->commits()->createMany([
            ['message' => 'Shift authentication', 'info' => true],
            ['message' => 'Use Validator contract', 'info' => true],
            ['message' => 'Shift Eloquent', 'info' => true],
            ['message' => 'Rename Commands and Handlers', 'info' => true],
            ['message' => 'Shift Service Providers', 'info' => true],
            ['message' => 'Add new EncryptCookie middleware'],
            ['message' => 'Migrate package language files', 'info' => true],
            ['message' => 'Shift `RedirectResponse` to helper'],
        ]);

        $shift = Shift::create([
            'name' => 'Laravel 5.2 Shift',
            'sku' => '52',
            'type' => 'Laravel',
            'slug' => 'upgrade-laravel-52-pr',
            'published_at' => '2015-12-21',
        ]);
        $shift->commits()->createMany([
            ['message' => 'Remove SelfHandling from Jobs', 'info' => true],
            ['message' => 'Add new exceptions to `$dontReport` property'],
            ['message' => 'Shift middleware', 'info' => true],
            ['message' => 'Shift Authentication', 'info' => true],
            ['message' => 'Convert route helpers'],
            ['message' => 'Migration for `sessions` table'],
            ['message' => 'Convert Input to Request facade', 'info' => true],
            ['message' => 'Shift `RedirectResponse` to helper'],
        ]);

        $shift = Shift::create([
            'name' => 'Laravel 5.3 Shift',
            'sku' => '53',
            'type' => 'Laravel',
            'slug' => 'upgrade-laravel-53-pr',
            'published_at' => '2016-08-23',
        ]);
        $shift->commits()->createMany([
            ['message' => 'Remove default app folders', 'info' => true],
            ['message' => 'Update `FormRequest` inheritance'],
            ['message' => 'Shift core files'],
            ['message' => 'Remove old providers'],
            ['message' => 'Migrate routes'],
            ['message' => 'Shift asset configuration'],
            ['message' => 'Convert implicit controller routes'],
            ['message' => 'Migration for queue tables'],
        ]);

        $shift = Shift::create([
            'name' => 'Laravel 5.4 Shift',
            'sku' => '54',
            'type' => 'Laravel',
            'slug' => 'upgrade-laravel-54-pr',
            'published_at' => '2017-01-24',
        ]);
        $shift->commits()->createMany([
            ['message' => 'Shift core files'],
            ['message' => 'Rename collection methods'],
            ['message' => 'Shift Eloquent'],
            ['message' => 'Rename session methods'],
            ['message' => 'Convert container methods'],
            ['message' => 'Convert to `event` helper', 'info' => true],
            ['message' => 'Shift URL facade methods'],
            ['message' => 'Bump Laravel dependencies'],
        ]);

        $shift = Shift::create([
            'name' => 'Laravel 5.5 Shift',
            'sku' => '55',
            'type' => 'Laravel',
            'slug' => 'upgrade-laravel-55-pr',
            'published_at' => '2017-08-30',
        ]);
        $shift->commits()->createMany([
            ['message' => 'Shift core files'],
            ['message' => 'Shift references to core exceptions'],
            ['message' => 'Shift console commands'],
            ['message' => 'Shift Eloquent'],
            ['message' => 'Shift request methods'],
            ['message' => 'Rename test assertions'],
            ['message' => 'Convert dynamic "with" view variables'],
            ['message' => 'Bump Laravel dependencies'],
        ]);

        $shift = Shift::create([
            'name' => 'Laravel 5.6 Shift',
            'sku' => '56',
            'type' => 'Laravel',
            'slug' => 'upgrade-laravel-56-pr',
            'published_at' => '2018-02-07',
        ]);
        $shift->commits()->createMany([
            ['message' => 'Shift middleware'],
            ['message' => 'Update Eloquent method visibility'],
            ['message' => 'Shift test files'],
            ['message' => 'Shift log references'],
            ['message' => 'Shift core files'],
            ['message' => 'Convert `bcrypt` to `Hash::make`'],
            ['message' => 'Shift deprecated Resource class'],
            ['message' => 'Bump Laravel dependencies'],
        ]);

        $shift = Shift::create([
            'name' => 'Laravel 5.7 Shift',
            'sku' => '57',
            'type' => 'Laravel',
            'slug' => 'upgrade-laravel-57-pr',
            'published_at' => '2018-09-04',
        ]);
        $shift->commits()->createMany([
            ['message' => 'Shift bindings', 'info' => true],
            ['message' => 'Shift core files'],
            ['message' => 'Shift middleware'],
            ['message' => 'Shift Route redirects'],
            ['message' => 'Convert Blade `or` to PHP `??`'],
            ['message' => 'Move assets'],
            ['message' => 'Inject new request parameter'],
            ['message' => 'Bump Laravel dependencies'],
        ]);

        $shift = Shift::create([
            'name' => 'Laravel 5.8 Shift',
            'sku' => '58',
            'type' => 'Laravel',
            'slug' => 'upgrade-laravel-58-pr',
            'published_at' => '2019-02-26',
        ]);
        $shift->commits()->createMany([
            ['message' => 'Shift bindings', 'info' => true],
            ['message' => 'Shift core files'],
            ['message' => 'Convert to `event` helper', 'info' => true],
            ['message' => 'Remove explicit `deleted_at` date cast'],
            ['message' => 'Shift deferred Service Providers'],
            ['message' => 'Shift Markdown directory and methods'],
            ['message' => 'Convert Cache TTL from minutes to seconds', 'info' => true],
            ['message' => 'Shift URL facade methods'],
            ['message' => 'Bump Laravel dependencies'],
        ]);

        $shift = Shift::create([
            'name' => 'Laravel 6.x Shift',
            'sku' => '60',
            'type' => 'Laravel',
            'slug' => 'upgrade-laravel-60-pr',
            'published_at' => '2019-09-03',
        ]);
        $shift->commits()->createMany([
            ['message' => 'Replace deprecated Array and String helpers', 'info' => true],
            ['message' => 'Leverage `HOME` constant'],
            ['message' => 'Shift deferred Service Providers'],
            ['message' => 'Convert `Input` to `Request` facade', 'info' => true],
            ['message' => 'Shift Lang methods'],
            ['message' => 'Shift to Carbon 2'],
            ['message' => 'Shift assertion methods', 'info' => true],
            ['message' => 'Bump Laravel dependencies'],
        ]);

        $shift = Shift::create([
            'name' => 'Laravel 7.x Shift',
            'sku' => '70',
            'type' => 'Laravel',
            'slug' => 'upgrade-laravel-70-pr',
            'published_at' => '2020-03-03',
        ]);
        $shift->commits()->createMany([
            ['message' => 'Shift to Throwable'],
            ['message' => 'Add laravel/ui dependency'],
            ['message' => 'Shift Blade "tag components"'],
            ['message' => 'Unindent vendor mail templates'],
            ['message' => 'Shift Eloquent methods'],
            ['message' => 'Convert factory types to states'],
            ['message' => 'Shift test config and references'],
            ['message' => 'Bump Laravel dependencies'],
        ]);

        $shift = Shift::create([
            'name' => 'Laravel 8.x Shift',
            'sku' => '80',
            'type' => 'Laravel',
            'slug' => 'upgrade-laravel-80-pr',
            'published_at' => '2020-09-08',
        ]);
        $shift->commits()->createMany([
            ['message' => 'Shift core files'],
            ['message' => 'Remove web.config'],
            ['message' => 'Rename `retryAfter` and `timeoutAt'],
            ['message' => 'Set return type of base TestCase methods'],
            ['message' => 'Convert route options to fluent methods', 'info' => true],
            ['message' => 'Shift to class based routes'],
            ['message' => 'Convert deprecated `$dates` property to `$casts`'],
            ['message' => 'Add `uuid` to `failed_jobs` table'],
        ]);

        $shift = Shift::create([
            'name' => 'Laravel 9.x Shift',
            'sku' => '90',
            'type' => 'Laravel',
            'slug' => 'upgrade-laravel-90-pr',
            'published_at' => '2022-02-08',
        ]);
        $shift->commits()->createMany([
            ['message' => 'Shift core files'],
            ['message' => 'Rename collection methods'],
            ['message' => 'Shift Eloquent'],
            ['message' => 'Rename session methods'],
            ['message' => 'Convert container methods'],
            ['message' => 'Convert to `event` helper', 'info' => true],
            ['message' => 'Shift URL facade methods'],
            ['message' => 'Bump Laravel dependencies'],
        ]);

        $shift = Shift::create([
            'name' => 'Laravel 10.x Shift',
            'sku' => '10',
            'type' => 'Laravel',
            'slug' => 'upgrade-laravel-10-pr',
            'published_at' => '2023-02-14',
        ]);
        $shift->commits()->createMany([
            ['message' => 'Shift core files'],
            ['message' => 'Convert `optional()` to nullsafe operator'],
            ['message' => 'Use Faker methods', 'info' => true],
            ['message' => 'Convert removed `$dates` property to `$casts`'],
            ['message' => 'Add type hints for Laravel 10'],
            ['message' => 'Remove redundant typing in DocBlocks'],
            ['message' => 'Bump Laravel dependencies'],
            ['message' => 'Shift config files'],
        ]);

        $shift = Shift::create([
            'name' => 'Laravel 11.x Shift',
            'sku' => '11',
            'type' => 'Laravel',
            'slug' => 'upgrade-laravel-11-pr',
            'published_at' => '2024-03-12',
        ]);
        $shift->commits()->createMany([
            ['message' => 'Remove default `app` files'],
            ['message' => 'Streamline config files'],
            ['message' => 'Convert `$casts` property to method'],
            ['message' => 'Re-register HTTP middleware'],
            ['message' => 'Re-register exceptions'],
            ['message' => 'Re-register scheduled commands'],
            ['message' => 'Bump Composer dependencies'],
        ]);

        $shift = Shift::create([
            'name' => 'Laravel 12.x Shift',
            'sku' => '12',
            'type' => 'Laravel',
            'slug' => 'upgrade-laravel-12-pr',
            'published_at' => '2025-02-24',
        ]);
        $shift->commits()->createMany([
            ['message' => 'Adopt new PHP attributes in models'],
            ['message' => 'Dispatch jobs directly'],
            ['message' => 'Use `Gate` facade for controller authorization'],
            ['message' => 'Remove unused `ValidatesRequests` trait'],
            ['message' => 'Modernize controller middleware'],
            ['message' => 'Remove base controller inheritance'],
            ['message' => 'Add new Laravel `composer run dev` script'],
            ['message' => 'Bump Composer dependencies'],
        ]);

        $shift = Shift::create([
            'name' => 'Laravel 12.31.0 Shift',
            'sku' => 'SP',
            'type' => 'Laravel',
            'slug' => 'weekly-laravel-upgrade-pr',
            'published_at' => '2025-09-23',
        ]);
        $shift->commits()->createMany([
            ['message' => 'Bump Laravel version constraint'],
            ['message' => 'Bump core Laravel dependencies'],
            ['message' => 'Bump community package dependencies'],
            ['message' => 'composer update'],
        ]);

        // additional Shifts
        $shift = Shift::create([
            'name' => '"Fast Laravel" Configuration',
            'sku' => 'FL',
            'type' => 'Laravel',
            'slug' => 'fast-laravel-cache-configuration-pr',
            'published_at' => today(),
        ]);
        $shift->commits()->createMany([
            ['message' => 'Custom `cache-control` middleware'],
            ['message' => 'Register `static` middleware group'],
            ['message' => 'Install `nexxai/laravel-cfcache`'],
            ['message' => 'Shift cleanup'],
        ]);

        $shift = Shift::create([
            'name' => 'Laravel Linter',
            'sku' => 'LL',
            'type' => 'Laravel',
            'slug' => 'laravel-linter-pr',
            'published_at' => today(),
        ]);
        $shift->commits()->createMany([
            ['message' => 'Add `.shift` to open Pull Request'],
        ]);

        $shift = Shift::create([
            'name' => 'Laravel Fixer',
            'sku' => 'LF',
            'type' => 'Laravel',
            'slug' => 'laravel-fixer-pr',
            'published_at' => today(),
        ]);
        $shift->commits()->createMany([
            ['message' => 'Remove unnecessary `$table` property', 'info' => true],
            ['message' => 'Leverage injected request object', 'info' => true],
            ['message' => 'Convert validation rules to array syntax'],
            ['message' => 'Shift to class based route', 'info' => true],
            ['message' => 'Streamline calls to `orderBy`'],
            ['message' => 'Convert to helper methods', 'info' => true],
            ['message' => 'Modernize Blade directives', 'info' => true],
            ['message' => 'Leverage command autoloading', 'info' => true],
        ]);

        $shift = Shift::create([
            'name' => 'Laravel Slimmer',
            'sku' => 'LS',
            'type' => 'Laravel',
            'slug' => 'laravel-slimmer-pr',
            'published_at' => today(),
        ]);
        $shift->commits()->createMany([
            ['message' => 'Remove default `app` files'],
            ['message' => 'Streamline config files'],
            ['message' => 'Set new `ENV` variables'],
            ['message' => 'Consolidate service providers'],
            ['message' => 'Re-register HTTP middleware'],
            ['message' => 'Re-register exception handling'],
            ['message' => 'Re-register scheduled commands'],
        ]);

        $shift = Shift::create([
            'name' => 'Tests Generator',
            'sku' => 'TG',
            'type' => 'Laravel',
            'slug' => 'laravel-tests-generator-pr',
            'published_at' => today(),
        ]);
        $shift->commits()->createMany([
            ['message' => 'Shift core testing files'],
            ['message' => 'Include helpful testing packages', 'info' => true],
            ['message' => 'Generate model factories'],
            ['message' => 'Generate HTTP tests for controllers'],
            ['message' => 'Generate unit tests for form requests'],
            ['message' => 'Generate tests for console commands'],
            ['message' => 'Configure basic testing environment'],
        ]);

        $shift = Shift::create([
            'name' => 'Namespace Models Shift',
            'sku' => 'NM',
            'type' => 'Laravel',
            'slug' => 'namespace-laravel-models-pr',
            'published_at' => today(),
        ]);
        $shift->commits()->createMany([
            ['message' => 'Shift bindings', 'info' => true],
            ['message' => 'Namespace models under App\Models'],
        ]);

        $shift = Shift::create([
            'name' => 'Namespace Consolidator',
            'sku' => 'CN',
            'type' => 'Laravel',
            'slug' => 'consolidate-laravel-namespaces-pr',
            'published_at' => today(),
        ]);
        $shift->commits()->createMany([
            ['message' => 'Apply Laravel code style', 'info' => true],
            ['message' => 'Condense `Example` into default Laravel namespace'],
        ]);

        $shift = Shift::create([
            'name' => 'Dependency Upgrader',
            'sku' => 'DU',
            'type' => 'Laravel',
            'slug' => 'upgrade-laravel-dependencies-pr',
            'published_at' => today(),
        ]);
        $shift->commits()->createMany([
            ['message' => 'Shift dependencies', 'info' => true],
            ['message' => 'Bump `laravel/framework`', 'info' => true],
            ['message' => 'Bump `fzaninotto/faker`', 'info' => true],
        ]);

        $shift = Shift::create([
            'name' => 'Vite Converter',
            'sku' => 'VC',
            'type' => 'Laravel',
            'slug' => 'convert-laravel-mix-to-vite',
            'published_at' => '2022-06-28',
        ]);
        $shift->commits()->createMany([
            ['message' => 'Add npm dependencies'],
            ['message' => 'Update npm scripts'],
            ['message' => 'Configure Vite'],
            ['message' => 'Use ES modules'],
            ['message' => 'Rename ENV variables'],
            ['message' => 'Use new `@vite` Blade directive'],
            ['message' => 'Convert test helpers'],
            ['message' => 'Update build command references'],
        ]);

        $shift = Shift::create([
            'name' => 'April Fools\' Shift',
            'sku' => 'AF',
            'type' => 'Laravel',
            'slug' => 'laravel-april-fools-pr',
            'published_at' => '2023-04-01',
        ]);
        $shift->commits()->createMany([
            ['message' => 'Add `.shift` to open Pull Request'],
        ]);

        $shift = Shift::create([
            'name' => 'HTML Converter',
            'sku' => 'HC',
            'type' => 'Laravel',
            'slug' => 'convert-laravelcollective-html-to-spatie-laravel-html',
            'published_at' => '2023-08-31',
        ]);
        $shift->commits()->createMany([
            ['message' => 'Swap dependencies'],
            ['message' => 'Convert `Form` facade'],
            ['message' => 'Convert `Html` facade'],
            ['message' => 'Convert Blade directives'],
        ]);

        $shift = Shift::create([
            'name' => 'Laravel PreShift',
            'sku' => 'PS',
            'type' => 'Laravel',
            'slug' => 'upgrade-laravel-guide',
            'published_at' => '2024-10-01',
        ]);
        $shift->commits()->createMany([
            ['message' => 'Adopt short array syntax', 'info' => true],
            ['message' => 'Convert string references to `::class`', 'info' => true],
            ['message' => 'Apply code style', 'info' => true],
        ]);

        // Lumen
        $shift = Shift::create([
            'name' => 'Lumen to Laravel Shift',
            'sku' => 'LTL',
            'type' => 'Lumen',
            'slug' => 'convert-lumen-to-laravel-pr',
            'published_at' => today(),
        ]);
        $shift->commits()->createMany([
            ['message' => 'Shift bindings', 'info' => true],
            ['message' => 'Adopt short array syntax', 'info' => true],
            ['message' => 'Shift folder structure', 'info' => true],
            ['message' => 'Shift core files'],
            ['message' => 'Merge config files'],
            ['message' => 'Migrate routes'],
            ['message' => 'Shift Facades'],
            ['message' => 'Bump Laravel dependencies'],
        ]);

        // Tailwind
        $shift = Shift::create([
            'name' => 'Tailwind 1.x Shift',
            'sku' => 'T1',
            'type' => 'Tailwind',
            'slug' => 'upgrade-tailwind-1-pr',
            'published_at' => '2019-05-13',
        ]);
        $shift->commits()->createMany([
            ['message' => 'Bump Tailwind dependencies'],
            ['message' => 'Upgrade to Laravel Mix 5'],
            ['message' => 'Shift Tailwind config'],
            ['message' => 'Convert `config()` to `theme()`'],
            ['message' => 'Explicitly style previously defaulted elements'],
            ['message' => 'Shift core Tailwind utilities', 'info' => true],
            ['message' => 'Convert max-width utilities', 'info' => true],
            ['message' => 'Convert to Tailwind 1.0 colors'],
        ]);

        $shift = Shift::create([
            'name' => 'Tailwind 2.x Shift',
            'sku' => 'T2',
            'type' => 'Tailwind',
            'slug' => 'upgrade-tailwind-2-pr',
            'published_at' => '2020-11-18',
        ]);
        $shift->commits()->createMany([
            ['message' => 'Bump Tailwind dependencies'],
            ['message' => 'Add `line-height` for responsive font sizes'],
            ['message' => 'Normalize `@apply` utility names'],
            ['message' => 'Shift Tailwind config'],
            ['message' => 'Shift core Tailwind utilities'],
            ['message' => 'Remove `theme()` array references'],
            ['message' => 'Prefix Tailwind animations'],
            ['message' => 'Convert to Tailwind 2.0 colors'],
        ]);

        $shift = Shift::create([
            'name' => 'Tailwind 3.x Shift',
            'sku' => 'T3',
            'type' => 'Tailwind',
            'slug' => 'upgrade-tailwind-3-pr',
            'published_at' => '2021-12-09',
        ]);
        $shift->commits()->createMany([
            ['message' => 'Bump Tailwind dependencies'],
            ['message' => 'Configure JIT mode'],
            ['message' => 'Shift Tailwind config'],
            ['message' => 'Rename deprecated `screens` directive to `variants`'],
            ['message' => 'Shift core Tailwind utilities'],
            ['message' => 'Replace `@variants` with `@layer`'],
            ['message' => 'Convert to Tailwind 3.0 colors'],
        ]);

        $shift = Shift::create([
            'name' => 'Tailwind UI Shift',
            'sku' => 'TU',
            'type' => 'Tailwind',
            'slug' => 'upgrade-tailwind-ui-pr',
            'published_at' => '2020-11-18',
        ]);
        $shift->commits()->createMany([
            ['message' => 'Bump Tailwind UI dependencies'],
            ['message' => 'Shift Tailwind config'],
            ['message' => 'Remove custom-forms classes'],
            ['message' => 'Convert content width classes'],
            ['message' => 'Convert to new focus ring utilities'],
            ['message' => 'Configure fractional padding values'],
            ['message' => 'Configure Tailwind UI variants'],
            ['message' => 'Remove transitions'],
        ]);

        // PHP
        $shift = Shift::create([
            'name' => 'PSR-2 Shift',
            'sku' => 'P2',
            'type' => 'PHP',
            'slug' => 'automate-php-psr2-pr',
            'published_at' => today(),
        ]);
        $shift->commits()->createMany([
            ['message' => 'Apply PSR-2 code style'],
        ]);

        $shift = Shift::create([
            'name' => 'PSR-4 Shift',
            'sku' => 'P4',
            'type' => 'PHP',
            'slug' => 'automate-php-psr2-pr',
            'published_at' => today(),
        ]);
        $shift->commits()->createMany([
            ['message' => 'Upgrade `Example` namespace from PSR-0 to PSR-4'],
        ]);

        $shift = Shift::create([
            'name' => 'MySQL to MySQLi Shift',
            'sku' => 'MM',
            'type' => 'PHP',
            'slug' => 'automate-php-mysql-mysqli-pr',
            'published_at' => today(),
        ]);
        $shift->commits()->createMany([
            ['message' => 'Replace MySQL with equivalent MySQLi functions'],
            ['message' => 'Add required resource link for MySQLi functions'],
            ['message' => 'Upgrade MySQL connection for MySQLi'],
        ]);

        $shift = Shift::create([
            'name' => 'PHPUnit 6 Shift',
            'sku' => 'PU6',
            'type' => 'PHP',
            'slug' => 'upgrade-phpunit-6-pr',
            'published_at' => '2017-02-03',
        ]);
        $shift->commits()->createMany([
            ['message' => 'Bump `phpunit/phpunit` dependency'],
            ['message' => 'Adopt short array syntax', 'info' => true],
            ['message' => 'Shift to PSR-4 namespace'],
        ]);

        $shift = Shift::create([
            'name' => 'PHPUnit 8 Shift',
            'sku' => 'PU8',
            'type' => 'PHP',
            'slug' => 'upgrade-phpunit-8-pr',
            'published_at' => '2019-02-01',
        ]);
        $shift->commits()->createMany([
            ['message' => 'Bump `phpunit/phpunit` dependency'],
            ['message' => 'Adopt short array syntax', 'info' => true],
            ['message' => 'Set return type of base TestCase methods', 'info' => true],
            ['message' => 'Shift assertion methods', 'info' => true],
        ]);

        $shift = Shift::create([
            'name' => 'PHPUnit 9 Shift',
            'sku' => 'PU9',
            'type' => 'PHP',
            'slug' => 'upgrade-phpunit-9-pr',
            'published_at' => '2020-02-07',
        ]);
        $shift->commits()->createMany([
            ['message' => 'Bump `phpunit/phpunit` dependency'],
            ['message' => 'Adopt short array syntax', 'info' => true],
            ['message' => 'Set return type of base TestCase methods', 'info' => true],
            ['message' => 'Convert `assertStringContains` assertion methods', 'info' => true],
            ['message' => 'Convert `assertInternalType` assertion methods', 'info' => true],
        ]);

        $shift = Shift::create([
            'name' => 'PHPUnit 10 Shift',
            'sku' => 'PU10',
            'type' => 'PHP',
            'slug' => 'upgrade-phpunit-10-pr',
            'published_at' => '2023-02-03',
        ]);
        $shift->commits()->createMany([
            ['message' => 'Bump PHPUnit dependencies'],
            ['message' => 'Ignore PHPUnit cache folder', 'info' => true],
            ['message' => 'Rename core assertions'],
            ['message' => 'Declare data providers as `static`'],
            ['message' => 'Adopt PHP attributes in test classes'],
            ['message' => 'Add return types to test methods'],
            ['message' => 'Define test classes as `final`'],
        ]);

        $shift = Shift::create([
            'name' => 'Pest Converter',
            'sku' => 'PP',
            'type' => 'PHP',
            'slug' => 'convert-phpunit-pest-pr',
            'published_at' => today(),
        ]);
        $shift->commits()->createMany([
            ['message' => 'Add Pest dependencies'],
            ['message' => 'Add base Pest file'],
            ['message' => 'Convert test cases'],
            ['message' => 'Remove non-compound imports'],
            ['message' => 'Adopt expectation API'],
            ['message' => 'Optimize uses'],
            ['message' => 'Set return type of base TestCase methods', 'info' => true],
            ['message' => 'Use Pest test runner'],
        ]);

        $shift = Shift::create([
            'name' => 'CI Generator',
            'sku' => 'CI',
            'type' => 'PHP',
            'slug' => 'generate-ci-workflow-pr',
            'published_at' => today(),
        ]);
        $shift->commits()->createMany([
            ['message' => 'Configure job for linting'],
            ['message' => 'Configure job for code style'],
            ['message' => 'Configure job for code analysis'],
            ['message' => 'Configure job for tests'],
            ['message' => 'Configure job for Dusk'],
        ]);
    }
}
