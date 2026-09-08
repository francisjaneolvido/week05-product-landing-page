@props([
    'icon',
    'title',
    'description'
])

<div
    class="group rounded-2xl
           border border-white/10
           bg-[#111111]
           p-7
           transition duration-300
           hover:-translate-y-1
           hover:border-[#F4510B]/40
           hover:bg-[#151515]"
>

    {{-- ICON --}}
    <div
        class="flex h-12 w-12
               items-center justify-center
               rounded-xl
               border border-[#F4510B]/20
               bg-[#1D120E]
               text-2xl"
    >
        {{ $icon }}
    </div>


    {{-- TITLE --}}
    <h3
        class="mt-5
               text-lg font-black
               uppercase tracking-tight
               text-[#F7F3ED]"
    >
        {{ $title }}
    </h3>


    {{-- DESCRIPTION --}}
    <p
        class="mt-3
               text-sm leading-6
               text-zinc-500"
    >
        {{ $description }}
    </p>

</div>