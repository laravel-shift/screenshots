@extends('layouts.pr')

@section('description')

<p>This pull request contains changes from the <a class="text-blue-500" href="https://laravelshift.com/laravel-preshift">Laravel PreShift</a> to give you a feel for upgrading with <a class="text-blue-500" href="https://laravelshift.com">Shift</a>. All Shifts open a pull request with the changes in nice, atomic commits. This allows you to review each change in isolation.</p>
<p>Shifts also leave comments with details on any additional changes you may need to make, or changes you may want to make to follow the latest Laravel conventions.</p>

<p>To review a Shift:</p>

<ul class="ml-6 list-disc">
    <li class="mb-1">Checkout the <code>shift-130306</code> branch</li>
    <li class="mb-1">Review <strong>all</strong> pull request comments for additional changes</li>
    <li class="mb-1">Run <code>composer update</code> (if the scripts fail, try with <code>--no-scripts</code>)</li>
    <li class="mb-1">Clear any config, route, or view cache</li>
    <li class="mb-1">Thoroughly test your application (<a class="text-blue-500" href="https://laravelshift.com/laravel-test-generator">no tests?</a>, <a class="text-blue-500" href="https://laravelshift.com/ci-generator">no CI?</a>)</li>
</ul>

<p>If you have any issue with your Shift, never hesitate to contact <a class="text-blue-500" href="mailto:support@laravelshift.com">support@laravelshift.com</a>, or check out the <a class="text-blue-500" href="https://laravelshift.com/human-shifts">Human Shifts</a> for more hands-on support.</p>

@endsection
