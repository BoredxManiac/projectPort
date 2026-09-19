<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <header class="bg-blue-600">
        <div class="flex justify-between p-4">
            <h1>mijn portofolio</h1>
            <nav>
                <a href="{{ route('home') }}">home</a>
                <a href="{{ route('websites') }}">websites</a>
                <a href="{{ route('login') }}">login</a>
            </nav>
        </div>
    </header>

    {{ $slot }}

    <footer class="bg-blue-600 mt-auto">
        <div class="flex justify-between p-10">
            <h1>mijn portofolio</h1>
            <nav>
                <a href="{{ route('home') }}">home</a>
                <a href="{{ route('websites') }}">websites</a>
            </nav>
        </div>
    </footer>



</body>

</html>
