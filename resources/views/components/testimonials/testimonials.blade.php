<section
    id="testimonials"
    class="border-t border-white/5
           bg-[#080808] py-24"
>
    <div
        class="mx-auto max-w-7xl
               px-6 lg:px-8"
    >

        {{-- SECTION HEADER --}}
        <div class="mb-14 max-w-2xl">

            <p
                class="text-xs font-bold
                       uppercase
                       tracking-[0.22em]
                       text-[#F4510B]"
            >
                Testimonials
            </p>

            <h2
                class="mt-4
                       text-4xl font-black
                       uppercase
                       tracking-tight
                       text-[#F7F3ED]
                       sm:text-5xl"
            >
                What Customers
                <br>

                Say About
                <span class="text-[#F4510B]">
                    SmokeHouse.
                </span>
            </h2>

            <p
                class="mt-5
                       max-w-xl
                       text-base leading-7
                       text-zinc-500"
            >
                From quick takeout meals to casual dine-in
                moments, SmokeHouse is made for people
                who enjoy simple, smoky, satisfying food.
            </p>

        </div>


        {{-- TESTIMONIAL GRID --}}
        <div
            class="grid gap-6
                   md:grid-cols-2
                   lg:grid-cols-3"
        >

            {{-- TESTIMONIAL 1 --}}
            <x-testimonials.testimonial-card
                image="images/testimonials/customer-1.jpg"
                name="Angela Reyes"
                position="Dine-In Customer"
                review="The chicken inasal was juicy and flavorful, and I really liked the smoky taste from the grill. The serving was filling and perfect for a casual meal with friends."
            />


            {{-- TESTIMONIAL 2 --}}
            <x-testimonials.testimonial-card
                image="images/testimonials/customer-2.jpg"
                name="Marco Santos"
                position="Regular Customer"
                review="I usually go for the grilled liempo. It has a nice char on the outside while staying tender inside. The prices are reasonable too, especially when you just want a satisfying meal."
            />


            {{-- TESTIMONIAL 3 --}}
            <x-testimonials.testimonial-card
                image="images/testimonials/customer-3.jpg"
                name="Janelle Cruz"
                position="Takeout Customer"
                review="We ordered a family meal for takeout and the portions were good for sharing. The food was still warm when we got home, and everyone enjoyed the grilled pork and chicken."
            />

        </div>


        {{-- PROJECT NOTE --}}
        <p
            class="mt-7 text-center
                   text-[11px]
                   text-zinc-600"
        >
            Sample customer testimonials created for academic project demonstration.
        </p>

    </div>
</section>