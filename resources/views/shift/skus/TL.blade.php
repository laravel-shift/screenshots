@extends('layouts.pr')

@section('description')
<p>This pull request contains changes for streamlining your Tailwind configuration file and utilities.</p>

<p><strong>Before merging</strong>, you need to:</p>

<ul class="ml-6 list-disc">
    <li class="mb-1">Checkout the <code>shift-{{ $number }}</code> branch</li>
    <li class="mb-1">Review <strong>all</strong> pull request comments for additional changes</li>
    <li class="mb-1">Verify your Tailwind build</li>
</ul>

@endsection
