<div class="min-h-screen bg-cream pb-24">
    <div
        class="mx-auto max-w-[calc(100%-2.812rem)] sm:max-w-[calc(100%-3rem)] md:max-w-[720px] lg:max-w-[1140px] 2xl:max-w-[1320px]">
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
        <div
            class="mb-6 mt-[25px] flex flex-col-reverse overflow-hidden rounded-lg bg-white shadow-sm md:mb-[60px] lg:flex-row">
            <x-half-column-content class="px-[15px] py-[30px] md:px-[25px]">
                <div class="flex flex-col justify-center p-0 lg:px-[80px] lg:py-[112px]">
                    <h2 class="mb-[15px] text-[26px] font-medium md:text-field-title">Overview</h2>
                    <p class="mb-[15px] leading-[27px]">Growing the private sector is one of the highest priorities for
                        PIF considering
                        its crucial role to the development and growth of the Saudi economy. PIF, as a key economic
                        vehicle and an enabler for realizing the Kingdom’s Vision 2030, is committed to facilitating the
                        private sector’s growth.
                    </p>
                    <p class="mb-[15px] leading-[27px]"><span class="text-[18px] font-medium text-yellow-600">The
                            PIF Private
                            Sector
                            Hub</span></strong> is
                        designed to be a
                        one stop shop for the private
                        sector companies to engage with PIF and its portfolio companies across priority sectors. At the
                        heart of this vision lies a commitment to connect entrepreneurs, investors, and suppliers with
                        exceptional opportunities to drive Saudi Arabia's economic growth and prosperity.</p>
                </div>
            </x-half-column-content>

            <x-half-column-image>
                <img
                    class="h-full w-full object-cover"
                    src="{{ Vite::image('our-portfolio.png') }}"
                    alt="Our Portfolio"
                />
            </x-half-column-image>

        </div>
        <div class="mb-6 flex flex-col overflow-hidden rounded-lg bg-white shadow-sm md:mb-[60px] lg:flex-row">
            <x-half-column-image>
                <img
                    class="w-full object-cover md:h-full"
                    src="{{ Vite::image('private-sector-hub.png') }}"
                    alt="Private Sector Hub"
                />
            </x-half-column-image>
            <x-half-column-content class="px-[15px] py-[30px] md:px-[25px]">
                <div class="flex flex-col justify-center p-0 lg:px-[80px] lg:py-[112px]">
                    <h2 class="mb-[15px] text-[26px] font-medium md:text-field-title">Private Sector Initiatives
                    </h2>
                    <h4 class="mb-[15px] text-field-subtitle font-light uppercase">Empowering the private sector to
                        achieve our nation’s ambition</h4>
                    <p class="mb-[15px] leading-[27px]">The PIF Programs are designed to facilitate the growth of the
                        private sector. PIF launched MUSAHAMA Program to enhance the Local Content contribution of PIF
                        with a Local Content target of 60% by 2025. In addition, PIF has launched the Supplier
                        Development Program to develop suppliers’ capabilities and capacities by implementing measures
                        across demand, supply, matchmaking and enabling pillars.
                    </p>
                    <x-primary-button href="#">Learn More</x-primary-button>
                </div>
            </x-half-column-content>

        </div>
        <div class="mb-6 flex flex-col-reverse overflow-hidden rounded-lg bg-white shadow-sm md:mb-[60px] lg:flex-row">
            <x-two-third-column-content>
                <div
                    class="relative flex flex-col justify-center px-[25px] py-[30px] md:px-[30px] lg:px-[100px] lg:py-[80px]">
                    <h2 class="mb-[15px] text-[22px] font-medium leading-[26px] md:text-[34px] md:leading-[44px]">
                        Explore Opportunities
                    </h2>
                    <h4 class="mb-[15px] text-[18px] font-medium leading-[26px] md:text-2xl md:leading-[34px]">PIF’s
                        ecosystem presents
                        vast business
                        opportunities for the private sector
                    </h4>
                    <p class="mb-[15px] leading-[27px]">The Explore Opportunities section provides a platform for
                        private sector companies to discover and capitalize on investment opportunities within PIF
                        portfolio companies' value chains. These opportunities span multiple sectors and offer
                        attractive prospects for private sector companies to participate in PIF’s activities in the
                        local economy.</p>
                    <x-stroke-button
                        class="relative justify-end md:absolute md:bottom-0 md:right-[35px] md:min-h-[88px]"
                        href="#"
                    >
                        <svg
                            class="text-2xl hover:text-white"
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                        >
                            <path
                                fill="currentColor"
                                fill-rule="evenodd"
                                d="M16.72 7.72a.75.75 0 0 1 1.06 0l3.75 3.75a.75.75 0 0 1 0 1.06l-3.75 3.75a.75.75 0 1 1-1.06-1.06l2.47-2.47H3a.75.75 0 0 1 0-1.5h16.19l-2.47-2.47a.75.75 0 0 1 0-1.06"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </x-stroke-button>

                </div>
            </x-two-third-column-content>
            <x-one-third-column-image>
                <img
                    class="h-[400px] w-full object-cover md:h-full"
                    src="{{ Vite::image('explore-opportunities-updated.png') }}"
                    alt="The Public Investment Fund provides private sector investment opportunities to enhance the growth of the Saudi economy"
                />
            </x-one-third-column-image>

        </div>
        <div class="mb-6 flex flex-col overflow-hidden rounded-lg bg-white shadow-sm md:mb-[60px] lg:flex-row">
            <x-one-third-column-image>
                <img
                    class="h-[400px] w-full object-cover md:h-full"
                    src="{{ Vite::image('become-a-supplier-updated.png') }}"
                    alt="Join MUSAHAMA Platform to become a supplier to PIF Portfolio Companies"
                />
            </x-one-third-column-image>
            <x-two-third-column-content>
                <div
                    class="relative flex flex-col justify-center px-[25px] py-[30px] md:px-[30px] lg:px-[100px] lg:py-[80px]">
                    <h2 class="mb-[15px] text-[22px] font-medium leading-[26px] md:text-[34px] md:leading-[44px]">Become
                        a Supplier

                    </h2>
                    <p class="mb-[15px] leading-[27px]">Join MUSAHAMA Platform and express your interest to become a
                        supplier to PIF Portfolio Companies across 13 priority sectors.</p>
                    <img
                        class="max-h-[400px] max-w-[157px] object-cover md:h-[130px]"
                        src="{{ Vite::image('musahama-removebg-preview.png') }}"
                        alt="musahama-logo"
                    />
                    <x-stroke-button
                        class="relative justify-end md:absolute md:bottom-0 md:right-[35px]"
                        href="#"
                    >
                        <svg
                            class="text-2xl hover:text-white"
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                        >
                            <path
                                fill="currentColor"
                                fill-rule="evenodd"
                                d="M16.72 7.72a.75.75 0 0 1 1.06 0l3.75 3.75a.75.75 0 0 1 0 1.06l-3.75 3.75a.75.75 0 1 1-1.06-1.06l2.47-2.47H3a.75.75 0 0 1 0-1.5h16.19l-2.47-2.47a.75.75 0 0 1 0-1.06"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </x-stroke-button>
                </div>
            </x-two-third-column-content>
        </div>
        <div class="mb-6 flex flex-col-reverse overflow-hidden rounded-lg bg-white shadow-sm md:mb-[60px] lg:flex-row">
            <x-two-third-column-content class="">
                <div
                    class="relative flex flex-col justify-center px-[25px] py-[30px] md:px-[30px] lg:px-[100px] lg:py-[80px]">
                    <h2 class="mb-[15px] text-[22px] font-medium leading-[26px] md:text-[34px] md:leading-[44px]">
                        Success Stories

                    </h2>
                    <h4 class="mb-[15px] text-[18px] font-medium leading-[26px] md:text-2xl md:leading-[34px]">
                        Celebrating the impactful collaborations
                        with the Private Sector

                    </h4>
                    <p class="mb-[15px] leading-[27px]">The Success Stories section showcases a selection of companies
                        that have achieved remarkable success through strategic partnerships with PIF and its portfolio
                        companies. These stories provide a glimpse into how strategic partnerships can unlock remarkable
                        growth and success in a variety of fields for the private sector companies.

                    </p>
                    <x-stroke-button
                        class="relative justify-end md:absolute md:bottom-8 md:right-[35px]"
                        href="#"
                    >
                        <svg
                            class="text-2xl hover:text-white"
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                        >
                            <path
                                fill="currentColor"
                                fill-rule="evenodd"
                                d="M16.72 7.72a.75.75 0 0 1 1.06 0l3.75 3.75a.75.75 0 0 1 0 1.06l-3.75 3.75a.75.75 0 1 1-1.06-1.06l2.47-2.47H3a.75.75 0 0 1 0-1.5h16.19l-2.47-2.47a.75.75 0 0 1 0-1.06"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </x-stroke-button>

                </div>
            </x-two-third-column-content>
            <x-one-third-column-image>
                <img
                    class="h-[400px] w-full object-cover md:h-full"
                    src="{{ Vite::image('success-stories.png') }}"
                    alt="The Public Investment Fund provides private sector investment opportunities to enhance the growth of the Saudi economy"
                />
            </x-one-third-column-image>

        </div>
        <div class="mb-6 flex flex-col overflow-hidden rounded-lg bg-white shadow-sm md:mb-[60px] lg:flex-row">
            <x-one-third-column-image class="">
                <img
                    class="w-full object-cover md:h-full"
                    src="{{ Vite::image('leadership-landing.png') }}"
                    alt="Join MUSAHAMA Platform to become a supplier to PIF Portfolio Companies"
                />
            </x-one-third-column-image>
            <x-two-third-column-content class="p-0">
                <div
                    class="relative flex flex-col justify-center px-[25px] py-[30px] md:px-[30px] lg:px-[100px] lg:py-[80px]">
                    <h2 class="mb-[15px] text-[22px] font-medium leading-[26px] md:text-[34px] md:leading-[44px]">
                        Leadership Vision
                    </h2>
                    <p class="mb-[15px] leading-[27px]">As a catalyst of Vision 2030, PIF is driving the transformation
                        of Saudi Arabia's economy by developing strategic sectors and solutions for the future. The Fund
                        is spurring growth for the private sector to spearhead a sustainable national economy and help
                        grow the global economy.

                    </p>
                    <x-stroke-button
                        class="relative justify-end md:absolute md:bottom-0 md:right-[35px]"
                        href="#"
                    >
                        <svg
                            class="text-2xl hover:text-white"
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                        >
                            <path
                                fill="currentColor"
                                fill-rule="evenodd"
                                d="M16.72 7.72a.75.75 0 0 1 1.06 0l3.75 3.75a.75.75 0 0 1 0 1.06l-3.75 3.75a.75.75 0 1 1-1.06-1.06l2.47-2.47H3a.75.75 0 0 1 0-1.5h16.19l-2.47-2.47a.75.75 0 0 1 0-1.06"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </x-stroke-button>
                </div>
            </x-two-third-column-content>
        </div>
        <div class="mb-6 flex flex-col-reverse overflow-hidden rounded-lg bg-white shadow-sm md:mb-[60px] lg:flex-row">
            <x-two-third-column-content class="pb-5">
                <div
                    class="relative flex flex-col justify-center px-[25px] py-[30px] md:px-[30px] lg:px-[100px] lg:py-[80px]">
                    <h2 class="mb-[15px] text-[22px] font-medium leading-[44px] md:text-[34px]">FAQs
                    </h2>
                    <h4 class="mb-[15px] text-[18px] font-medium leading-[26px] md:text-2xl md:leading-[34px]">Finding
                        answers to frequently
                        asked
                        questions related to the Private Sector Hub</h4>

                    <p class="mb-[15px] leading-[27px]">The FAQs section provides informative answers to common
                        questions, helping users navigate the Private Sector Hub effectively. This curated list of
                        frequently asked questions assists users in understanding our processes, ensuring a smooth and
                        informative experience on the platform.</p>
                    <x-stroke-button
                        class="relative justify-end md:absolute md:bottom-5 md:right-[35px]"
                        href="#"
                    >
                        <svg
                            class="text-2xl hover:text-white"
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                        >
                            <path
                                fill="currentColor"
                                fill-rule="evenodd"
                                d="M16.72 7.72a.75.75 0 0 1 1.06 0l3.75 3.75a.75.75 0 0 1 0 1.06l-3.75 3.75a.75.75 0 1 1-1.06-1.06l2.47-2.47H3a.75.75 0 0 1 0-1.5h16.19l-2.47-2.47a.75.75 0 0 1 0-1.06"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </x-stroke-button>
                </div>
            </x-two-third-column-content>
            <x-one-third-column-image class="">
                <img
                    class="w-full object-cover md:h-full"
                    src="{{ Vite::image('FAQ.png') }}"
                    alt="FAQ frequently asked questions related to the Private Sector Hub"
                />
            </x-one-third-column-image>
        </div>
        <div class="mb-6 flex flex-col overflow-hidden md:mb-[60px] md:px-[7px]">
            <div>
                <h2 class="mb-[40px] text-[26px] font-medium md:text-field-title">Continue Browsing</h2>
            </div>
            <div class="mb-[40px] flex flex-col justify-between gap-4 gap-x-0 md:flex-row md:gap-x-10 md:gap-y-10">
                <x-half-column-content class="">
                    <a
                        class="relative h-64 bg-cover bg-center"
                        href="#"
                    >
                        <div class="">
                            <img
                                class="h-[210px] w-full rounded-2xl object-cover md:px-[8px]"
                                src="{{ Vite::image('our-programs-for-psh.png') }}"
                                alt="Our Program"
                            />
                        </div>
                        <div
                            class="absolute bottom-[15px] left-[25px] right-[25px] flex flex-row items-center justify-center gap-4 text-white md:bottom-[20px]">
                            <h4 class="mb-[15px] text-[18px] font-medium leading-[26px] md:text-2xl md:leading-[34px]">
                                Our Programs
                                For The Private
                                Sector</h4>
                            <div
                                class="flex min-h-[27px] min-w-[50px] items-center justify-center rounded-full border">
                                <svg
                                    class="text-2xl text-white"
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        fill="currentColor"
                                        fill-rule="evenodd"
                                        d="M16.72 7.72a.75.75 0 0 1 1.06 0l3.75 3.75a.75.75 0 0 1 0 1.06l-3.75 3.75a.75.75 0 1 1-1.06-1.06l2.47-2.47H3a.75.75 0 0 1 0-1.5h16.19l-2.47-2.47a.75.75 0 0 1 0-1.06"
                                        clip-rule="evenodd"
                                    />
                                </svg>
                            </div>
                        </div>
                    </a>
                </x-half-column-content>
                <x-half-column-content class="">
                    <a
                        class="relative h-64 bg-cover bg-center"
                        href="#"
                    >
                        <div class="">
                            <img
                                class="h-[210px] w-full rounded-2xl object-cover md:px-[8px]"
                                src="{{ Vite::image('our-portfolio-continue.png') }}"
                                alt="Our Portfolio"
                            />
                        </div>
                        <div
                            class="absolute bottom-[15px] left-[25px] flex flex-row items-center justify-center gap-4 text-white md:bottom-[20px]">
                            <h4 class="mb-[15px] text-[18px] font-medium leading-[26px] md:text-2xl md:leading-[34px]">
                                Our Portfolio
                            </h4>
                            <div
                                class="flex min-h-[27px] min-w-[50px] items-center justify-center rounded-full border">
                                <svg
                                    class="text-2xl text-white"
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        fill="currentColor"
                                        fill-rule="evenodd"
                                        d="M16.72 7.72a.75.75 0 0 1 1.06 0l3.75 3.75a.75.75 0 0 1 0 1.06l-3.75 3.75a.75.75 0 1 1-1.06-1.06l2.47-2.47H3a.75.75 0 0 1 0-1.5h16.19l-2.47-2.47a.75.75 0 0 1 0-1.06"
                                        clip-rule="evenodd"
                                    />
                                </svg>
                            </div>
                        </div>
                    </a>
                </x-half-column-content>
            </div>
        </div>
    </div>
</div>
