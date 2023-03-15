@extends('layouts.pr')

@section('description')
<p>This pull request contains changes for upgrading to <a class="text-blue-500" href="https://phpunit.de/announcements/phpunit-10.html">PHPUnit 10</a> automated by the <a class="text-blue-500" href="https://laravelshift.com/upgrade-phpunit-10">PHPUnit 10 Shift</a>.</p>

<p><strong>Before merging</strong>, you need to:</p>

<ul class="ml-6 list-disc">
    <li class="mb-1">Checkout the <code>shift-{{ $number }}</code> branch</li>
    <li class="mb-1">Review <strong>all</strong> pull request comments for additional changes</li>
    <li class="mb-1">Run <code>composer update</code> (if the scripts fail, add <code>--no-scripts</code>)</li>
    <li class="mb-1">Run your test suite: <code>vendor/bin/phpunit</code></li>
</ul>

<p>If there were changes you felt could have been automated, please reply to the follow-up email with your feedback.</p>

@endsection
