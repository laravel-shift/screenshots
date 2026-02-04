@extends('layouts.pr')

@section('description')
<p>This pull request serves as a readiness report for migrating to <a class="text-blue-500"  href="#cloud">Laravel Cloud</a>. Shift analyzes your application code and configuration to check for common compatibility issues.</p>

<p>Your application appears to be compatible. You're ready to migrate to Laravel Cloud!</p>

<p><b>Before merging</b>, you should:</p>

<ul class="ml-6 list-disc">
    <li class="mb-1">Checkout the <code>shift-{{ $number }}</code> branch</li>
    <li class="mb-1">Run <code>composer update</code> to bump your dependencies</li>
</ul>

<p>If you would like additional support with your migration, you may reach out to a <i>Laravel Cloud Expert</i>.</p>

@endsection
