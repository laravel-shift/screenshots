@extends('layouts.pr')

@section('description')
<p>This pull request contains changes for upgrading from using the <a href="http://php.net/manual/en/book.mysql.php">deprecated MySQL extension</a> to using the <a href="http://php.net/manual/en/book.mysqli.php">MySQLi extension</a> by the <a href="https://php-shift.com/upgrade-mysql-mysqli">PHP MySQLi Shift</a>.</p>

<p><strong>Before merging</strong>, you need to:</p>

<ul>
<li>Checkout the <code class="px-1 rounded bg-gray-100 text-xs">shift-{{ $number }}</code> branch</li>
<li>Review <strong>all</strong> pull request comments for additional changes</li>
<li>Thoroughly test your application</li>
</ul>

<p>If you need help with your upgrade, check out the <a href="https://laravelshift.com/human-shifts">Human Shifts</a>. You may also join the <a href="https://laravelshift.com/shifty-coders">Shifty Coders</a> Slack workspace to level-up your Laravel skills.</p>

@endsection
