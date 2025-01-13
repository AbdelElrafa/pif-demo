<div class="{{ $class ?? '' }} flex min-h-[88px] flex-row items-end">
    <a
        class="w-fit rounded-full border-2 border-white bg-primary px-[30px] py-[17px] text-sm font-medium leading-5 text-white transition-all duration-300 ease-in-out hover:border-hover hover:bg-hover"
        href="{{ $href ?? '#' }}"
    >
        {{ $slot }}
    </a>
</div>
