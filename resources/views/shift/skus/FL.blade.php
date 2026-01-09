@extends('layouts.pr')

@section('description')

<p>This pull request configures your Laravel application for caching responses. Notably by registering a <a class="text-blue-500" href="https://laravel-news.com/separate-your-cloudflare-page-cache-with-a-middleware-group" rel="nofollow">separate middleware group</a>. You may then register routes within this middleware group to cache their response.</p>
<p><b>Before merging</b>, you should:</p>
<ul>
    <li>Checkout the <code>{{ $branch }}</code> branch</li>
    <li>Review <strong>all</strong> pull request comments for additional changes</li>
    <li>Test your application (<a class="text-blue-500" href="https://laravelshift.com/laravel-test-generator" rel="nofollow">no tests?</a>, <a class="text-blue-500" href="https://laravelshift.com/ci-generator" rel="nofollow">no CI?</a>)</li>
</ul>
<p>If you want to learn more about caching your Laravel application using free Cloudflare services, watch the <a class="text-blue-500" href="https://fastlaravel.com" rel="nofollow">Fast Laravel</a> video course.</p>

@endsection
