<section
    id="home"
    class="relative overflow-hidden
           bg-[#080808]
           pt-20"
>
    <div
        class="mx-auto grid
               min-h-[calc(100vh-5rem)]
               max-w-7xl
               items-center
               gap-10
               px-5 py-14

               sm:px-6
               sm:py-16

               md:grid-cols-2
               md:gap-8
               md:py-16

               lg:grid-cols-[0.9fr_1.1fr]
               lg:gap-12
               lg:px-8
               lg:py-16"
    >

        {{-- LEFT CONTENT --}}
        <div class="relative z-10">

            {{-- LOCATION --}}
            <div
                class="mb-6
                       inline-flex items-center gap-3
                       rounded-full
                       border border-[#F4510B]/40
                       bg-[#15100D]
                       px-4 py-2"
            >

                <span class="text-sm">
                    🔥
                </span>

                <span
                    class="text-[9px]
                           font-bold uppercase
                           tracking-[0.16em]
                           text-[#FF7A38]
                           sm:text-[10px]"
                >
                    Barangay Central · Quezon City
                </span>

            </div>


            {{-- BUSINESS NAME --}}
            <p
                class="mb-3
                       text-xs font-bold uppercase
                       tracking-[0.2em]
                       text-zinc-500"
            >
                SmokeHouse Filipino Grill
            </p>


            {{-- MAIN HEADING --}}
            <h1
                class="max-w-2xl
                       text-[2.7rem]
                       font-black uppercase
                       leading-[0.9]
                       tracking-[-0.04em]
                       text-[#F7F3ED]

                       sm:text-5xl

                       md:text-[3rem]

                       lg:text-[5rem]"
            >
                Smoked.
                <br>

                <span class="text-[#F4510B]">
                    Grilled.
                </span>

                <br>

                Made To
                <br>

                Satisfy.
            </h1>


            {{-- DESCRIPTION --}}
            <p
                class="mt-6 max-w-lg
                       text-sm leading-6
                       text-zinc-400

                       sm:text-base
                       sm:leading-7

                       md:text-sm

                       lg:text-[17px]
                       lg:leading-7"
            >
                Filipino comfort food fresh off the grill.
                From smoky chicken inasal to juicy pork liempo,
                SmokeHouse brings bold flavors straight to your table.
            </p>


            {{-- CTA BUTTONS --}}
            <div
                class="mt-7 flex
                       flex-col gap-3

                       sm:flex-row

                       md:flex-col

                       lg:flex-row"
            >

                <a
                    href="#pricing"
                    class="inline-flex
                           items-center justify-center
                           gap-3 rounded-full
                           bg-[#F4510B]
                           px-7 py-3.5
                           text-sm font-bold
                           text-white
                           transition
                           hover:bg-[#FF641A]"
                >
                    Order Now

                    <span>
                        →
                    </span>
                </a>


                <a
                    href="#showcase"
                    class="inline-flex
                           items-center justify-center
                           rounded-full
                           border border-white/15
                           bg-[#121212]
                           px-7 py-3.5
                           text-sm font-bold
                           text-[#F7F3ED]
                           transition
                           hover:border-white/30
                           hover:bg-[#191919]"
                >
                    Explore Menu
                </a>

            </div>


            {{-- SERVICES --}}
            <div
                class="mt-8 flex flex-wrap
                       items-center
                       gap-x-5 gap-y-3
                       border-t border-white/10
                       pt-5"
            >

                <div
                    class="flex items-center gap-2
                           text-xs text-zinc-400"
                >
                    <span
                        class="h-1.5 w-1.5
                               rounded-full
                               bg-[#F4510B]"
                    ></span>

                    Dine-In
                </div>


                <div
                    class="flex items-center gap-2
                           text-xs text-zinc-400"
                >
                    <span
                        class="h-1.5 w-1.5
                               rounded-full
                               bg-[#F4510B]"
                    ></span>

                    Takeout
                </div>


                <div
                    class="flex items-center gap-2
                           text-xs text-zinc-400"
                >
                    <span
                        class="h-1.5 w-1.5
                               rounded-full
                               bg-[#F4510B]"
                    ></span>

                    Family Meals
                </div>

            </div>

        </div>



        {{-- RIGHT CONTENT --}}
        <div class="relative">

            <div
                class="relative overflow-hidden
                       rounded-2xl
                       border border-white/10
                       bg-[#121212]
                       shadow-2xl
                       shadow-black/40

                       lg:rounded-[2rem]"
            >

                {{-- MAIN IMAGE --}}
                <img
                    src="{{ asset('images/hero-smokehouse.jpg') }}"
                    alt="SmokeHouse grilled Filipino dishes"
                    class="h-[360px] w-full
                           object-cover

                           sm:h-[420px]

                           md:h-[440px]

                           lg:h-[590px]"
                >


                {{-- FIRE GRILLED LABEL --}}
                <div
                    class="absolute right-4 top-4
                           hidden items-center gap-2
                           rounded-full
                           border border-white/10
                           bg-[#101010]/90
                           px-4 py-2
                           text-[9px]
                           font-bold uppercase
                           tracking-wide
                           text-white

                           sm:flex"
                >

                    <span
                        class="h-1.5 w-1.5
                               rounded-full
                               bg-[#F4510B]"
                    ></span>

                    Fire-Grilled

                </div>


                {{-- BOTTOM INFO --}}
                <div
                    class="absolute
                           bottom-4 left-4 right-4
                           flex flex-col gap-2

                           lg:bottom-5
                           lg:left-5
                           lg:right-5
                           lg:flex-row
                           lg:items-end
                           lg:justify-between
                           lg:gap-4"
                >

                    {{-- FOOD INFO --}}
                    <div
                        class="rounded-xl
                               border border-white/10
                               bg-[#101010]/90
                               px-4 py-3
                               backdrop-blur-md

                               lg:rounded-2xl
                               lg:px-5
                               lg:py-4"
                    >

                        <p
                            class="text-[8px]
                                   font-bold uppercase
                                   tracking-[0.2em]
                                   text-zinc-500

                                   lg:text-[9px]"
                        >
                            SmokeHouse Special
                        </p>

                        <p
                            class="mt-1
                                   text-sm font-bold
                                   text-white

                                   lg:text-base
                                   lg:font-black"
                        >
                            Fresh Off The Grill
                        </p>

                    </div>


                    {{-- PRICE --}}
                    <div
                        class="rounded-xl
                               border border-white/10
                               bg-[#101010]/90
                               px-4 py-3
                               backdrop-blur-md

                               lg:rounded-2xl
                               lg:px-5
                               lg:py-4
                               lg:text-right"
                    >

                        <p
                            class="text-[8px]
                                   font-semibold uppercase
                                   tracking-[0.18em]
                                   text-zinc-500

                                   lg:text-[9px]"
                        >
                            Starting From
                        </p>

                        <p
                            class="mt-1
                                   text-xl font-black
                                   text-[#F4510B]

                                   lg:text-2xl"
                        >
                            ₱99
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>
</section>