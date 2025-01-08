@props(['href', 'label', 'submenu' => []])

<li
    class="relative capitalize"
    x-data="{
        isOpen: false,
        timeOut: null,
        open() {
            $dispatch('close-other-menus', { except: $el });
            clearTimeout(this.timeOut);
            this.isOpen = true;
        },
        close() {
            this.timeOut = setTimeout(() => {
                this.isOpen = false;
            }, 350);
        },
        forceClose() {
            clearTimeout(this.timeOut);
            this.isOpen = false;
        }
    }"
    x-on:mouseenter="open()"
    x-on:mouseleave="close()"
    x-on:close-other-menus.window="$event.detail.except !== $el && forceClose()"
>
    <a
        class="flex items-center hover:text-gray-200"
        href="{{ $href }}"
    >
        {{ $label }}
    </a>

    @if (!empty($submenu))
        <ul
            class="absolute left-0 z-50 mt-6 flex min-w-64 flex-col gap-2 rounded-[20px] bg-white p-5 shadow-xl"
            x-show="isOpen"
            x-cloak
            x-transition
        >
            @foreach ($submenu as $item)
                <li>
                    <a
                        class="flex w-full items-center gap-2 whitespace-nowrap text-sm font-normal text-black transition-all duration-300 ease-in-out [font-variation-settings:'wght'_400] after:invisible after:inline-block after:h-[27px] after:w-[50px] after:shrink-0 after:rounded-l-full after:rounded-r-full after:border after:border-[#005c4d] after:bg-arrow-black-right after:bg-center after:bg-no-repeat after:opacity-0 after:transition-all after:duration-300 after:ease-in-out hover:font-bold hover:text-[#005c4d] hover:[font-variation-settings:'wght'_700] hover:after:visible hover:after:opacity-100"
                        href="{{ $item['href'] }}"
                    >
                        {!! $item['label'] !!}
                    </a>
                </li>
            @endforeach
        </ul>
    @endif
</li>
