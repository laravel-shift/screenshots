@extends('layouts.pr')

@section('description')
<p>This pull request contains comments from a sarcastic <i>Shift bot</i> regarding outdated practices still detected even after upgrading over 85,000 Laravel applications.</p>

<p>While these comments are left in jest, they are still real suggestions you might consider. Feel free to remove the <code>.shift</code> file and commit any refactors to the <code>shift-{{ $number }}</code> branch.</p>

<p>Happy April Fools' Day from <a class="text-blue-500" href="https://laravelshift.com">Shift</a>!</p>

@endsection
