@unless ($breadcrumbs->isEmpty())
    <nav
        class="flex"
        aria-label="Breadcrumb"
    >
        <ol class="inline-flex items-center space-x-1 md:space-x-2">
            @foreach ($breadcrumbs as $breadcrumb)
                @if (!is_null($breadcrumb->url) && !$loop->last)
                    <li>
                        <div class="flex items-center">
                            @if (!$loop->first)
                                <svg
                                    class="mx-1 h-4 w-4 text-gray-400"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"
                                    ></path>
                                </svg>
                            @endif
                            <a
                                class="text-sm font-medium text-blue-600 hover:text-blue-900"
                                href="{{ $breadcrumb->url }}"
                                wire:navigate
                            >
                                {{ $breadcrumb->title }}
                            </a>
                        </div>
                    </li>
                @else
                    <li aria-current="page">
                        <div class="flex items-center">
                            @if (!$loop->first)
                                <svg
                                    class="mx-1 h-4 w-4 text-gray-400"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"
                                    ></path>
                                </svg>
                            @endif
                            <span class="text-sm font-medium text-gray-500">
                                {{ $breadcrumb->title }}
                            </span>
                        </div>
                    </li>
                @endif
            @endforeach
        </ol>
    </nav>
@endunless
