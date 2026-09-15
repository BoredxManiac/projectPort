<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>


<body class="flex min-h-1/2 flex-col">
    <x-header />
    <main class="mx-auto w-[95%]">
        <h1 class="text-center  mt-10 ">Welcome to my website</h1>
        <div class="flex flex-row-reverse h-screen mt-2 ">
            <div class="ml-10 w-3/4">
                <p class="w-5/6 items-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit et nobis dicta adipisci rem, dolor
                    amet placeat numquam non culpa nemo est ullam quaerat repudiandae voluptatibus! Nobis rem optio
                    officiis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores distinctio, laudantium
                    deserunt minus harum dolorem iste modi sequi quos in totam, quas architecto et hic fugiat cum
                    blanditiis, suscipit esse.</p>
            </div>
            <div>
                <img class="" src="https://placehold.co/800x800" alt="placeholder image">
            </div>
        </div>
    </main>
    <x-footer />

</body>

</html>
