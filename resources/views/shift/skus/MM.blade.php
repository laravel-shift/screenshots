@extends('layouts.pr')

@section('description')
<p>This pull request contains changes for upgrading from using the <a class="text-blue-500" href="http://php.net/manual/en/book.mysql.php">deprecated MySQL extension</a> to using the <a class="text-blue-500" href="http://php.net/manual/en/book.mysqli.php">MySQLi extension</a> by the <a class="text-blue-500" href="https://php-shift.com/upgrade-mysql-mysqli">PHP MySQLi Shift</a>.</p>

<p><strong>Before merging</strong>, you need to:</p>

<ul class="ml-6 list-disc">
<li class="mb-1">Checkout the <code class="px-1 rounded bg-gray-100 text-xs">shift-{{ $number }}</code> branch</li>
<li class="mb-1">Review <strong>all</strong> pull request comments for additional changes</li>
<li class="mb-1">Thoroughly test your application</li>
</ul>

<p>If you need help with your upgrade, check out the <a class="text-blue-500" href="https://laravelshift.com/human-shifts">Human Shifts</a>. You may also join the <a class="text-blue-500" href="https://laravelshift.com/shifty-coders">Shifty Coders</a> Slack workspace to level-up your Laravel skills.</p>

@endsection
