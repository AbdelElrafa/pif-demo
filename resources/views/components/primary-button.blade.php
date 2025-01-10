<div class="{{ $class ?? '' }} flex min-h-[88px] flex-row items-end">
    <a
        class="max-h-[58px] rounded-full bg-primary px-[30px] py-[17px] text-sm font-medium text-white hover:bg-hover"
        href="{{ $href ?? '#' }}"
    >
        {{ $slot }}
    </a>
</div>
