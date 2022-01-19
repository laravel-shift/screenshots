<div class="pt-4 pl-4">
    <div class="border-l-2 pl-6">
        <div class="-ml-8 pt-1 text-gray-600">
            <svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1" width="16" data-view-component="true" class="-ml-px inline-block fill-current bg-white">
                <path fill-rule="evenodd" d="M10.5 7.75a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0zm1.43.75a4.002 4.002 0 01-7.86 0H.75a.75.75 0 110-1.5h3.32a4.001 4.001 0 017.86 0h3.32a.75.75 0 110 1.5h-3.32z"></path>
            </svg>
            <h2 class="ml-3 inline-block">Commits on {{ $shift->published_at->format('M j, Y') }}</h2>
        </div>

        <div class="mt-4 border border-gray-300 rounded-lg divide-y divide-gray-300">
            @php
                $minutes = rand(5, 30);
            @endphp
            @foreach($shift->commits as $commit)
                <div class="px-4 py-2 flex justify-between items-center">
                    <div>
                        <h3 class="font-semibold text-gray-800">{{ $commit->message }}</h3>
                        <p class="mt-1 flex items-center gap-1 text-gray-600 text-xs">
                            <span class="inline-flex items-center gap-1">
                                <img src="/images/shift-avatar.png" class="inline-block h-5 w-5 rounded-full" />
                                <strong class="text-gray-800">laravel-shift</strong>
                            </span>
                            <span>committed {{ $minutes }} minutes ago</span>
                            @if ($loop->last)
                            <svg role="img" height="16" viewBox="0 0 16 16" version="1.1" width="16" data-view-component="true" class="inline-block fill-current text-green-700">
                                <path fill-rule="evenodd" d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path>
                            </svg>
                            @endif
                        </p>
                    </div>
                    <div class="flex items-center gap-3">
                        <div>
                            <span class="px-2 py-1 text-xs text-green-700 border border-gray-300 rounded-full">Verified</span>
                        </div>
                        <div class="flex gap-2">
                            <div class="flex bg-gray-50 border border-gray-300 rounded-md divide-x divide-gray-300">
                                <span class="px-4 py-1">
                                    <svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1" width="16" data-view-component="true" class="inline-block fill-current text-gray-500">
                                        <path fill-rule="evenodd" d="M0 6.75C0 5.784.784 5 1.75 5h1.5a.75.75 0 010 1.5h-1.5a.25.25 0 00-.25.25v7.5c0 .138.112.25.25.25h7.5a.25.25 0 00.25-.25v-1.5a.75.75 0 011.5 0v1.5A1.75 1.75 0 019.25 16h-7.5A1.75 1.75 0 010 14.25v-7.5z"></path><path fill-rule="evenodd" d="M5 1.75C5 .784 5.784 0 6.75 0h7.5C15.216 0 16 .784 16 1.75v7.5A1.75 1.75 0 0114.25 11h-7.5A1.75 1.75 0 015 9.25v-7.5zm1.75-.25a.25.25 0 00-.25.25v7.5c0 .138.112.25.25.25h7.5a.25.25 0 00.25-.25v-7.5a.25.25 0 00-.25-.25h-7.5z"></path>
                                    </svg>
                                </span>
                                <code class="px-4 py-1 text-xs leading-5 text-github-branch-fg">{{ implode(Arr::random(str_split('abcdef0123456789'), 7)) }}</code>
                            </div>
                            <div class="px-4 py-1 bg-gray-50 border border-gray-300 rounded-md">
                                <svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1" width="16" data-view-component="true" class="inline-block fill-current text-gray-500">
                                    <path fill-rule="evenodd" d="M4.72 3.22a.75.75 0 011.06 1.06L2.06 8l3.72 3.72a.75.75 0 11-1.06 1.06L.47 8.53a.75.75 0 010-1.06l4.25-4.25zm6.56 0a.75.75 0 10-1.06 1.06L13.94 8l-3.72 3.72a.75.75 0 101.06 1.06l4.25-4.25a.75.75 0 000-1.06l-4.25-4.25z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
