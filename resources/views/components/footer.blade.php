<footer
    id="contact"
    class="border-t border-white/10
           bg-[#080808]"
>
    <div
        class="mx-auto max-w-7xl
               px-5 py-14

               sm:px-6

               md:py-16

               lg:px-8"
    >

        {{-- FOOTER GRID --}}
        <div
            class="grid gap-10

                   md:grid-cols-2
                   md:gap-12

                   lg:grid-cols-4"
        >

            {{-- COMPANY --}}
            <div
                class="md:col-span-2
                       lg:col-span-1"
            >

                <a
                    href="#home"
                    class="flex items-center gap-3"
                >

                    <img
                        src="{{ asset('images/logo.jpg') }}"
                        alt="SmokeHouse Logo"
                        class="h-11 w-11
                               rounded-lg object-cover"
                    >

                    <div>

                        <p
                            class="text-lg font-black
                                   tracking-tight
                                   text-white"
                        >
                            SMOKE<span class="text-[#F4510B]">HOUSE</span>
                        </p>

                        <p
                            class="text-[8px]
                                   tracking-[0.35em]
                                   text-zinc-500"
                        >
                            SINCE 2026
                        </p>

                    </div>

                </a>


                <p
                    class="mt-5 max-w-sm
                           text-sm leading-6
                           text-zinc-500"
                >
                    Filipino grilled favorites made
                    for dine-in, takeout, and
                    satisfying meals with family
                    and friends.
                </p>

            </div>



            {{-- QUICK LINKS --}}
            <div>

                <h3
                    class="text-xs font-bold
                           uppercase
                           tracking-[0.2em]
                           text-white"
                >
                    Quick Links
                </h3>


                <div
                    class="mt-5 flex
                           flex-col gap-3
                           text-sm text-zinc-500"
                >

                    <a
                        href="#home"
                        class="transition
                               hover:text-[#F4510B]"
                    >
                        Home
                    </a>

                    <a
                        href="#features"
                        class="transition
                               hover:text-[#F4510B]"
                    >
                        Features
                    </a>

                    <a
                        href="#showcase"
                        class="transition
                               hover:text-[#F4510B]"
                    >
                        Product Showcase
                    </a>

                    <a
                        href="#pricing"
                        class="transition
                               hover:text-[#F4510B]"
                    >
                        Pricing
                    </a>

                    <a
                        href="#testimonials"
                        class="transition
                               hover:text-[#F4510B]"
                    >
                        Testimonials
                    </a>

                </div>

            </div>



            {{-- CONTACT --}}
            <div>

                <h3
                    class="text-xs font-bold
                           uppercase
                           tracking-[0.2em]
                           text-white"
                >
                    Contact
                </h3>


                <div
                    class="mt-5 space-y-4
                           text-sm text-zinc-500"
                >

                    <div>
                        <p class="text-zinc-300">
                            Location
                        </p>

                        <p class="mt-1">
                            Barangay Central,
                            Quezon City
                        </p>
                    </div>


                    <div>
                        <p class="text-zinc-300">
                            Service
                        </p>

                        <p class="mt-1">
                            Dine-In & Takeout
                        </p>
                    </div>


                    <div>
                        <p class="text-zinc-300">
                            Phone
                        </p>

                        <p class="mt-1">
                            Add SmokeHouse phone number
                        </p>
                    </div>

                </div>

            </div>



            {{-- SOCIAL MEDIA --}}
            <div>

                <h3
                    class="text-xs font-bold
                           uppercase
                           tracking-[0.2em]
                           text-white"
                >
                    Follow Us
                </h3>


                <p
                    class="mt-5 max-w-xs
                           text-sm leading-6
                           text-zinc-500"
                >
                    Follow SmokeHouse for menu updates,
                    food photos, and announcements.
                </p>


                <div
                    class="mt-5 flex gap-3"
                >

                    {{-- FACEBOOK --}}
                    <a
                        href="#"
                        aria-label="Facebook"
                        class="flex h-10 w-10
                               items-center justify-center
                               rounded-full
                               border border-white/10
                               text-xs font-bold
                               text-zinc-400
                               transition
                               hover:border-[#F4510B]
                               hover:text-[#F4510B]"
                    >
                        FB
                    </a>


                    {{-- INSTAGRAM --}}
                    <a
                        href="#"
                        aria-label="Instagram"
                        class="flex h-10 w-10
                               items-center justify-center
                               rounded-full
                               border border-white/10
                               text-xs font-bold
                               text-zinc-400
                               transition
                               hover:border-[#F4510B]
                               hover:text-[#F4510B]"
                    >
                        IG
                    </a>

                </div>

            </div>

        </div>



        {{-- BOTTOM FOOTER --}}
        <div
            class="mt-12 flex
                   flex-col gap-3
                   border-t border-white/10
                   pt-6
                   text-xs text-zinc-600

                   md:flex-row
                   md:items-center
                   md:justify-between"
        >

            <p>
                © {{ date('Y') }} SmokeHouse.
                All rights reserved.
            </p>

            <p>
                Barangay Central · Quezon City
            </p>

        </div>

    </div>
</footer>