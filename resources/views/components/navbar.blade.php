<nav
    class="fixed top-0 left-0 z-50 w-full
           border-b border-white/10
           bg-[#090909]/90 backdrop-blur-xl"
>
    <div
        class="mx-auto flex max-w-7xl items-center
               justify-between px-6 py-5 lg:px-8"
    >

        {{-- Logo --}}
        <a
            href="#home"
            class="flex items-center gap-3"
        >
            <div
                class="flex h-10 w-10 items-center justify-center
                       rounded-xl bg-orange-600
                       text-xl font-black shadow-lg
                       shadow-orange-600/20"
            >
                🔥
            </div>

            <div>
                <p
                    class="text-xl font-black tracking-tight"
                >
                    SMOKE<span class="text-orange-500">HOUSE</span>
                </p>

                <p
                    class="text-[9px] tracking-[0.35em]
                           text-zinc-500"
                >
                    SINCE 2026
                </p>
            </div>
        </a>

        {{-- Desktop Navigation --}}
        <div
            class="hidden items-center gap-8
                   text-sm font-medium text-zinc-300
                   md:flex"
        >
            <a
                href="#home"
                class="transition hover:text-orange-500"
            >
                Home
            </a>

            <a
                href="#features"
                class="transition hover:text-orange-500"
            >
                Features
            </a>

            <a
                href="#menu"
                class="transition hover:text-orange-500"
            >
                Pricing
            </a>

            <a
                href="#testimonials"
                class="transition hover:text-orange-500"
            >
                Testimonials
            </a>

            <a
                href="#contact"
                class="transition hover:text-orange-500"
            >
                Contact
            </a>
        </div>

        {{-- Buttons --}}
        <div class="hidden items-center gap-3 md:flex">

            <a
                href="#"
                class="px-4 py-2 text-sm font-semibold
                       text-zinc-300 transition
                       hover:text-white"
            >
                Sign In
            </a>

            <a
                href="#menu"
                class="rounded-full bg-orange-600
                       px-5 py-2.5 text-sm font-bold
                       text-white transition
                       hover:bg-orange-500"
            >
                Get Started
            </a>

        </div>

        {{-- Mobile Button --}}
        <button
            class="flex h-10 w-10 items-center justify-center
                   rounded-lg border border-white/10
                   text-xl md:hidden"
        >
            ☰
        </button>

    </div>
</nav>