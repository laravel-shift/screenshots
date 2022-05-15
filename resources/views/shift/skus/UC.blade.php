@extends('layouts.pr')

@section('description')
<p>This pull request contains changes and comments noting <em>incompatible</em> or <em>deprecated</em> code by the <a class="text-blue-500" href="https://laravelshift.com/laravel-upgrade-checker">Upgrade Checker</a>. You should review each comment and commit changes to the <code>shift-62345</code> branch before merging.</p>

<p>Many of the potential changes found by this Shift may be automated by running the <a class="text-blue-500" href="https://laravelshift.com/laravel-code-fixer">Laravel Fixer</a> or tasks within the <a class="text-blue-500" href="https://laravelshift.com/workbench">Shift Workbench</a>.</p>

@endsection
