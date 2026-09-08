@props([
    'image',
    'name',
    'position',
    'review'
])

<div
    class="flex h-full flex-col
           rounded-2xl
           border border-white/10
           bg-[#111111]
           p-7
           transition duration-300
           hover:border-white/20"
>

    {{-- REVIEW --}}
    <p
        class="flex-1
               text-sm leading-7
               text-zinc-400"
    >
        “{{ $review }}”
    </p>


    {{-- CUSTOMER INFO --}}
    <div
        class="mt-7 flex items-center gap-4
               border-t border-white/10
               pt-5"
    >

        <img
            src="{{ asset($image) }}"
            alt="{{ $name }}"
            class="h-12 w-12
                   rounded-full
                   object-cover"
        >

        <div>
            <p
                class="text-sm font-bold
                       text-[#F7F3ED]"
            >
                {{ $name }}
            </p>

            <p
                class="mt-1 text-xs
                       text-zinc-500"
            >
                {{ $position }}
            </p>
        </div>

    </div>

</div>