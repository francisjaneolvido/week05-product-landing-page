<section
    id="showcase"
    class="border-t border-white/5
           bg-[#080808] py-24"
>
    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        {{-- SECTION HEADING --}}
        <div class="mb-14 max-w-2xl">

            <p
                class="text-xs font-bold uppercase
                       tracking-[0.22em]
                       text-[#F4510B]"
            >
                Product Showcase
            </p>

            <h2
                class="mt-4 text-4xl font-black
                       uppercase tracking-tight
                       text-[#F7F3ED]
                       sm:text-5xl"
            >
                Explore The
                <span class="text-[#F4510B]">
                    SmokeHouse
                </span>
                Experience.
            </h2>

            <p
                class="mt-5 max-w-xl
                       text-base leading-7
                       text-zinc-500"
            >
                Discover our grilled favorites, meal options,
                and simple ordering experience designed for
                dine-in and takeout customers.
            </p>

        </div>


        {{-- MAIN SHOWCASE GRID --}}
        <div
            class="grid gap-6
                   lg:grid-cols-[1.25fr_0.75fr]"
        >

            {{-- PRODUCT SCREENSHOT --}}
            <div
                class="overflow-hidden rounded-2xl
                       border border-white/10
                       bg-[#111111]"
            >

                <div
                    class="flex items-center justify-between
                           border-b border-white/10
                           px-5 py-4"
                >
                    <div>
                        <p
                            class="text-xs font-bold uppercase
                                   tracking-[0.2em]
                                   text-[#F4510B]"
                        >
                            Product Screenshot
                        </p>

                        <p
                            class="mt-1 text-sm
                                   text-zinc-500"
                        >
                            SmokeHouse Menu
                        </p>
                    </div>

                    <span
                        class="rounded-full
                               border border-white/10
                               px-3 py-1
                               text-[10px]
                               text-zinc-400"
                    >
                        MENU
                    </span>
                </div>


                <div class="p-4">

                    <img
                        src="{{ asset('images/menu-smokehouse.jpg') }}"
                        alt="SmokeHouse menu"
                        class="h-[420px] w-full
                               rounded-xl
                               object-cover
                               object-top
                               sm:h-[500px]"
                    >

                </div>

            </div>



            {{-- RIGHT SIDE --}}
            <div class="grid gap-6">

                {{-- DASHBOARD PREVIEW --}}
                <div
                    class="rounded-2xl
                           border border-white/10
                           bg-[#111111]
                           p-6"
                >

                    <div
                        class="flex items-center
                               justify-between"
                    >

                        <div>
                            <p
                                class="text-xs font-bold
                                       uppercase
                                       tracking-[0.2em]
                                       text-[#F4510B]"
                            >
                                Dashboard Preview
                            </p>

                            <h3
                                class="mt-2 text-xl
                                       font-bold text-white"
                            >
                                Popular Orders
                            </h3>
                        </div>

                        <span
                            class="text-xs
                                   text-zinc-500"
                        >
                            SmokeHouse
                        </span>

                    </div>


                    <div class="mt-6 space-y-3">

                        <div
                            class="flex items-center
                                   justify-between
                                   rounded-xl
                                   border border-white/10
                                   bg-[#0C0C0C]
                                   p-4"
                        >
                            <div>
                                <p
                                    class="text-sm
                                           font-semibold
                                           text-white"
                                >
                                    Grilled Pork Chop
                                </p>

                                <p
                                    class="mt-1
                                           text-xs
                                           text-zinc-500"
                                >
                                    Solo Meal
                                </p>
                            </div>

                            <p
                                class="font-bold
                                       text-[#F4510B]"
                            >
                                ₱99
                            </p>
                        </div>


                        <div
                            class="flex items-center
                                   justify-between
                                   rounded-xl
                                   border border-white/10
                                   bg-[#0C0C0C]
                                   p-4"
                        >
                            <div>
                                <p
                                    class="text-sm
                                           font-semibold
                                           text-white"
                                >
                                    Chicken Inasal
                                </p>

                                <p
                                    class="mt-1
                                           text-xs
                                           text-zinc-500"
                                >
                                    Regular
                                </p>
                            </div>

                            <p
                                class="font-bold
                                       text-[#F4510B]"
                            >
                                ₱115
                            </p>
                        </div>


                        <div
                            class="flex items-center
                                   justify-between
                                   rounded-xl
                                   border border-white/10
                                   bg-[#0C0C0C]
                                   p-4"
                        >
                            <div>
                                <p
                                    class="text-sm
                                           font-semibold
                                           text-white"
                                >
                                    Grilled Liempo
                                </p>

                                <p
                                    class="mt-1
                                           text-xs
                                           text-zinc-500"
                                >
                                    Solo Meal
                                </p>
                            </div>

                            <p
                                class="font-bold
                                       text-[#F4510B]"
                            >
                                ₱135
                            </p>
                        </div>

                    </div>

                </div>



                {{-- MOBILE VIEW --}}
                <div
                    class="rounded-2xl
                           border border-white/10
                           bg-[#111111]
                           p-6"
                >

                    <p
                        class="text-xs font-bold
                               uppercase
                               tracking-[0.2em]
                               text-[#F4510B]"
                    >
                        Mobile View
                    </p>


                    <div
                        class="mx-auto mt-6
                               max-w-[220px]
                               rounded-[2rem]
                               border border-white/20
                               bg-[#080808]
                               p-2"
                    >

                        <div
                            class="overflow-hidden
                                   rounded-[1.6rem]"
                        >

                            <img
                                src="{{ asset('images/hero-smokehouse.jpg') }}"
                                alt="SmokeHouse mobile view"
                                class="h-[270px]
                                       w-full
                                       object-cover"
                            >


                            <div
                                class="bg-[#0C0C0C]
                                       p-4"
                            >

                                <p
                                    class="text-xs
                                           text-[#F4510B]"
                                >
                                    SMOKEHOUSE
                                </p>

                                <p
                                    class="mt-1
                                           text-base
                                           font-black
                                           text-white"
                                >
                                    Fresh Off The Grill
                                </p>

                                <p
                                    class="mt-2
                                           text-xs
                                           leading-5
                                           text-zinc-500"
                                >
                                    Grilled favorites
                                    available for dine-in
                                    and takeout.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>



        {{-- KEY HIGHLIGHTS --}}
        <div
            class="mt-6
                   rounded-2xl
                   border border-white/10
                   bg-[#111111]
                   p-6 sm:p-8"
        >

            <p
                class="text-xs font-bold
                       uppercase
                       tracking-[0.2em]
                       text-[#F4510B]"
            >
                Key Highlights
            </p>


            <div
                class="mt-6 grid gap-5
                       sm:grid-cols-2
                       lg:grid-cols-4"
            >

                <div>
                    <p
                        class="text-sm
                               font-bold
                               text-white"
                    >
                        Dine-In
                    </p>

                    <p
                        class="mt-2
                               text-sm leading-6
                               text-zinc-500"
                    >
                        Enjoy freshly grilled meals
                        inside SmokeHouse.
                    </p>
                </div>


                <div>
                    <p
                        class="text-sm
                               font-bold
                               text-white"
                    >
                        Takeout
                    </p>

                    <p
                        class="mt-2
                               text-sm leading-6
                               text-zinc-500"
                    >
                        Convenient grilled meals
                        ready to take home.
                    </p>
                </div>


                <div>
                    <p
                        class="text-sm
                               font-bold
                               text-white"
                    >
                        Affordable Meals
                    </p>

                    <p
                        class="mt-2
                               text-sm leading-6
                               text-zinc-500"
                    >
                        Budget-friendly meals
                        starting from ₱99.
                    </p>
                </div>


                <div>
                    <p
                        class="text-sm
                               font-bold
                               text-white"
                    >
                        Family Options
                    </p>

                    <p
                        class="mt-2
                               text-sm leading-6
                               text-zinc-500"
                    >
                        Meal bundles suitable
                        for sharing with groups.
                    </p>
                </div>

            </div>

        </div>

    </div>
</section>