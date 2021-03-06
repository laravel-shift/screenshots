@extends('layouts.pr')

@section('description')
<p>This pull request contains changes for upgrading to <a class="text-blue-500" href="https://phpunit.de/announcements/phpunit-8.html">PHPUnit 8</a> automated by the <a class="text-blue-500" href="https://laravelshift.com/upgrade-phpunit-8">PHPUnit 8 Shift</a>.</p>

<p><strong>Before merging</strong>, you should <strong>review all comments</strong> and commit any changes to the <code>shift-{{ $number }}</code> branch.</p>

<p>If there were changes you felt could have been automated, please reply to the follow-up email with your feedback.</p>

@endsection
