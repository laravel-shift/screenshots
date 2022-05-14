@extends('layouts.pr')

@section('content')

<p>This pull request includes the changes for upgrading to Laravel 9.x. Feel free to commit any additional changes to the <code class="px-1 rounded bg-gray-100 text-xs">shift-{{ $number }}</code> branch.</p>
<p><strong>Before merging</strong>, you need to:</p>
<ul class="ml-6 list-disc">
    <li>Checkout the <code class="px-1 rounded bg-gray-100 text-xs">shift-{{ $number }}</code> branch</li>
    <li>Review all pull request comments for additional changes</li>
    <li>Run <code class="px-1 rounded bg-gray-100 text-xs">composer update</code> (if the scripts fail, add <code class="px-1 rounded bg-gray-100 text-xs">--no-scripts</code>)</li>
    <li>Clear any config, route, or view cache</li>
    <li>Thoroughly test your application (no tests?, no CI?)</li>
</ul>
<p>If you need help with your upgrade, check out the Human Shifts. You may also join the Shifty Coders Slack workspace to level-up your Laravel skills.</p>

@endsection
