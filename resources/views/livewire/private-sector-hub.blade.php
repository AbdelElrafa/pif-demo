<div class="min-h-screen bg-gray-100">
    <div class="mx-auto max-w-7xl px-4 py-12 sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
            <div class="p-6">
                <nav class="mb-8">
                    {{ Breadcrumbs::render('private-sector-hub') }}
                </nav>

                <div class="flex items-center justify-between">
                    <a
                        class="inline-flex items-center rounded-md border border-transparent bg-gray-600 px-4 py-2 text-xs font-semibold uppercase tracking-widest text-white transition duration-150 ease-in-out hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 active:bg-gray-900"
                        href="{{ route('home') }}"
                        wire:navigate
                    >
                        Back to Home
                    </a>

                    @if (Route::isLocalized() || Route::isFallback())
                        <div class="flex space-x-4">
                            @foreach (LocaleConfig::getLocales() as $locale)
                                @if (!App::isLocale($locale))
                                    <a
                                        class="text-sm text-gray-600 hover:text-gray-900"
                                        href="{{ Route::localizedUrl($locale) }}"
                                        wire:navigate
                                    >
                                        {{ strtoupper($locale) }}
                                    </a>
                                @endif
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
