@props([
    'plan',
    'price',
    'description',
    'features' => [],
    'featured' => false,
])

<div
    class="relative flex h-full flex-col
           rounded-2xl border p-7
           {{ $featured
                ? 'border-[#F4510B] bg-[#14100E]'
                : 'border-white/10 bg-[#111111]' }}"
>

    {{-- FEATURED LABEL --}}
    @if ($featured)
        <div
            class="absolute -top-3 left-6
                   rounded-full bg-[#F4510B]
                   px-4 py-1.5
                   text-[10px] font-bold
                   uppercase tracking-[0.18em]
                   text-white"
        >
            Most Popular
        </div>
    @endif


    {{-- PLAN NAME --}}
    <p
        class="text-xs font-bold
               uppercase tracking-[0.22em]
               text-[#F4510B]"
    >
        {{ $plan }}
    </p>


    {{-- PRICE --}}
    <div class="mt-5 flex items-end gap-2">

        <span
            class="text-4xl font-black
                   tracking-tight text-white"
        >
            {{ $price }}
        </span>

        <span
            class="pb-1 text-xs text-zinc-500"
        >
            starting price
        </span>

    </div>


    {{-- DESCRIPTION --}}
    <p
        class="mt-4 text-sm
               leading-6 text-zinc-500"
    >
        {{ $description }}
    </p>


    {{-- DIVIDER --}}
    <div class="my-6 border-t border-white/10"></div>


    {{-- INCLUDED FEATURES --}}
    <p
        class="mb-4 text-xs font-bold
               uppercase tracking-[0.18em]
               text-zinc-400"
    >
        Included Features
    </p>


    <ul class="flex-1 space-y-3">

        @foreach ($features as $feature)

            <li
                class="flex items-start gap-3
                       text-sm text-zinc-400"
            >
                <span
                    class="mt-2 h-1.5 w-1.5
                           shrink-0 rounded-full
                           bg-[#F4510B]"
                ></span>

                <span>
                    {{ $feature }}
                </span>
            </li>

        @endforeach

    </ul>


    {{-- SUBSCRIBE BUTTON --}}
    <div class="mt-8">

        @if ($featured)

            <x-button
                href="#contact"
                class="w-full"
            >
                Order Now
            </x-button>

        @else

            <x-button
                href="#contact"
                variant="secondary"
                class="w-full"
            >
                Order Now
            </x-button>

        @endif

    </div>

</div>