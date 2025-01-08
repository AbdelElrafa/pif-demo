<header class="relative h-[116px] w-full bg-header-gradient bg-cover bg-no-repeat py-5 text-sm text-gray-800">
    <div class="mx-auto grid h-[76px] max-w-[1320px] grid-cols-12 items-center px-2">
        <!-- Logo -->
        <div class="col-span-2 flex h-[76px] items-center">
            <a
                class="w-full text-gray-400 underline"
                href="https://www.pif.gov.sa/en"
            >
                <img
                    class="w-[170px]"
                    src="{{ Vite::image('white-logo.svg') }}"
                    alt="PIF Logo"
                />
            </a>
        </div>
        <!-- Nav (hidden on smaller screens) -->
        <div class="col-span-10">
            <div class="grid grid-cols-12">
                <nav class="col-span-10 flex w-full">
                    <ul class="hidden w-full items-center justify-around text-white lg:flex">
                        <x-layouts.partials.nav-item
                            href="https://www.pif.gov.sa/en/who-we-are/"
                            label="Who we are"
                            :submenu="[
                                [
                                    'href' => 'https://www.pif.gov.sa/en/who-we-are/our-leadership/',
                                    'label' => 'Our Leadership',
                                ],
                                [
                                    'href' => 'https://www.pif.gov.sa/en/who-we-are/our-history/',
                                    'label' => 'Our History',
                                ],
                            ]"
                        />
                        <x-layouts.partials.nav-item
                            href="https://www.pif.gov.sa/en/our-investments/"
                            label="Our Investments"
                            :submenu="[
                                [
                                    'href' => 'https://www.pif.gov.sa/en/our-investments/our-portfolio/',
                                    'label' => 'Our Portfolio',
                                ],
                                [
                                    'href' => 'https://www.pif.gov.sa/en/our-investments/giga-projects/',
                                    'label' => 'Giga-Projects',
                                ],
                                [
                                    'href' => 'https://www.pif.gov.sa/en/our-investments/investment-pools/',
                                    'label' => 'Investment Pools',
                                ],
                                [
                                    'href' =>
                                        'https://www.pif.gov.sa/en/our-investments/governance-and-investment-decisions/',
                                    'label' => 'Governance and Investment Decisions',
                                ],
                            ]"
                        />
                        <x-layouts.partials.nav-item
                            href="https://www.pif.gov.sa/en/strategy-and-impact/"
                            label="Strategy & Impact"
                            :submenu="[
                                [
                                    'href' => 'https://www.pif.gov.sa/en/strategy-and-impact/the-program/',
                                    'label' => 'Our Program',
                                ],
                                [
                                    'href' => 'https://www.pif.gov.sa/en/strategy-and-impact/invested-in-better/',
                                    'label' => 'Invested in Better',
                                ],
                            ]"
                        />
                        <x-layouts.partials.nav-item
                            href="https://www.pif.gov.sa/en/investors/"
                            label="Investors"
                            :submenu="[
                                [
                                    'href' => 'https://www.pif.gov.sa/en/investors/green-finance-framework/',
                                    'label' => 'Green Finance Framework',
                                ],
                                [
                                    'href' => 'https://www.pif.gov.sa/en/investors/capital-markets-program/',
                                    'label' => 'Capital Markets Program',
                                ],
                                [
                                    'href' => 'https://www.pif.gov.sa/en/investors/annual-reports/',
                                    'label' => 'Annual Reports',
                                ],
                                [
                                    'href' => 'https://www.pif.gov.sa/en/investors/financial-statements/',
                                    'label' => 'Financial Statements',
                                ],
                                [
                                    'href' => 'https://www.pif.gov.sa/en/investors/credit-rating/',
                                    'label' => 'Credit Ratings',
                                ],
                            ]"
                        />
                        <x-layouts.partials.nav-item
                            href="https://www.pif.gov.sa/en/news-and-insights/"
                            label="News & Insights"
                            :submenu="[
                                [
                                    'href' => 'https://www.pif.gov.sa/en/news-and-insights/press-releases/',
                                    'label' => 'Press Releases',
                                ],
                                [
                                    'href' => 'https://www.pif.gov.sa/en/news-and-insights/newswire/',
                                    'label' => 'Newswire',
                                ],
                                [
                                    'href' => 'https://www.pif.gov.sa/en/news-and-insights/global-insights/',
                                    'label' => 'PIF Global Insights',
                                ],
                                [
                                    'href' => 'https://www.pif.gov.sa/en/news-and-insights/in-the-media/',
                                    'label' => 'In the Media',
                                ],
                                [
                                    'href' => 'https://www.pif.gov.sa/en/news-and-insights/press-contacts/',
                                    'label' => 'Press Contacts',
                                ],
                            ]"
                        />
                        <x-layouts.partials.nav-item
                            href="https://www.pif.gov.sa/en/private-sector-hub/"
                            label="Private Sector Hub"
                            :submenu="[
                                [
                                    'href' =>
                                        'https://www.pif.gov.sa/en/private-sector-hub/private-sector-initiatives/',
                                    'label' => 'Private Sector <br> Initiatives',
                                ],
                                [
                                    'href' => 'https://www.pif.gov.sa/en/private-sector-hub/explore-opportunities/',
                                    'label' => 'Explore Opportunities',
                                ],
                                [
                                    'href' => 'https://www.pif.gov.sa/en/private-sector-hub/become-a-supplier/',
                                    'label' => 'Become a Supplier',
                                ],
                                [
                                    'href' => 'https://www.pif.gov.sa/en/private-sector-hub/success-stories/',
                                    'label' => 'Success Stories',
                                ],
                                [
                                    'href' => 'https://www.pif.gov.sa/en/private-sector-hub/leadership-vision/',
                                    'label' => 'Leadership Vision',
                                ],
                                ['href' => 'https://www.pif.gov.sa/en/private-sector-hub/faq/', 'label' => 'FAQ'],
                            ]"
                        />
                    </ul>
                </nav>
            </div>
            <!-- Right side -->
            {{-- <div class="ml-4 flex items-center space-x-4">
                <a
                    class="font-medium uppercase text-white"
                    href="https://www.pif.gov.sa/ar/private-sector-hub/"
                >ar</a>
                <a
                    class="flex h-10 w-10 items-center justify-center rounded-full border-2 border-white text-gray-400"
                    href="https://www.pif.gov.sa/javascript:void(0);"
                >
                    <!-- Icon or text can go here -->
                </a>
            </div> --}}
        </div>
    </div>
</header>
