@extends('layouts.pr')

@section('description')
<p>This pull request contains changes for streamlining your Tailwind configuration file and utilities.</p>

<p><strong>Before merging</strong>, you need to:</p>

<ul class="ml-6 list-disc">
    <li>Checkout the <code class="px-1 rounded bg-gray-100 text-xs">shift-{{ $number }}</code> branch</li>
    <li>Review all pull request comments for additional changes</li>
    <li>Verify your Tailwind build</li>
</ul>

@endsection
