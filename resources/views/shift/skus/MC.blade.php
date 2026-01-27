@extends('layouts.pr')

@section('description')

<p>This pull request includes the changes for converting class-based Livewire components to the new multi-file components in Livewire 4. Feel free to commit any additional changes to the <code>shift-{{ $number }}</code> branch.</p>

<p><strong>Before merging</strong>, you need to:</p>

<ul class="ml-6 list-disc">
    <li class="mb-1">Checkout the <code>shift-{{ $number }}</code> branch</li>
    <li class="mb-1">Review <strong>all</strong> pull request comments for additional changes</li>
    <li class="mb-1">Clear any view cache</li>
    <li class="mb-1">Thoroughly test your application (<a class="text-blue-500" href="https://laravelshift.com/laravel-test-generator">no tests?</a>, <a class="text-blue-500" href="https://laravelshift.com/ci-generator">no CI?</a>)</li>
</ul>

<p>If you get stuck, never hesitate to <a class="text-blue-500" href="mailto:support@laravelshift.com">email support</a>. If you need more help with your upgrade, check out the <a class="text-blue-500" href="https://laravelshift.com/human-shifts">Human Shifts</a>.</p>

@endsection

