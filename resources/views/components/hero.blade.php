<section
    id="home"
    class="relative min-h-screen overflow-hidden
           bg-[#090909] pt-32"
>

    {{-- Orange Glow --}}
    <div
        class="absolute right-[-200px] top-20
               h-[500px] w-[500px]
               rounded-full bg-orange-600/20
               blur-[140px]"
    ></div>

    <div
        class="relative mx-auto grid min-h-[80vh]
               max-w-7xl items-center gap-12
               px-6 py-16
               lg:grid-cols-2 lg:px-8"
    >

        {{-- LEFT SIDE --}}
        <div>

            <div
                class="mb-6 inline-flex items-center gap-2
                       rounded-full border
                       border-orange-500/20
                       bg-orange-500/10
                       px-4 py-2"
            >
                <span class="text-orange-500">
                    🔥
                </span>

                <span
                    class="text-xs font-semibold
                           tracking-[0.18em]
                           text-orange-400"
                >
                    BARANGAY CENTRAL • QUEZON CITY
                </span>
            </div>

            <h1
                class="max-w-3xl text-5xl font-black
                       leading-[0.95] tracking-tight
                       sm:text-6xl lg:text-7xl"
            >
                SMOKED.
                <br>

                <span class="text-orange-500">
                    GRILLED.
                </span>

                <br>

                MADE TO
                <br>
                SATISFY.
            </h1>

            <p
                class="mt-7 max-w-xl text-base
                       leading-7 text-zinc-400
                       sm:text-lg"
            >
                Experience smoky Filipino grilled favorites
                including chicken inasal, juicy pork,
                grilled liempo and satisfying meals made
                for dine-in or takeout.
            </p>

            {{-- CTA Buttons --}}
            <div
                class="mt-9 flex flex-col gap-4
                       sm:flex-row"
            >
                <a
                    href="#menu"
                    class="inline-flex items-center
                           justify-center rounded-full
                           bg-orange-600 px-7 py-4
                           font-bold text-white
                           shadow-xl shadow-orange-600/20
                           transition
                           hover:-translate-y-1
                           hover:bg-orange-500"
                >
                    Order Now
                    <span class="ml-2">→</span>
                </a>

                <a
                    href="#menu"
                    class="inline-flex items-center
                           justify-center rounded-full
                           border border-white/15
                           bg-white/5 px-7 py-4
                           font-bold text-white
                           transition
                           hover:border-orange-500/50
                           hover:bg-white/10"
                >
                    Explore Menu
                </a>
            </div>

            {{-- Mini Features --}}
            <div
                class="mt-10 flex flex-wrap gap-6
                       text-sm text-zinc-400"
            >
                <div class="flex items-center gap-2">
                    <span class="text-orange-500">●</span>
                    Dine-In
                </div>

                <div class="flex items-center gap-2">
                    <span class="text-orange-500">●</span>
                    Takeout
                </div>

                <div class="flex items-center gap-2">
                    <span class="text-orange-500">●</span>
                    Family Meals
                </div>
            </div>

        </div>

        {{-- RIGHT SIDE --}}
        <div class="relative">

            <div
                class="relative overflow-hidden
                       rounded-[2rem]
                       border border-white/10
                       bg-gradient-to-br
                       from-orange-600
                       via-orange-900
                       to-black
                       shadow-2xl"
            >

                <div
                    class="flex min-h-[500px]
                           items-center justify-center
                           p-12 text-center"
                >
                    <div>

                        <div class="text-8xl">
                            🔥
                        </div>

                        <p
                            class="mt-6 text-3xl
                                   font-black"
                        >
                            SMOKEHOUSE
                        </p>

                        <p
                            class="mt-2 text-sm
                                   tracking-[0.3em]
                                   text-orange-200"
                        >
                            FIRE-GRILLED FAVORITES
                        </p>

                    </div>
                </div>

            </div>

            {{-- Floating Card --}}
            <div
                class="absolute -bottom-6 -left-4
                       rounded-2xl
                       border border-white/10
                       bg-[#151515]/95
                       p-5 shadow-2xl
                       backdrop-blur-xl
                       sm:-left-8"
            >
                <p
                    class="text-xs uppercase
                           tracking-[0.2em]
                           text-zinc-500"
                >
                    Starting From
                </p>

                <p
                    class="mt-1 text-3xl font-black
                           text-orange-500"
                >
                    ₱99
                </p>

                <p class="text-xs text-zinc-400">
                    Grilled favorites
                </p>
            </div>

        </div>

    </div>
</section>