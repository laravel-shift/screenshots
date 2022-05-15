@extends('layouts.pr')

@section('description')
<p>This pull request contains changes for upgrading to <a class="text-blue-500" href="https://phpunit.de/announcements/phpunit-9.html">PHPUnit 9</a> automated by the <a class="text-blue-500" href="https://laravelshift.com/upgrade-phpunit-9">PHPUnit 9 Shift</a>.</p>

<p><strong>Before merging</strong>, you should <strong>review all comments</strong> and commit any changes to the <code>shift-{{ $number }}</code> branch.</p>

<p>If there were changes you felt could have been automated, please reply to the follow-up email with your feedback.</p>

@endsection
