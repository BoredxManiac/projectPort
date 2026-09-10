<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex min-h-screen flex-col">
    <x-header />
    <main class="mx-auto w-5/6">
        <h1 class="mt-10px">Hello</h1>
        <div class="flex h-screen  items-center ">
            <div class="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit et nobis dicta adipisci rem, dolor
                    amet placeat numquam non culpa nemo est ullam quaerat repudiandae voluptatibus! Nobis rem optio
                    officiis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores distinctio, laudantium
                    deserunt minus harum dolorem iste modi sequi quos in totam, quas architecto et hic fugiat cum
                    blanditiis, suscipit esse.</p>
            </div>
            <div>
                <img class="w-full" src="{{ asset('images/placeholder.png') }}" alt="placeholder image">
            </div>
        </div>
    </main>
    <x-footer />

</body>

</html>
