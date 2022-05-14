@extends('layouts.pr')

@section('description')
<p>This pull request contains changes for upgrading namespaces from the <a href="http://www.php-fig.org/psr/psr-0/">deprecated PSR-0 standard</a> to the <a href="http://www.php-fig.org/psr/psr-4/">PSR-4 standard</a> automated by the <a href="https://laravelshift.com/upgrade-namespace-psr0-psr4">PHP PSR-4 Shift</a>.</p>

<p>You should review any comments and commit any changes to the <code class="px-1 rounded bg-gray-100 text-xs">shift-{{ $number }}</code> branch <strong>before merging</strong>.</p>

@endsection
