@extends('layouts.app')

@section('content')
<main>
    <header>
        <h1>Tailwind 3.x Shift <span>#800</span></h1>
        <div class="mb-2">
            <span class="round-full">
                <svg height="16" class="octicon octicon-git-merge" viewBox="0 0 16 16" version="1.1" width="16" aria-hidden="true">
                    <path fill-rule="evenodd" d="M5 3.254V3.25v.005a.75.75 0 110-.005v.004zm.45 1.9a2.25 2.25 0 10-1.95.218v5.256a2.25 2.25 0 101.5 0V7.123A5.735 5.735 0 009.25 9h1.378a2.251 2.251 0 100-1.5H9.25a4.25 4.25 0 01-3.8-2.346zM12.75 9a.75.75 0 100-1.5.75.75 0 000 1.5zm-8.5 4.5a.75.75 0 100-1.5.75.75 0 000 1.5z"></path>
                </svg>
                Merged
            </span>
            <span class="text-bold">{{ Arr::random(['jasonmccreary', 'jessarcher']) }}</span>
            merged {{ $shift->commits->count() }} commits into
            <span class="">{{ Arr::random(['main', 'master']) }}</span>
            from
            <span class="">shift-{{ Arr::random(['53019', '52721', '39899', '34450', '28475']) }}</span>
            on {{ $shift->published_at->format('m j, Y') }}
        </div>

        <nav>
            <span class="tab">
                <svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1" width="16" data-view-component="true" class="octicon octicon-comment-discussion d-none d-md-inline-block">
                    <path fill-rule="evenodd" d="M1.5 2.75a.25.25 0 01.25-.25h8.5a.25.25 0 01.25.25v5.5a.25.25 0 01-.25.25h-3.5a.75.75 0 00-.53.22L3.5 11.44V9.25a.75.75 0 00-.75-.75h-1a.25.25 0 01-.25-.25v-5.5zM1.75 1A1.75 1.75 0 000 2.75v5.5C0 9.216.784 10 1.75 10H2v1.543a1.457 1.457 0 002.487 1.03L7.061 10h3.189A1.75 1.75 0 0012 8.25v-5.5A1.75 1.75 0 0010.25 1h-8.5zM14.5 4.75a.25.25 0 00-.25-.25h-.5a.75.75 0 110-1.5h.5c.966 0 1.75.784 1.75 1.75v5.5A1.75 1.75 0 0114.25 12H14v1.543a1.457 1.457 0 01-2.487 1.03L9.22 12.28a.75.75 0 111.06-1.06l2.22 2.22v-2.19a.75.75 0 01.75-.75h1a.25.25 0 00.25-.25v-5.5z"></path>
                </svg>
                Conversation <span class="">{{ Arr::random([6, 7, 8, 9, 10, 11]) }}</span>
            </span>

            <span class="tab">
                <svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1" width="16" data-view-component="true" class="octicon octicon-git-commit d-none d-md-inline-block">
                    <path fill-rule="evenodd" d="M10.5 7.75a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0zm1.43.75a4.002 4.002 0 01-7.86 0H.75a.75.75 0 110-1.5h3.32a4.001 4.001 0 017.86 0h3.32a.75.75 0 110 1.5h-3.32z"></path>
                </svg>
                Commits <span class="">{{ $shift->commits->count() }}</span>
            </span>

            <span class="tab">
                <svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1" width="16" data-view-component="true" class="octicon octicon-checklist d-none d-md-inline-block">
                    <path fill-rule="evenodd" d="M2.5 1.75a.25.25 0 01.25-.25h8.5a.25.25 0 01.25.25v7.736a.75.75 0 101.5 0V1.75A1.75 1.75 0 0011.25 0h-8.5A1.75 1.75 0 001 1.75v11.5c0 .966.784 1.75 1.75 1.75h3.17a.75.75 0 000-1.5H2.75a.25.25 0 01-.25-.25V1.75zM4.75 4a.75.75 0 000 1.5h4.5a.75.75 0 000-1.5h-4.5zM4 7.75A.75.75 0 014.75 7h2a.75.75 0 010 1.5h-2A.75.75 0 014 7.75zm11.774 3.537a.75.75 0 00-1.048-1.074L10.7 14.145 9.281 12.72a.75.75 0 00-1.062 1.058l1.943 1.95a.75.75 0 001.055.008l4.557-4.45z"></path>
                </svg>
                Checks <span class="">1</span>
            </span>

            <span class="tab">
                <svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1" width="16" data-view-component="true" class="octicon octicon-file-diff d-none d-md-inline-block">
                    <path fill-rule="evenodd" d="M2.75 1.5a.25.25 0 00-.25.25v12.5c0 .138.112.25.25.25h10.5a.25.25 0 00.25-.25V4.664a.25.25 0 00-.073-.177l-2.914-2.914a.25.25 0 00-.177-.073H2.75zM1 1.75C1 .784 1.784 0 2.75 0h7.586c.464 0 .909.184 1.237.513l2.914 2.914c.329.328.513.773.513 1.237v9.586A1.75 1.75 0 0113.25 16H2.75A1.75 1.75 0 011 14.25V1.75zm7 1.5a.75.75 0 01.75.75v1.5h1.5a.75.75 0 010 1.5h-1.5v1.5a.75.75 0 01-1.5 0V7h-1.5a.75.75 0 010-1.5h1.5V4A.75.75 0 018 3.25zm-3 8a.75.75 0 01.75-.75h4.5a.75.75 0 010 1.5h-4.5a.75.75 0 01-.75-.75z"></path>
                </svg>
                Files changed <span class="">{{ $shift->isTailwind() ? Arr::random([23, 39, 42, 56, 63]) : Arr::random([63, 76, 82, 91, 103, 111, 123, 142, 256]) }}</span>
            </span>
        </nav>
    </header>

    @includeWhen($view === 'pr', 'partials.pr')
    @includeUnless($view === 'pr', 'partials.commits')
</main>
@endsection
