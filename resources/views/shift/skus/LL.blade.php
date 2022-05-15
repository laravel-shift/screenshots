@extends('layouts.pr')

@section('description')
<p>This pull request includes changes and recommendations for crafting your application <em>"The Laravel Way"</em>. Feel free to commit any additional changes to the <code class="px-1 rounded bg-gray-100 text-xs">shift-{{ $number }}</code> branch.</p>

<p><strong>Before merging</strong>, you need to:</p>

<ul class="ml-6 list-disc">
    <li class="mb-1">Checkout the <code class="px-1 rounded bg-gray-100 text-xs">shift-{{ $number }}</code> branch</li>
    <li class="mb-1">Review <strong>all</strong> pull request comments for additional changes</li>
    <li class="mb-1">Thoroughly test your application (<a class="text-blue-500" href="https://laravelshift.com/laravel-test-generator">no tests?</a>, <a class="text-blue-500" href="https://laravelshift.com/ci-generator">no CI?</a>)</li>
</ul>

<p>Much of the <em>lint</em> detected may be automatically fixed by running the <a class="text-blue-500" href="https://laravelshift.com/laravel-code-fixer">Laravel Fixer</a> or tasks within the <a class="text-blue-500" href="https://laravelshift.com/workbench">Shift Workbench</a>.</p>

@endsection
