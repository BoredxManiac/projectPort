<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#A6E1FA] text-black">

    <header class="bg-[#0E6BA8] rounded-b-xl p-5">
        <div class="flex justify-between p-4">
            <h1>mijn portofolio</h1>
            <nav class="flex gap-4">
                <a href="{{ route('home') }}">home</a>
                <a href="{{ route('websites') }}">websites</a>
                @guest<a href="{{ route('login') }}">login</a>@endguest
                @auth<form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
                @endauth
            </nav>
        </div>
    </header>

    {{ $slot }}

    <footer class="mt-2 bg-[#0E6BA8] mt-auto">
        <div class="flex justify-between p-4 mt-8 items-end">
            <ul class="mt-">
                <li class="mb-2">My portfolio</li>
                <li class="mb-2">A website made to showcase projects made</li>
                <li>website was designed and coded by Khadija Aweys M&copy;</li>
            </ul>
        </div>
    </footer>



</body>

</html>
