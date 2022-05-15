@extends('layouts.pr')

@section('description')
<p>This pull request includes changes for namespacing models under <code class="px-1 rounded bg-gray-100 text-xs">App\Models</code>. Feel free to commit any additional changes to the <code class="px-1 rounded bg-gray-100 text-xs">shift-{{ $number }}</code> branch.</p>

<p><strong>Before merging</strong>, you need to:</p>

<ul class="ml-6 list-disc">
    <li class="mb-1">Checkout the <code class="px-1 rounded bg-gray-100 text-xs">shift-{{ $number }}</code> branch</li>
    <li class="mb-1">Review <strong>all</strong> pull request comments for additional changes</li>
    <li class="mb-1">Thoroughly test your application (<a class="text-blue-500" href="https://laravelshift.com/laravel-test-generator">no tests?</a>, <a class="text-blue-500" href="https://laravelshift.com/ci-generator">no CI?</a>)</li>
</ul>

@endsection
