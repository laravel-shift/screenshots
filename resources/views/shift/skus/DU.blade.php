@extends('layouts.pr')

@section('description')
<p>This pull request includes minor version updates for your package dependencies as well as major version updates for packages with known compatibility. Feel free to commit any additional changes to the <code class="px-1 rounded bg-gray-100 text-xs">shift-{{ $number }}</code> branch.</p>

<p><strong>Before merging</strong>, you need to:</p>

<ul>
    <li>Checkout the <code class="px-1 rounded bg-gray-100 text-xs">shift-{{ $number }}</code> branch</li>
    <li>Review <strong>all</strong> pull request comments for additional changes</li>
    <li>Run <code>composer update</code></li>
    <li>Thoroughly test your application (<a href="https://laravelshift.com/laravel-test-generator">no tests?</a>, <a href="https://laravelshift.com/ci-generator">no CI?</a>)</li>
</ul>

@endsection
