@props([
    'href' => '#',
    'variant' => 'primary'
])

<a
    href="{{ $href }}"
    {{ $attributes->class([
        'inline-flex items-center justify-center rounded-full px-6 py-3 text-sm font-bold transition duration-300',

        'bg-[#F4510B] text-white hover:bg-[#FF641A]'
            => $variant === 'primary',

        'border border-white/15 bg-[#151515] text-white hover:border-white/30'
            => $variant === 'secondary',
    ]) }}
>
    {{ $slot }}
</a>