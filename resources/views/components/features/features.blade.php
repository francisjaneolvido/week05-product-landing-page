<section
    id="features"
    class="border-t border-white/5
           bg-[#0C0C0C]
           py-20

           md:py-24"
>
    <div
        class="mx-auto max-w-7xl
               px-5
               sm:px-6
               lg:px-8"
    >

        {{-- SECTION HEADING --}}
        <div
            class="mx-auto mb-12
                   max-w-2xl text-center

                   md:mb-14"
        >

            <p
                class="text-xs font-bold
                       uppercase
                       tracking-[0.25em]
                       text-[#F4510B]"
            >
                Why SmokeHouse
            </p>


            <h2
                class="mt-4
                       text-3xl font-black
                       uppercase leading-tight
                       tracking-tight
                       text-[#F7F3ED]

                       sm:text-4xl
                       md:text-5xl"
            >
                Great Food.
                <br>

                Straight From
                <span class="text-[#F4510B]">
                    The Grill.
                </span>
            </h2>


            <p
                class="mx-auto mt-5
                       max-w-xl
                       text-sm leading-6
                       text-zinc-500

                       sm:text-base
                       sm:leading-7"
            >
                Bold Filipino flavors, satisfying portions,
                and smoky grilled favorites made for
                everyday cravings.
            </p>

        </div>


        {{-- FEATURE GRID --}}
        <div
            class="grid gap-5

                   sm:grid-cols-2

                   lg:grid-cols-3"
        >

            <x-features.feature-card
                icon="✦"
                title="Flame-Grilled"
                description="Cooked over high heat for smoky flavor, juicy meat, and beautifully charred edges."
            />


            <x-features.feature-card
                icon="◆"
                title="Filipino Favorites"
                description="Enjoy familiar favorites including chicken inasal, grilled pork, liempo, and barbecue."
            />


            <x-features.feature-card
                icon="▣"
                title="Complete Meals"
                description="Pair your grilled favorites with rice, soup, and satisfying meal combinations."
            />


            <x-features.feature-card
                icon="↗"
                title="Takeout Ready"
                description="Enjoy your SmokeHouse favorites wherever you are with convenient takeaway options."
            />


            <x-features.feature-card
                icon="⌂"
                title="Family Bundles"
                description="Generous grilled combinations made for sharing with family, friends, and groups."
            />


            <x-features.feature-card
                icon="₱"
                title="Budget Friendly"
                description="Flavorful and filling grilled meals at prices made for everyday cravings."
            />

        </div>

    </div>
</section>