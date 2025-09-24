@extends('layouts.app')

@section('content')

@php
$number = intval($shift->sku) ? (intval($shift->sku) * 11000 + rand(111, 8200)) : Arr::random(['62250', '57130', '53019', '52721', '42690', '39899', '34450', '29127', '28475']);
$view = view()->exists('shift.skus.' . $shift->sku) ? 'pr' : 'commits';
$source = Arr::random(['main', 'master', 'develop', 'dev']);
@endphp

<main class="p-6 text-sm">
    <header class="border-b border-gray-300">
        <h1 class="text-3xl text-gray-900">{{ $shift->name }} <span class="text-gray-600">#{{ rand(100, 999) }}</span></h1>
        <div class="mt-4">
            <span class="px-3 py-2 rounded-full bg-github-merged text-white">
                <svg height="16" class="inline-block fill-current" viewBox="0 0 16 16" version="1.1" width="16" aria-hidden="true">
                    <path fill-rule="evenodd" d="M5 3.254V3.25v.005a.75.75 0 110-.005v.004zm.45 1.9a2.25 2.25 0 10-1.95.218v5.256a2.25 2.25 0 101.5 0V7.123A5.735 5.735 0 009.25 9h1.378a2.251 2.251 0 100-1.5H9.25a4.25 4.25 0 01-3.8-2.346zM12.75 9a.75.75 0 100-1.5.75.75 0 000 1.5zm-8.5 4.5a.75.75 0 100-1.5.75.75 0 000 1.5z"></path>
                </svg>
                Merged
            </span>
            <span class="ml-2 text-gray-600">
                <span class="font-bold">jasonmccreary</span>
                merged {{ $shift->commits->count() }} commits into
                <span class="font-mono p-1 rounded-md bg-github-branch-bg text-github-branch-fg text-xs">{{ $source }}</span>
                from
                <span class="font-mono p-1 rounded-md bg-github-branch-bg text-github-branch-fg text-xs">{{ $shift->sku === 'SP' ? 'shift-ci-v' . Str::between($shift->name, ' ') : 'shift-' . $number }}</span>
                <svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1" width="16" data-view-component="true" class="inline-block fill-current">
                    <path fill-rule="evenodd" d="M0 6.75C0 5.784.784 5 1.75 5h1.5a.75.75 0 010 1.5h-1.5a.25.25 0 00-.25.25v7.5c0 .138.112.25.25.25h7.5a.25.25 0 00.25-.25v-1.5a.75.75 0 011.5 0v1.5A1.75 1.75 0 019.25 16h-7.5A1.75 1.75 0 010 14.25v-7.5z"></path><path fill-rule="evenodd" d="M5 1.75C5 .784 5.784 0 6.75 0h7.5C15.216 0 16 .784 16 1.75v7.5A1.75 1.75 0 0114.25 11h-7.5A1.75 1.75 0 015 9.25v-7.5zm1.75-.25a.25.25 0 00-.25.25v7.5c0 .138.112.25.25.25h7.5a.25.25 0 00.25-.25v-7.5a.25.25 0 00-.25-.25h-7.5z"></path>
                </svg>
            </span>
        </div>

        <div class="mt-6 flex justify-between items-center">
            <nav class="flex gap-1">
                <a href="?view=pr" class="-m-px px-4 py-2 space-x-1 {{ $view === 'pr' ? 'bg-white border-t border-x border-gray-300 rounded-t-md text-gray-900' : 'text-gray-600' }}">
                    <svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1" width="16" data-view-component="true" class="inline-block fill-current">
                        <path fill-rule="evenodd" d="M1.5 2.75a.25.25 0 01.25-.25h8.5a.25.25 0 01.25.25v5.5a.25.25 0 01-.25.25h-3.5a.75.75 0 00-.53.22L3.5 11.44V9.25a.75.75 0 00-.75-.75h-1a.25.25 0 01-.25-.25v-5.5zM1.75 1A1.75 1.75 0 000 2.75v5.5C0 9.216.784 10 1.75 10H2v1.543a1.457 1.457 0 002.487 1.03L7.061 10h3.189A1.75 1.75 0 0012 8.25v-5.5A1.75 1.75 0 0010.25 1h-8.5zM14.5 4.75a.25.25 0 00-.25-.25h-.5a.75.75 0 110-1.5h.5c.966 0 1.75.784 1.75 1.75v5.5A1.75 1.75 0 0114.25 12H14v1.543a1.457 1.457 0 01-2.487 1.03L9.22 12.28a.75.75 0 111.06-1.06l2.22 2.22v-2.19a.75.75 0 01.75-.75h1a.25.25 0 00.25-.25v-5.5z"></path>
                    </svg>
                    <span>Conversation</span>
                    <span class="px-2 py-1 bg-gray-100 rounded-full text-sm">{{ $shift->sku === 'SP' ? 2 : Arr::random([6, 7, 8, 9, 10, 11]) }}</span>
                </a>

                <a href="?view=commits" class="-m-px px-4 py-2 space-x-1 {{ $view === 'commits' ? 'bg-white border-t border-x border-gray-300 rounded-t-md text-gray-900' : 'text-gray-600' }}">
                    <svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1" width="16" data-view-component="true" class="inline-block fill-current">
                        <path fill-rule="evenodd" d="M10.5 7.75a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0zm1.43.75a4.002 4.002 0 01-7.86 0H.75a.75.75 0 110-1.5h3.32a4.001 4.001 0 017.86 0h3.32a.75.75 0 110 1.5h-3.32z"></path>
                    </svg>
                    <span>Commits</span>
                    <span class="px-2 py-1 bg-gray-100 rounded-full text-sm">{{ $shift->commits->count() }}</span>
                </a>

                <span class="-m-px px-4 py-2 space-x-1 text-gray-600">
                    <svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1" width="16" data-view-component="true" class="inline-block fill-current">
                        <path fill-rule="evenodd" d="M2.5 1.75a.25.25 0 01.25-.25h8.5a.25.25 0 01.25.25v7.736a.75.75 0 101.5 0V1.75A1.75 1.75 0 0011.25 0h-8.5A1.75 1.75 0 001 1.75v11.5c0 .966.784 1.75 1.75 1.75h3.17a.75.75 0 000-1.5H2.75a.25.25 0 01-.25-.25V1.75zM4.75 4a.75.75 0 000 1.5h4.5a.75.75 0 000-1.5h-4.5zM4 7.75A.75.75 0 014.75 7h2a.75.75 0 010 1.5h-2A.75.75 0 014 7.75zm11.774 3.537a.75.75 0 00-1.048-1.074L10.7 14.145 9.281 12.72a.75.75 0 00-1.062 1.058l1.943 1.95a.75.75 0 001.055.008l4.557-4.45z"></path>
                    </svg>
                    <span>Checks</span>
                    <span class="px-2 py-1 bg-gray-100 rounded-full text-sm">1</span>
                </span>

                <span class="-m-px px-4 py-2 space-x-1 text-gray-600">
                    <svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1" width="16" data-view-component="true" class="inline-block fill-current">
                        <path fill-rule="evenodd" d="M2.75 1.5a.25.25 0 00-.25.25v12.5c0 .138.112.25.25.25h10.5a.25.25 0 00.25-.25V4.664a.25.25 0 00-.073-.177l-2.914-2.914a.25.25 0 00-.177-.073H2.75zM1 1.75C1 .784 1.784 0 2.75 0h7.586c.464 0 .909.184 1.237.513l2.914 2.914c.329.328.513.773.513 1.237v9.586A1.75 1.75 0 0113.25 16H2.75A1.75 1.75 0 011 14.25V1.75zm7 1.5a.75.75 0 01.75.75v1.5h1.5a.75.75 0 010 1.5h-1.5v1.5a.75.75 0 01-1.5 0V7h-1.5a.75.75 0 010-1.5h1.5V4A.75.75 0 018 3.25zm-3 8a.75.75 0 01.75-.75h4.5a.75.75 0 010 1.5h-4.5a.75.75 0 01-.75-.75z"></path>
                    </svg>
                    <span>Files changed</span>
                    <span class="px-2 py-1 bg-gray-100 rounded-full text-sm">{{ files_changed($shift) }}</span>
                </span>
            </nav>

            <span>
                <span class="text-xs text-green-700 font-bold">&plus;{{ plus_changes($shift) }}</span>
                <span class="text-xs text-red-700 font-bold">&minus;{{ minus_changes($shift) }}</span>
                <span class="inline-flex space-x-px">
                    <span class="inline-block h-2 w-2 bg-green-600"></span>
                    <span class="inline-block h-2 w-2 bg-green-600"></span>
                    <span class="inline-block h-2 w-2 bg-red-600"></span>
                    <span class="inline-block h-2 w-2 bg-red-600"></span>
                    <span class="inline-block h-2 w-2 bg-gray-100 border border-gray-300"></span>
                </span>
            </span>
        </div>
    </header>

    @includeFirst(["shift.skus.{$shift->sku}", 'partials.commits'])
</main>
@endsection
