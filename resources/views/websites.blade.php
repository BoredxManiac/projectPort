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
    <main>

        <div>
            <h1 class="text-center mt-5 mb-5 ">WELCOMEEEEE</h1>
            <a href="{{ route('projects.create') }}">create</a>
        </div>

         @foreach ($websites as $website)

          <div class="grid  grid-rows-[repeat (3, 5px)] grid-cols-[repeat(3,auto)] w-full ">
                 <div class="flex flex-row">
                <img src="{{ asset('storage/images/' . $website->image )}}" alt="">
                <h3>{{ $website->title }}</h3>
            </div>
          </div>

          @endforeach

        {{-- <
        <div class="flex flex-row">
            <div class="w-[30%]">
            <p>lalalall</p>
            </div>
        <div class="grid  grid-rows-[repeat (3, 5px)] grid-cols-[repeat(3,auto)] w-full ">
            <div class="">
                <img src="https://placehold.co/200x200" alt="">
                <p>now</p>
            </div>
             <div>
                <img src="https://placehold.co/200x200" alt="">
                <p>now</p>
            </div>
             <div>
                <img src="https://placehold.co/200x200" alt="">
                <p>now</p>
            </div>
            <div>
                <img src="https://placehold.co/200x200" alt="">
                <p>now</p>
            </div>
        </div>
          </div> --}}
    </main>
    <x-footer />
</body>

</html>
