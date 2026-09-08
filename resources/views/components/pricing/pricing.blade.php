<section
    id="pricing"
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
                       tracking-[0.24em]
                       text-[#F4510B]"
            >
                Pricing
            </p>


            <h2
                class="mt-4
                       text-3xl font-black
                       uppercase tracking-tight
                       text-[#F7F3ED]

                       sm:text-4xl
                       md:text-5xl"
            >
                Pick Your
                <span class="text-[#F4510B]">
                    Grill.
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
                From quick solo meals to generous
                platters and family bundles,
                SmokeHouse has something for every craving.
            </p>

        </div>


        {{-- PRICING GRID --}}
        <div
            class="grid gap-6

                   md:grid-cols-2

                   lg:grid-cols-3"
        >

            {{-- PLAN 1 --}}
            <x-pricing.pricing-card
                plan="Solo Meal"
                price="₱99"
                description="A simple and satisfying option for one."
                :features="[
                    'Grilled Pork Chop starting at ₱99',
                    'Regular Chicken Inasal at ₱115',
                    'Petcho Chicken Inasal at ₱135',
                    'Grilled Liempo at ₱135',
                ]"
            />


            {{-- PLAN 2 --}}
            <x-pricing.pricing-card
                plan="Smoked Platter"
                price="₱149"
                description="A fuller SmokeHouse meal for bigger cravings."
                :features="[
                    'Grilled Pork Chop Platter at ₱149',
                    'Regular Chicken Platter at ₱160',
                    'Petcho Chicken Platter at ₱180',
                    'Grilled Liempo Platter at ₱180',
                ]"
                featured
            />


            {{-- PLAN 3 --}}
            <x-pricing.pricing-card
                plan="Family Meal"
                price="₱468"
                description="Grilled combinations made for sharing."
                :features="[
                    'Family Grilled Pork starting at ₱468',
                    'Family Chicken Inasal at ₱485',
                    'Good for sharing',
                    'Rice and soup included',
                ]"
            />

        </div>

    </div>
</section>