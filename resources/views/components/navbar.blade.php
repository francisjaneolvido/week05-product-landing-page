<nav
    class="fixed left-0 top-0 z-50 w-full
           border-b border-white/10
           bg-[#080808]/95 backdrop-blur-xl"
>
    <div
        class="mx-auto flex h-20 max-w-7xl
               items-center justify-between
               px-5 sm:px-6 lg:px-8"
    >

        {{-- LOGO --}}
        <a href="#home" class="flex items-center gap-3">

            <img
                src="{{ asset('images/logo.jpg') }}"
                alt="SmokeHouse Logo"
                class="h-10 w-10 rounded-lg object-cover
                       sm:h-11 sm:w-11"
            >

            <div>
                <p
                    class="text-base font-black
                           tracking-tight text-white
                           sm:text-lg"
                >
                    SMOKE<span class="text-[#F4510B]">HOUSE</span>
                </p>

                <p
                    class="text-[7px]
                           tracking-[0.3em]
                           text-zinc-500
                           sm:text-[8px]"
                >
                    SINCE 2026
                </p>
            </div>

        </a>


        {{-- DESKTOP NAVIGATION --}}
        <div
            class="hidden items-center gap-7
                   text-sm font-medium
                   text-zinc-400
                   md:flex"
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

            <a
                href="#contact"
                class="transition
                       hover:text-[#F4510B]"
            >
                Contact
            </a>

        </div>


        {{-- DESKTOP BUTTONS --}}
        <div class="hidden items-center gap-3 md:flex">

            <a
                href="#"
                class="px-3 py-2
                       text-sm font-semibold
                       text-zinc-400
                       transition
                       hover:text-white"
            >
                Sign In
            </a>

            <a
                href="#pricing"
                class="rounded-full
                       bg-[#F4510B]
                       px-5 py-2.5
                       text-sm font-bold
                       text-white
                       transition
                       hover:bg-[#FF641A]"
            >
                Get Started
            </a>

        </div>


        {{-- MOBILE MENU BUTTON --}}
        <button
            id="mobile-menu-button"
            type="button"
            aria-label="Open navigation menu"
            aria-expanded="false"
            class="flex h-10 w-10
                   items-center justify-center
                   rounded-lg
                   border border-white/10
                   bg-[#111111]
                   text-xl text-white
                   md:hidden"
        >
            <span id="menu-icon">☰</span>
        </button>

    </div>


    {{-- MOBILE NAVIGATION --}}
    <div
        id="mobile-menu"
        class="hidden border-t
               border-white/10
               bg-[#0C0C0C]
               md:hidden"
    >

        <div
            class="mx-auto flex max-w-7xl
                   flex-col px-5 py-5"
        >

            <a
                href="#home"
                class="mobile-nav-link
                       border-b border-white/5
                       py-3 text-sm
                       font-medium text-zinc-300"
            >
                Home
            </a>

            <a
                href="#features"
                class="mobile-nav-link
                       border-b border-white/5
                       py-3 text-sm
                       font-medium text-zinc-300"
            >
                Features
            </a>

            <a
                href="#pricing"
                class="mobile-nav-link
                       border-b border-white/5
                       py-3 text-sm
                       font-medium text-zinc-300"
            >
                Pricing
            </a>

            <a
                href="#testimonials"
                class="mobile-nav-link
                       border-b border-white/5
                       py-3 text-sm
                       font-medium text-zinc-300"
            >
                Testimonials
            </a>

            <a
                href="#contact"
                class="mobile-nav-link
                       py-3 text-sm
                       font-medium text-zinc-300"
            >
                Contact
            </a>


            <div class="mt-4 flex gap-3">

                <a
                    href="#"
                    class="flex-1 rounded-full
                           border border-white/10
                           px-4 py-3
                           text-center text-sm
                           font-bold text-white"
                >
                    Sign In
                </a>

                <a
                    href="#pricing"
                    class="mobile-nav-link
                           flex-1 rounded-full
                           bg-[#F4510B]
                           px-4 py-3
                           text-center text-sm
                           font-bold text-white"
                >
                    Get Started
                </a>

            </div>

        </div>

    </div>
</nav>