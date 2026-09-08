<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <meta
        name="description"
        content="SmokeHouse - Filipino grilled favorites in Barangay Central, Quezon City."
    >

    <title>@yield('title', 'SmokeHouse')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#090909] text-white antialiased">

    <x-navbar />

    <main>
        @yield('content')
    </main>

</body>
</html>