<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>SmokeHouse - Before Design</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white text-black">

    {{-- BASIC NAVBAR --}}
    <nav class="border-b border-gray-300 p-4">
        <div class="mx-auto max-w-6xl">
            <div class="flex items-center justify-between">

                <h1 class="text-xl font-bold">
                    SmokeHouse
                </h1>

                <div class="hidden gap-5 md:flex">
                    <a href="#">Home</a>
                    <a href="#">Features</a>
                    <a href="#">Pricing</a>
                    <a href="#">Testimonials</a>
                    <a href="#">Contact</a>
                </div>

            </div>
        </div>
    </nav>


    {{-- BASIC HERO --}}
    <section class="p-8">
        <div
            class="mx-auto grid max-w-6xl gap-8
                   md:grid-cols-2"
        >

            <div>
                <h2
                    class="text-4xl font-bold"
                >
                    SmokeHouse Grilled Food
                </h2>

                <p class="mt-4">
                    SmokeHouse offers grilled Filipino food
                    for dine-in and takeout in Barangay
                    Central, Quezon City.
                </p>

                <button
                    class="mt-5 border border-black
                           px-5 py-2"
                >
                    View Menu
                </button>
            </div>


            <div
                class="flex min-h-[300px]
                       items-center justify-center
                       bg-gray-200"
            >
                Product Image
            </div>

        </div>
    </section>


    {{-- BASIC FEATURES --}}
    <section class="bg-gray-100 p-8">

        <div class="mx-auto max-w-6xl">

            <h2 class="text-2xl font-bold">
                Features
            </h2>


            <div
                class="mt-6 grid gap-4
                       md:grid-cols-3"
            >

                <div class="border bg-white p-4">
                    <h3 class="font-bold">
                        Grilled Food
                    </h3>

                    <p class="mt-2 text-sm">
                        Fresh grilled dishes.
                    </p>
                </div>


                <div class="border bg-white p-4">
                    <h3 class="font-bold">
                        Dine-In
                    </h3>

                    <p class="mt-2 text-sm">
                        Available for dine-in customers.
                    </p>
                </div>


                <div class="border bg-white p-4">
                    <h3 class="font-bold">
                        Takeout
                    </h3>

                    <p class="mt-2 text-sm">
                        Food is available for takeout.
                    </p>
                </div>

            </div>

        </div>
    </section>


    {{-- BASIC PRICING --}}
    <section class="p-8">

        <div class="mx-auto max-w-6xl">

            <h2 class="text-2xl font-bold">
                Pricing
            </h2>


            <div
                class="mt-6 grid gap-4
                       md:grid-cols-3"
            >

                <div class="border p-5">
                    <h3 class="font-bold">
                        Solo Meal
                    </h3>

                    <p class="mt-3 text-2xl">
                        ₱99
                    </p>
                </div>


                <div class="border p-5">
                    <h3 class="font-bold">
                        Platter
                    </h3>

                    <p class="mt-3 text-2xl">
                        ₱149
                    </p>
                </div>


                <div class="border p-5">
                    <h3 class="font-bold">
                        Family Meal
                    </h3>

                    <p class="mt-3 text-2xl">
                        ₱468
                    </p>
                </div>

            </div>

        </div>
    </section>


    {{-- BASIC FOOTER --}}
    <footer
        class="border-t border-gray-300
               p-6 text-center"
    >
        SmokeHouse - Barangay Central, Quezon City
    </footer>

</body>
</html>