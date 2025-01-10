<div class="{{ $class ?? '' }} flex flex-row items-end">
    <a
        class="flex min-h-[42px] min-w-[77px] items-center justify-center rounded-full border border-primary text-hover hover:bg-hover hover:text-white"
        href="{{ $href ?? '#' }}"
    >
        {{ $slot }}
    </a>
</div>
