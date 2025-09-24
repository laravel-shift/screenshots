@extends('layouts.pr')

@section('description')
<p>This pull request includes updates for the recent minor version release of Laravel as well as bumps your package dependencies. You may review the full list of changes in the <a href="https://github.com/laravel/framework/releases/tag/v12.30.0" class="text-blue-500">Laravel Release Notes</a>, or highlighted changes and tips in the weekly <a href="https://shiftybits.news" class="text-blue-500">Shifty Bits newsletter</a>.</p>

<p><strong>Before merging</strong>, you need to:</p>

<ul class="ml-6 list-disc">
    <li class="mb-1">Checkout the <code>shift-ci-v12.30.0</code> branch</li>
    <li class="mb-1">Review <strong>all</strong> pull request comments for additional changes</li>
    <li class="mb-1">Run <code>composer update</code></li>
    <li class="mb-1">Thoroughly test your application (<a href="https://laravelshift.com/laravel-test-generator">no tests?</a>, <a href="https://laravelshift.com/ci-generator">no CI?</a>)</li>
</ul>
@endsection
