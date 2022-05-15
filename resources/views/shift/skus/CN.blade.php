@extends('layouts.pr')

@section('description')

<p>This pull request includes the changes for upgrading to Laravel 9.x. Feel free to commit any additional changes to the <code class="px-1 rounded bg-gray-100 text-xs">shift-{{ $number }}</code> branch.</p>

<p><strong>Before merging</strong>, you need to:</p>

<ul class="ml-6 list-disc">
    <li>Checkout the <code class="px-1 rounded bg-gray-100 text-xs">shift-{{ $number }}</code> branch</li>
    <li>Review all pull request comments for additional changes</li>
    <li>Run <code class="px-1 rounded bg-gray-100 text-xs">composer update</code> (if the scripts fail, add <code class="px-1 rounded bg-gray-100 text-xs">--no-scripts</code>)</li>
    <li>Clear any config, route, or view cache</li>
    <li>Thoroughly test your application (<a class="text-blue-500" href="https://laravelshift.com/laravel-test-generator">no tests?</a>, <a class="text-blue-500" href="https://laravelshift.com/ci-generator">no CI?</a>)</li>
</ul>
<p>If you need help with your upgrade, check out the <a class="text-blue-500" href="https://laravelshift.com/human-shifts">Human Shifts</a>. You may also join the <a class="text-blue-500" href="https://laravelshift.com/shifty-coders">Shifty Coders</a> Slack workspace to level-up your Laravel skills.</p>

@endsection
